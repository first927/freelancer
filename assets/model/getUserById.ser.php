<?php

$id = $_GET["id"];
$url = "http://192.168.43.182:8080/OOP/rest/users/getById/".$id;

echo file_get_contents($url);

?>