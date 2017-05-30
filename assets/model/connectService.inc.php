<?php

function getContent($a){
    return file_get_contents("http://10.34.13.168:8080/OOP/rest/".$a);
}

?>

<!-- Example -->
<!-- <script >
    var x = <?php echo getContent("job/getAll");?>;
    alert("this is name: "+x.Job[0].jobskills[0].title);
</script> -->