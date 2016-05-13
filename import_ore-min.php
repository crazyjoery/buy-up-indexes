<?php
$prices  = array();
$typeids = array(
    34,
	35,
	36,
	37,
	38,
	39,
	40,
	11399,
	1230,
	1228,
	1224,
	18,
	1227,
	20,
	1226,
	1231,
	21,
	1229,
	1232,
	19,
	1225,
	1223,
	22,
	11396,
	// Salvage
	25595,
	25605,
	25616,
	25596,
	25600,
	25622,
	25599,
	25604,
	25623,
	25591,
	25590,
	25611,
	25597,
	25592,
	25615,
	25625,
	25601,
	25621,
	25624,
	25608,
	25620,
    25619,
    25610,
    25589,
    25603,
    25618,
    25609,
    25617,
    25613,
    25588,
    25614,
    25593,
    25594,
    25607,
    25602,
    25612,
    25598,
    25606,
);
$url     = "http://api.eve-central.com/api/marketstat?usesystem=30000142&minQ=500&typeid=" . join('&typeid=', $typeids);
$ch      = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_HEADER, 0);
$data = curl_exec($ch);

if ($data === false) {
    echo 'Curl error: ' . curl_error($ch);
} else {
    curl_close($ch);
}

$xml = new SimpleXMLElement($data);
foreach ($typeids as $typeid) {
    $item            = $xml->xpath('/evec_api/marketstat/type[@id=' . $typeid . ']');
    $price           = (float) $item[0]->sell->min;
    $prices[$typeid] = round($price, 2);
}

$types = implode(" ", $typeids);

mysqli_report(MYSQLI_REPORT_ALL);
// Traps all mysqli error 
try {
    // code that may fail here
    // Create connection
    $config = parse_ini_file('config.ini');
    $conn   = new mysqli($config['host'], $config['username'], $config['password'], $config['dbname']);
    $stmt   = $conn->prepare("INSERT INTO `item_prices` (`itemid`, `price`) VALUES (?,?) ON DUPLICATE KEY UPDATE `price`= VALUES (price)");
    
    foreach ($typeids as $id) {
        $stmt->bind_param('sd', $id, $prices[$id]);
        $stmt->execute();
    }
    
    echo "New records created successfully";
	$stmt->close();
	$conn->close();
}

catch (Exception $e) {
    echo $e;
}