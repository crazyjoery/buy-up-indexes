<?php

$typeids=array(34);
$url="http://api.eve-central.com/api/marketstat?regionlimit=10000002&typeid=".join('&typeid=',$typeids);
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

$xml = simplexml_load_string($data);

$con=mysql_connect("localhost","root","Dutchpower89]"); //Connect to database server
mysql_select_db("bui", $con) or die (mysql_error()); //Select the correct database

foreach($typeids as $typeid)
{
	
    $item=$xml->xpath('/evec_api/marketstat/type[@id='.$typeid.']');
    $price= (float) $item[0]->sell->percentile;
    $price=round($price,2);
    echo $typeid." ".$price."\n";
}

// perform sql query

$sql = "INSERT INTO prices (item, price)" 
           . "VALUES ('$typeid', '$price')";

$result = mysql_query($sql);
if (!$result) {
	die (mysql_error());
    } else {
		echo ' SUCCES';
	}
?>
