<?php
$prices  = array();
$typeids = array(
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
    4312,
    4246,
    16274,
    17889,
    17888,
    17887,
    16272,
    16273,
    16275,
);
$url     = "http://api.eve-central.com/api/marketstat?usesystem=30000142&typeid=" . join('&typeid=', $typeids);
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