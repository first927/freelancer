             <br>
             // เห็นเฉพาะคนที่สมัครเข้า Job นี้นะจ้ะ //
             <br>

             <button type="button" id="toggleButton" class="btn btn-primary" data-toggle="collapse" data-target="#agreementDetails">View agreement</button>

             <div class="collapse" id="agreementDetails">
                 <div class="card" >
                    <div class="card-header " data-background-color="purple">
                        <h2 class="title" >JOB NAME <?php echo $pID; ?> Agreement Details
                            <button type="button" class="btn btn-success" style="float: right;">Status</button>
                        </h2>

                    </div>
                    <div class="card-content">

                        <h4 class="title" >Freelancer need ...</h4>

                        <p class="category">
                            [รีวิว] ชีวิตฟรีดอม ก็ทำเงินได้ !<br>
                            ----------------------------------------------------<br>
                            รับฟัง และเปิดใจกับโลกของ “คนไร้บ้าน” ในงาน “Human of Street” วันเสาร์ที่ 3 มิถุนายน 2560 เวลา 14.30 - 17.30 น. ณ พิพิธบางลำพู 
                            ติดตามข้อมูลเพิ่มเติม <br>
                            การปฎิวัติวงการเกมมือถือ 2017, Lineage2 Revolution<br>
                            กราฟิกคุณภาพสูงที่ควรคู่กับโอเพ่นฟิลด์ขนาดใหญ่<br>
                            ลงทะเบียนล่วงหน้าตอนนี้เลย
                            คลิปนี้ดีมาก<br>

                            เหมาะอย่างยิ่งกับสถานการณ์ปัจจุบัน<br>

                            .<br>

                            ในยุคที่ผู้คนยืนอยู่บนความก้ำกึ่งระหว่าง "ผู้สร้าง" กับ "ผู้เสพย์"<br>

                            ขณะที่บางคน 'เสพย์' มาแล้วพยายาม 'สร้าง' ต่อ<br>

                            อีกหลายคน 'เสพย์' มาแล้ว 'ทำลาย'
                            <br>
                            .
                            <br>
                            ไม่ว่าคุณจะทำอะไร ... ยังไงก็มีคนด่า<br>

                            ยิ่งคุณ 'เชื่อมั่น'<br>

                            คุณยิ่งต้อง 'ช่างแม่ง'<br>

                            .<br>
                            - ผู้กองเบนซ์ -<br>
                            <br>
                            <p class="category"><b>PRICE : 35000 thb.</b></p>
                        </p>
                        <br>
                        <h4 class="title" >Company offer you ...</h4>
                        <p class="category">Non voluptate deserunt commodo ad magna dolor sit reprehenderit ex veniam anim nisi pariatur dolore elit consequat. Aute in aliquip duis laboris do irure culpa eu fugiat nisi non ea magna amet duis. Veniam duis consequat commodo ex enim nostrud laborum exercitation magna ex. Proident duis cillum aliquip qui enim velit magna aliquip deserunt in et exercitation ut. Ullamco sit commodo ut consequat et in ex id cupidatat magna nisi. Aliqua et amet consequat eiusmod ut qui laboris adipisicing ullamco proident laborum laboris. Ut aliquip incididunt dolore ad elit eu minim id sed esse anim sit ad eu. Aliquip sit minim dolor officia proident sunt dolor elit do mollit consectetur aliqua officia. Culpa ea voluptate ex fugiat laborum commodo adipisicing id duis eu aliqua id nulla.
                        </p>
                        <br> 
                        <br>

                        <br>

                        <p class="category"><b>PRICE : 29000 thb.</b></p>
                        <br>
                        <br>

                        <h4 class="category" style="float: right;"><b><i>- OOPS PRODUCTION.</i></b></h4>

                        <div class="btn-group btn-group-md">
                            <button type="button" class="btn btn-success">Accept</button>
                            <button type="button" class="btn btn-warning btnReply">Reply</button>
                            <button type="button" class="btn btn-danger">Decline</button>
                        </div>
                    </div>
                </div>
            </div>


            <div class="collapse" id="agreementCollapseInAgreementDetails">
                <?php include "component/addAgreement.inc.php"; ?>
            </div>
<script src="assets/js/jquery-3.1.0.min.js" type="text/javascript"></script>
<script>
 $().ready(function(){
    $("#agreementDetails .btnReply").click(function (e) {
           // $(this).text("lerpso");
           e.preventDefault();
            // alert($(this).attr("id"));
            // confirm("Do you wanna register to "+$(this).attr("id")+" ?");
            // $("#agreementCollapse").collapse("hide");
            $("#agreementCollapseInAgreementDetails #addAgreementJobID").text(<?php echo $pID; ?>);
            // $("#addAgreementJobName").text();
            $("#agreementCollapseInAgreementDetails #addAgreementPosID").text(" FIND POSITION ID ด้วย ");
            $("#agreementCollapseInAgreementDetails #addAgreementUserID").text(" FIND USER ID ด้วย ");
            $("#agreementCollapseInAgreementDetails").collapse("show");
    });

    $("#agreementCollapseInAgreementDetails #addAgreementBtnCancel").click(function (e){
            $("#agreementCollapseInAgreementDetails").collapse("hide");
  });
});


</script>