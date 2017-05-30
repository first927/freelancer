<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png" />
    <link rel="icon" type="image/png" href="assets/img/favicon.png" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    
    <title>Project Master 007</title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />

    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />

    <!-- CSS Files -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="assets/css/material-dashboard.css" rel="stylesheet"/>
    <link href="documentation/css/demo-documentation.css" rel="stylesheet" />

    <script src="https://cdn.rawgit.com/google/code-prettify/master/loader/run_prettify.js"></script>
    
    <style>

        body{
            /*//background-image: url('assets/img/bg4.jpg');*/
            background-color: lightgray;
            background-attachment: fixed;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }
        #myCard{
         overflow:auto;
         width: 90%; 
         height:500px; 
         font-size: 14px;
         margin-left: 5%;
         margin-right: 5%;
     }
     pre.prettyprint{
        background-color: #eee;
        border: 0px;
        margin-bottom: 60px;
        margin-top: 30px;
        padding: 20px;
        text-align: left;
    }
    .atv, .str{
        color: #05AE0E;
    }
    .tag, .pln, .kwd{
        color: #3472F7;
    }
    .atn{
        color: #2C93FF;
    }
    .pln{
        color: #333;
    }
    .com{
        color: #999;
    }
    .space-top{
        margin-top: 50px;
    }
    .area-line{
        border: 1px solid #999;
        border-left: 0;
        border-right: 0;
        color: #666;
        display: block;
        margin-top: 20px;
        padding: 8px 0;
        text-align: center;
    }
    .area-line a{
        color: #666;
    }
    .container-fluid{
        padding-right: 15px;
        padding-left: 15px;
    }
    .modal-header, h3, .close {
        background-color: purple;
        color:white !important;
        text-align: center;
        font-size: 30px;
    }
    
</style>
</head>
<body background="assets/img/bgTest.jpg">

    <?php 
    include "component/navbar.php";
    include "assets/model/connectService.inc.php";
    $pID = $_GET["proID"];
    ?>
    
    <div class="col-md-12" >
        <div class="card">
            <div class="card-header " data-background-color="purple">
                <h2 class="title" >JOB NAME <?php echo $pID; ?></h2>
            </div>
            <div class="card-content">

                <h4 class="title" >Details</h4>

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
                    <br>
                    .<br>
                    <br>
                    - ผู้กองเบนซ์ -<br>
                </p>
                <br>
                <p class="category">Non voluptate deserunt commodo ad magna dolor sit reprehenderit ex veniam anim nisi pariatur dolore elit consequat. Aute in aliquip duis laboris do irure culpa eu fugiat nisi non ea magna amet duis. Veniam duis consequat commodo ex enim nostrud laborum exercitation magna ex. Proident duis cillum aliquip qui enim velit magna aliquip deserunt in et exercitation ut. Ullamco sit commodo ut consequat et in ex id cupidatat magna nisi. Aliqua et amet consequat eiusmod ut qui laboris adipisicing ullamco proident laborum laboris. Ut aliquip incididunt dolore ad elit eu minim id sed esse anim sit ad eu. Aliquip sit minim dolor officia proident sunt dolor elit do mollit consectetur aliqua officia. Culpa ea voluptate ex fugiat laborum commodo adipisicing id duis eu aliqua id nulla.
                </p>
                <br>
                <p class="category">Ut ad enim amet aliquip in reprehenderit est est ex. Fugiat sit proident fugiat enim ut occaecat dolor consectetur. Laborum dolore anim reprehenderit reprehenderit consequat ea labore excepteur incididunt. Sit aliquip tempor magna in nulla nulla incididunt officia excepteur do ullamco nisi amet commodo do. Nostrud dolor in sunt proident aliquip ullamco dolor ad dolor cupidatat laborum et deserunt. Duis ad deserunt commodo et duis cupidatat mollit aliqua incididunt reprehenderit sit occaecat enim aute sint reprehenderit minim amet. Occaecat officia consectetur qui voluptate eu nulla cupidatat occaecat anim occaecat reprehenderit cillum dolore consequat tempor. Dolor id laborum elit ut cupidatat ut ea sint do magna id esse dolore veniam sint. Deserunt sunt sunt elit sint cupidatat deserunt magna culpa in.
                </p> 
                <br>

                <p class="category">Consectetur aute consectetur fugiat ad esse nulla mollit esse exercitation nostrud consequat cillum aliquip reprehenderit anim magna. Mollit adipisicing veniam ullamco duis cillum fugiat dolor et sunt et duis esse mollit voluptate consequat. Dolore qui cillum tempor in elit est incididunt in aute.</p>
                <br>

                <h4 class="title" >Requirements</h4>
                <p class="category">Sit adipisicing excepteur aliquip velit sit velit ut laboris dolor sint sit. Lorem ipsum ea labore enim sit cupidatat consectetur culpa sint non tempor esse consequat officia ullamco labore irure. Est qui esse culpa dolor sit voluptate quis ut veniam excepteur cupidatat. Nulla laboris labore ad pariatur ullamco anim et laborum dolore incididunt mollit ullamco. Do dolore cillum in non id quis est sed voluptate adipisicing sint ullamco aute magna. Lorem ipsum magna pariatur qui mollit in anim ad pariatur anim ut enim ut eiusmod dolore in. Lorem ipsum sunt exercitation tempor ut minim dolore mollit qui id consequat eiusmod eiusmod adipisicing id. Enim nostrud excepteur elit dolor ea sit labore duis dolore consectetur ut ut. Lorem ipsum esse qui occaecat et ea sint tempor non aliquip ad quis adipisicing labore sunt consectetur. Ut commodo amet exercitation ullamco minim proident ut nostrud magna nostrud reprehenderit do ea tempor. Commodo dolor dolor aliqua elit irure quis dolor cupidatat. Lorem ipsum ad commodo in consectetur laboris fugiat est aute sint.</p>
                <br>

                <h4 class="category" style="float: right;"><b><i>- OOPS PRODUCTION.</i></b></h4>


                <?php include "component/registerInJobPosition.inc.php"; ?>
                <br>
                <br>
                <?php include "component/positionsManagement.inc.php"; ?>

                <br>
                <?php include "component/agreementDetails.inc.php"; ?>
                <br>
                <!-- <?php include "component/addAgreement.inc.php"; ?> -->
            </div>
            <div class="card-footer">
                <div class="stats">
                    <i class="material-icons">access_time</i> updated 4 minutes ago
                    <p class="category"><span class="text-success"><i class="fa fa-long-arrow-up"></i> 55%  </span> increase in today sales.</p>
                </div>
            </div>
        </div>
    </div>
</body>

<!--   Core JS Files   -->
<script src="assets/js/jquery-3.1.0.min.js" type="text/javascript"></script>
<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>
<script src="assets/js/material.min.js" type="text/javascript"></script>

<!--  Charts Plugin -->
<script src="assets/js/chartist.min.js"></script>

<!--  Notifications Plugin    -->
<script src="assets/js/bootstrap-notify.js"></script>

<!--  Google Maps Plugin    -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>

<!-- Material Dashboard javascript methods -->
<script src="assets/js/material-dashboard.js"></script>

<!-- Material Dashboard DEMO methods, don't include it in your project! -->
<script src="assets/js/demo.js"></script>

<!-- <script src="connectService.inc.js"></script> -->


<script>
    var header_height;
    var fixed_section;
    var floating = false;

    $().ready(function(){
        suggestions_distance = $("#suggestions").offset();
        pay_height = $('.fixed-section').outerHeight();
        $('.modal').appendTo("body");
        $(window).on('scroll', md.checkScrollForTransparentNavbar);
        demo.initDocumentationCharts();

        $(".selectAll").click(function (e) {
            e.preventDefault();
            $(".buttonAvailable").show(499);
            $(".buttonUnavailable").show(499);
        });
        
    });




</script>
</html>