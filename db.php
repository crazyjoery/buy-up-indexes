<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bui";

$typeids=array(34,35,36,37);
$url="http://api.eve-central.com/api/marketstat?regionlimit=10000002&typeid=".join('&typeid=', $typeids);
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_HEADER, 0);
$data = curl_exec($ch);
if($data === false)
{
    echo 'Curl error: ' . curl_error($ch);
}
else
{
    curl_close($ch);
}

$xml =new SimpleXMLElement($data);

foreach($typeids as $typeid){
    $item=$xml->xpath('/evec_api/marketstat/type[@id='.$typeid.']');
    $price= (float) $item[0]->sell->percentile;
    $price=round($price,2);
	echo $typeid." ".$price."\n";
}

$types = implode(" ",$typeids);

mysqli_report(MYSQLI_REPORT_ALL); // Traps all mysqli error 

 try {
   // code that may fail here
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

$stmt = $conn->prepare("INSERT INTO `item_prices` (`itemid`, `price`) VALUES (?,?) ON DUPLICATE KEY UPDATE `itemid`= VALUES (itemid)");

foreach ($typeids as $id) {
   $stmt->bind_param('sd', $id, $price);
   $stmt->execute();
}

echo "New records created successfully";

$stmt->close();
$conn->close();

} catch (\Exception $e) {
	echo $e;
	}


?>
