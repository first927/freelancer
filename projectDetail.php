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

    $obj = json_decode(getContent("job/getById/".$pID));
    // echo $obj->Job->jname;
    ?>
    
    <div class="col-md-12" >
        <div class="card">
            <div class="card-header " data-background-color="purple">
                <h2 class="title" >JOB : <?php echo $obj->Job->jname; ?></h2>
            </div>
            <div class="card-content">

                <h4 class="title" >Details</h4>

                <p class="category">
                <?php echo $obj->Job->jdetail; ?>
                </p>

                <br>

                <h4 class="title" >Required skills</h4>
                <p class="category">
                <table class="table">
    <thead>
        <tr>
            <th class='text-center'>#</th>
            <th class='text-center'>Name</th>
            <th class='text-center'>Skill Detail</th>
        </tr>
    </thead>
    <tbody>
                    <?php 

                    $indexJobskills = 0;
                    $max = count($obj->Job->jobskills); 
                    while($indexJobskills < $max){
                        echo "<td class='text-center'>".$obj->Job->jobskills[$indexJobskills]->idJobSkill."</td>";
                        echo "<td class='text-center'>".$obj->Job->jobskills[$indexJobskills]->title."</td>";
                        echo "<td class='text-center'>".$obj->Job->jobskills[$indexJobskills]->jskillDetail."</td>";

                        $indexJobskills++;
                    }

                    ?>
                    </tbody>
                    </table>

                </p>
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