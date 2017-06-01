             <br>
             // เห็นเฉพาะเจ้าของ Project นะจ้ะ //
             <br>

             <?php 
             $indexPositionManagement = 0;
             $maxPositionManagement = count($obj->Job->positions);
             ?>
             <div class="card card-nav-tabs">
                <div class="card-header" data-background-color="purple">
                    <div class="nav-tabs-navigation">
                        <div class="nav-tabs-wrapper">
                            <span class="nav-tabs-title">Positions Management: </span>
                            <ul class="nav nav-tabs" data-tabs="tabs">
                              <!-- <li class="active">
                                 <a href="#Front-End" data-toggle="tab" class="tabBar">
                                    Front-End Programmer
                                    <div class="ripple-container"></div>
                                </a>
                            </li> -->
                            <?php 
                            while($indexPositionManagement<$maxPositionManagement){

                                echo "<li class='";

                                if($indexPositionManagement==0) echo "active";

                                echo "'>
                                <a href='#".$obj->Job->positions[$indexPositionManagement]->pname."' data-toggle='tab' class='tabBar'>
                                    ".$obj->Job->positions[$indexPositionManagement]->pname."
                                    <div class='ripple-container'></div>
                                </a>
                            </li>";
                            $indexPositionManagement++;
                        };
                        ?>
                            <!-- <li class="">
                                <a href="#Back-End" data-toggle="tab" class="tabBar">
                                    Back-End Programmer
                                    <div class="ripple-container"></div>
                                </a>
                            </li> -->
                        </ul>
                    </div>
                </div>
            </div>

            <div class="card-content" id="posManageContent">
                <div class="tab-content">

                <?php 
                $indexPositionManagement=0;
                while($indexPositionManagement<$maxPositionManagement){
                 ?>
                    <div 
                    class="<?php 
                    if($indexPositionManagement==0) echo 'tab-pane active';
                    else echo 'tab-pane'; ?>" 

                    id="<?php echo $obj->Job->positions[$indexPositionManagement]->pname; ?>">
                        // List คนสมัครในตำแหน่งนี้ //
                        <table class="table table-hover">
                            <thead>
                              <tr>
                                <th style="text-align: center;">Username</th>
                                <th style="text-align: center;">RequestDetails</th>
                                <th style="text-align: center;">Email</th>
                                <th style="text-align: center;">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                          
                            <?php 
                            $maxRegisPos = count($obj->Job->positions[$indexPositionManagement]->requests);
                            $indexRegisPos = 0;
                            while($indexRegisPos<$maxRegisPos){ 
                            ?>
                            <tr>
                            <td style="text-align: center;"><?php 
                            $uID = $obj->Job->positions[$indexPositionManagement]->requests[$indexRegisPos]->idUsers; 
                            $getUser = json_decode(getContent("users/getById/".$uID));
                            echo $getUser->Users->name;
                            ?></td> 

                            <td style="text-align: center;"><button type="button" class="btn btn-info" data-toggle="modal" data-target="#detailsModal" id="<?php echo $obj->Job->positions[$indexPositionManagement]->requests[$indexRegisPos]->idRequest; ?>" value="<?php echo $indexPositionManagement.$indexRegisPos; ?>" >View Details</button></td>
                            
                            <td style="text-align: center;"><?php echo $getUser->Users->email; ?></td>
                            <td style="text-align: center;">
                                <div class="btn-group btn-group-md">
                                    <button type="button" class="btn btn-success">Accept</button>
                                    <button type="button" id="<?php echo $getUser->Users->name; ?>" value="<?php echo $indexPositionManagement.$indexRegisPos; ?>" class="btn btn-warning btnReply">Reply</button>
                                    <button type="button" class="btn btn-danger">Decline</button>
                                    <input type="hidden" value="<?php echo $obj->Job->positions[$indexPositionManagement]->requests[$indexRegisPos]->rdetail; ?>" id="<?php echo $indexPositionManagement.$indexRegisPos; ?>" class="form-control">
                                </div>
                            </td>
                            </tr>

                            <?php $indexRegisPos++; }; ?>
                    
                    </tbody>
                </table>
            </div>

            <?php 
            $indexPositionManagement++;
            }; ?>
            
</div>
</div>
</div>


<div class="collapse" id="agreementCollapseInPosManage">
    <?php include "component/addAgreement.inc.php"; ?>
</div>

<!-- Modal details -->
<div id="detailsModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Details</h4>
    </div>
    <div class="modal-body">
        <p id="mDetail">Some text in the modal.</p>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
    </div>
</div>

</div>
</div>




<script src="assets/js/jquery-3.1.0.min.js" type="text/javascript"></script>
<script>
   $().ready(function(){
    $(".btn-info").click(function (e) {
        e.preventDefault();
        $("#mDetail").text($("#"+$(this).val()).val());
        // $(this).hide();

    });

    $(".tabBar").click(function (e){
        $("#agreementCollapseInPosManage").collapse("hide");
    });

    $("#posManageContent .btnReply").click(function (e) {
           // $(this).text("lerpso");
           e.preventDefault();
            // alert($(this).attr("id"));
            // confirm("Do you wanna register to "+$(this).attr("id")+" ?");
            // $("#agreementCollapse").collapse("hide");
            $("#agreementCollapseInPosManage #addAgreementJobID").text(<?php echo $pID; ?>);
            // alert("dodoodo");
            $("#agreementCollapseInPosManage #addAgreementJobName").text('<?php 
                echo $obj->Job->jname;   
             ?>');
            $("#agreementCollapseInPosManage #addAgreementPosID").text($(this).attr("value"));
            $("#agreementCollapseInPosManage #addAgreementUserID").text($(this).attr("id"));
            
            // alert($(this).val());
            $("#agreementCollapseInPosManage #agreementDetail").text($("#"+$(this).val()).val());
            $("#agreementCollapseInPosManage").collapse("show");
        });

    $("#agreementCollapseInPosManage #addAgreementBtnCancel").click(function (e){
        $("#agreementCollapseInPosManage").collapse("hide");
    });
});


</script>