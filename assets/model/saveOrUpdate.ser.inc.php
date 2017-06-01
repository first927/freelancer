<?php
$path = $_GET["url"];
$url = "http://192.168.43.182:8080/OOP/rest/job/add/".$path;
echo $url ;
file_get_contents($url);
?>