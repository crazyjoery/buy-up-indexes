<?php

$typeids=array(34,35);
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

$con=mysql_connect("localhost","root",""); //Connect to database server
mysql_select_db("bui", $con) or die (mysql_error()); //Select the correct database

foreach($typeids as $typeid)

foreach ($xml -> marketstat as $row) {
	$typeid = $row -> item_ID;
	}
// perform sql query

$sql = "INSERT INTO 'prices' ('item_ID', 'price')" 
           . "VALUES ('$typeid')";

$result = mysql_query($sql);
if (!$result) {
	echo 'MySQL ERROR';
    } else {
		echo ' SUCCES';
	}
?>
