<?php

function getContent($a,){
    return json_decode(file_get_contents("http://10.34.13.168:8080/OOP/rest/".$a,true));
}

?>

<!-- <script >
    var x = <?php echo json_encode(getContent("job/getAll"));?>;
    alert("this is name: "+x.Job[0].jname+" this is jDetail: "+x.Job[0].jdetail);
</script> -->