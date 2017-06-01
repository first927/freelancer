<?php

function getContent($a){
    return file_get_contents("http://192.168.43.182:8080/OOP/rest/".$a);
}

?>