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
    <?php include "assets/model/connectService.inc.php"; ?>

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
        div.sidebar{
            position:relative ;
            display : block ; 
        }
        .show-box{
            box-shadow: 0px 0px 0px  black ;
            
        }

        .sub-content {
           float: right;
        }
        .myjob-content{
            display:none;
        }
        .subtitle{
            color:black;
            margin: 0px;
        }
        .card-profile > button.btn{
            display: inline-block;
        }
        #profile-btn{
            position:absolute;
            right: 2%;
        }
        #inviteForm ,#profile-portfolio{
            display : none;
            margin: auto;
        }
        #inviteForm .form-group{
            text-align : left;
        }
        #profile-save-btn ,#profile-backport-btn, #back-btn{
            display:none;
        }
        
    </style>
</head>
<body>
    
    <?php
        $addPath = "%7B%22idJob%22%20:%2010,%22jstatus%22%20:%200,%22jname%22%20:%20%22testName0%22,%22jdetail%22%20:%20%22testDetail0%22,%20%22jobskills%22%20:%20[%7B%20%22idJobSkill%22%20:%2010,%22title%22%20:%20%22testTitle0%22,%22jskillDetail%22%20:%20%22testSkillDetail0%22%7D,%7B%22idJobSkill%22%20:%2010,%22title%22%20:%20%22testTitle1%22,%22jskillDetail%22%20:%20%22testSkillDetail1%22%7D],%22positions%22%20:%20[]%7D";
        function get(){
            return 1;
        }
        $testjob = "A";
        include "component/navbar.php"; 
        include "component/userprofileModal.inc.php" ;
    ?>
    <div>
        <div class="col-md-2">
            <?php include "component/jobSearchBar.inc.php"; ?>
            <?php include "component/sideMenu.php"; ?>
        </div>
        <div class="col-md-10">
            <?php include "component/tabList.php";?>
        </div>
    </div>
    
    
</body>
    
	<script>
		function Redirect(id)
		{
    		window.location="projectDetail.php?proID="+id;
		}
	</script>
  <script>
        function myFunction() {
        var input , myText , myCard ,detail, text, i , j;
		input = document.getElementById("search");
		myText = input.value.toUpperCase();

        myHeadCard = document.getElementById("myCard");

        myCard = myHeadCard.getElementsByTagName("div");
		
        for(i = 0 ; i < myCard.length; i+=7){
			detail = myCard[i].getElementsByTagName("div");
			text = detail[3].getElementsByTagName("h4");

			if(text[0].innerHTML.toUpperCase().indexOf(myText) > -1){
				myCard[i].style.display="";
			}
			else{
				myCard[i].style.display = "none";
			}
		}
		}
    </script>
<!--   Core JS Files   -->
<script src="assets/js/jquery-3.2.1.min.js" type="text/javascript"></script>
<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>
<script src="assets/js/material.min.js" type="text/javascript"></script>
<script src="assets/js/jquery.animate-shadow.js" type="text/javascript"></script>

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

<!--button-controller in userProfile-Modal-->
<script src="assets/myJs/buttonController.js"></script>

<script>
    function addJob(){
        var pName = $('[id="Pname"]').val();
        alert(pName);
        var pDetail = $('[name="Pdetail"]').val();
        //alert("kif");
        var pSkill = document.getElementsByName("skill_1");
        var pEarn = document.getElementsByName("earning_1");
        //alert("kif");
        var url = getAddJobURL(pName,pDetail,pSkill,pEarn);
        
        $.get("assets/model/saveOrUpdate.ser.inc.php",{"url":url},function(result){
            alert(result);
        });
        
    }
    
    function getAddJobURL(pName,pDetail,pSkill,pEarn){
        var url = "%7B%22idJob%22%20:%2010,%22jstatus%22%20:%200,%22jname%22%20:%20%22"+pName+"%22,%22jdetail%22%20:%20%22"+pDetail+"%22,%20%22jobskills%22%20:%20[";
        
        for(var i = 0; i < pSkill.length ; i++){
            url+="%7B%20%22idJobSkill%22%20:%20"+"10"+",%22title%22%20:%20%22"+pSkill.item(i).value+"%22,%22jskillDetail%22%20:%20%22"+"funking-detail!"+"%22%7D";
            if(i < pSkill.length-1){
                url+=",";
            }
        }
        url+="],%22positions%22%20:%20[]%7D";
        return url;
    }
    


</script>
    <?php

    ?>

<script>
    $(".pagination-button").click(function(){
       var page = $(this).attr("id");
        $(".myjob-box").hide();
        $("div#"+page).show();
        $("li.active").removeClass("active");
        $("li#"+page).addClass("active");
//        $("div#"+page).css("display","block");
    });
</script>
<script>

function popupModal(id){
    $("#profileModal  #profiletitle").text("User ");
}
function showJob(id){
        //hide/show myjob content
        $("#"+id).slideToggle(500);
    }
</script>

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
    });
</script>
</html>