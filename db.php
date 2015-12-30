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
    2268,
    2309,
    2267,
    2272,
    2270,
    2288,
    2073,
    2287,
    2286,
    2310,
    2398,
    2307,
    2306,
    2308,
    2305,
    16262,
    17978,
    16263,
    17977,
    16265,
    17976,
    16264,
    17975,
    16266,
    16267,
    16268,
    16269,
    4247,
    4051,
    17888,
    4312,
    4246,
    30370,
    30371,
    30372,
    30373,
    30374,
    30375,
    30376,
    30377,
    30378,
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
    11396
);
$url     = "http://api.eve-central.com/api/marketstat?regionlimit=10000043&typeid=" . join('&typeid=', $typeids);
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
    $price           = (float) $item[0]->sell->percentile;
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
    $stmt   = $conn->prepare("INSERT INTO `item_prices` (`itemid`, `price`) VALUES (?,?) ON DUPLICATE KEY UPDATE `itemid`= VALUES (itemid)");
    
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

?>