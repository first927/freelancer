<?php
$path = $_GET["path"];
$url = "http://192.168.43.182:8080/OOP/rest/users/update/".$path;
echo file_get_contents($url);

?>