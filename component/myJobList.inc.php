
<?php 
    $i = 0;
    while($i < 10){ ?>
<div >
    <div class="card myjob-header show-box">
        <div class="card-header " data-background-color="blue" onclick="showJob(<?php echo $i; ?>)">
            <h4 class="title" style="margin-bottom:1px;">
                <b class="col-md-10">JobName </b>
                <a class="text-danger col-md-2"><small>(click for more detail)</small></a>
            </h4>
            <p class="subtitle " ><strong>Position: Programmer</strong></p>
            <span class="label label-warning col-md-2" style="float:right">Pending...</span>
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
                        detail here your detail here your detail here your detail here </>
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
