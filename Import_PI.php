<?php
$prices  = array();
$typeids = array(
    // Raw PI
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
    // Tier1 PI
    2393,
    2396,
    3779,
    2401,
    2390,
    2397,
    2392,
    3683,
    2389,
    2399,
    2395,
    2398,
    9828,
    2400,
    3645,
    // Tier2 PI
    2329,
    3828,
    9836,
    9832,
    44,
    3693,
    15317,
    3725,
    3689,
    2327,
    9842,
    2463,
    2317,
    2321,
    3695,
    9830,
    3697,
    9838,
    2312,
    3691,
    2319,
    9840,
    3775,
    2328,
    // Tier3 PI
    2358,
    2345,
    2344,
    2367,
    17392,
    2348,
    9834,
    2366,
    2361,
    17898,
    2360,
    2354,
    2352,
    9846,
    9848,
    2351,
    2349,
    2346,
    12836,
    17136,
    28974,
    // Tier4 PI
    2867,
    2868,
    2869,
    2870,
    2871,
    2872,
    2875,
    2876,
);
$url     = "http://api.eve-central.com/api/marketstat?minQ=50&typeid=" . join('&typeid=', $typeids);
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