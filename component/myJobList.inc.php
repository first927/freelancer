
<?php 
    $i = 0;
    while($i < 10){
        $page = floor($i/3);
        if($page == 0){?>
            <div class="col-md-12 myjob-box"  id='<?php echo "page-$page" ; ?>'>
        <?php }else{ ?>
            <div class="col-md-12 myjob-box" style="display:none" id='<?php echo "page-$page" ; ?>'> 
        <?php }?>

    <div class="card myjob-header show-box">
        <div class="card-header " data-background-color="blue" onclick="showJob(<?php echo $i; ?>)">
            <h4 class="title" style="margin-bottom:1px;">
                <b class="col-md-10">JobName </b>
                <a class="text-danger col-md-2"><small>(click for more detail)</small></a>
            </h4>
            <p class="subtitle " ><strong>Position: Programmer</strong></p>
                <?php 
                    if($i%2 == 0){
                        echo "<span class='label label-warning col-md-2' style='float:right'>Pending...</span>" ;
                    }
                    else if($i%3 == 0){
                         echo "<span class='label label-success col-md-2' style='float:right'>Accepted</span>" ;
                    }else{
                         echo "<span class='label label-danger col-md-2' style='float:right'>Canceled</span>" ;
                    }
                ?>
            
	    </div>
 
        

        <?php echo "<div class='myjob-content' id='$i'>"; ?>
            <div class="card-content">
                <p class="category">DETAIL:</p>
            </div>

            <div class="sub-content col-md-11">
                        <p > your detail here your detail here your detail here your detail here your 
                    detail here your detail here your detail here your detail here your 
                    detail here your detail here your detail here your detail here
                    detail here your detail here your detail here your detail here
                    your detail here your detail here your detail here your detail here your 
                    detail here your detail here your detail here your detail here your 
                    detail here your detail here your detail here your detail here
                    detail here your detail here your detail here your detail here
                    your detail here your detail here your detail here your detail here your 
                    detail here your detail here your detail here your detail here your 
                    detail here your detail here your detail here your detail here
                    detail here your detail here your detail here your detail here
                    your detail here your detail here your detail here your detail here your 
                    detail here your detail here your detail here your detail here your 
                    detail here your detail here your detail here your detail here
                    detail here your detail here your detail here your detail here
                    your detail here your detail here your detail here your detail here your 
                    detail here your detail here your detail here your detail here your 
                    detail here your detail here your detail here your detail here
                    detail here your detail here your detail here your detail here
                    your detail here your detail here your detail here your detail here your 
                    detail here your detail here your detail here your detail here your 
                    detail here your detail here your detail here your detail here
                    detail here your detail here your detail here your detail here
                    your detail here your detail here your detail here your detail here your 
                    detail here your detail here your detail here your detail here your 
                    detail here your detail here your detail here your detail here
                    detail here your detail here your detail here your detail here
                    your detail here your detail here your detail here your detail here your 
                    detail here your detail here your detail here your detail here your 
                    detail here your detail here your detail here your detail here
                    detail here your detail here your detail here your detail here
                        detail here your detail here your detail here your detail here
            </div>
            <div class="card-content">
                <p class="category">COLLABOLATOR:</p>
                
            </div>
            <div class="sub-content col-md-12">
                <?php include "collaboratorList.inc.php" ?>
            </div>
        </div>
        
        <div class="card-footer" style="margin-bottom:5%;">
            <hr>
            <div class='stats col-md-10' >
				<i class='material-icons'>access_time</i> since 1996
			</div>
            <div class="stats col-md-2 ">
                <i class="material-icons text-warning ">settings</i> <a  href="projectDetail.php?proID=<?php echo $i ;?>">manage your job</a>
            </div>
            
        </div>


    </div>
    
</div>


    


<?php  $i++; } ?>
<style>
    .pagination-tab{
        margin:auto;
        width: 100%;
        text-align:center;
    }

</style>

<div class="col-md-12 pagination-tab">
    <ul class="pagination pagination-danger">
    <?php
        $i=0;
        while($i<10){ 
            $page = floor($i/3);
            if($i%3==0){
                if($i==0){?>
                    <li class="active" id="page-<?php echo $page; ?>"><a class="active pagination-button" id="page-<?php echo $page; ?>" href='#page-<?php echo $page; ?>'><?php echo $i/3; ?></a></li>
                <?php }else{ ?>
                
                    <li id="page-<?php echo $page; ?>"><a class="pagination-button" id="page-<?php echo $page; ?>" href="#page-<?php echo $page; ?>"><?php echo $i/3; ?></a></li>
                <?php }
            }?>
        <?php $i++;    
        } ?>
    </ul>
</div>


