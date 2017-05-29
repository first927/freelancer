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
        div.sidebar{
            position:relative ;
            display : block ; 
        }
        .show-box{
            box-shadow: 0px 0px 0px  black ;
            animation-name: fadeBackShadow ;
            animation-duration: 0.5s;
            animation-iteration-count: 1;
            
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
            position:absolute; 
            right: 2%;
        }
        #inviteForm{
            display : none;
            margin: auto;
        }
        #inviteForm .form-group{
            text-align : left;
        } 
    </style>
</head>
<body>
    <?php  
        include "component/navbar.php"; 
        include "component/userprofileModal.inc.php" ;
        include "component/jobInviteModal.inc.php";
    ?>
    <div>
        	<div class="content">
	            <div class="container-fluid">
	                <div class="row">
	                    <div class="col-md-12">
	                        <div class="card card-plain">
	                            <div class="card-header" data-background-color="purple">
	                                <h1 class="title" align="center">JOBS LIST</h1>
	                            </div>

	                    	</div>
	                	</div>
	            	</div>
	        	</div>
	    	</div>
    </div>
    <div>
        <div class="col-md-2">
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

<script>
$(document).ready(function(){
    //toggle side menu
    $("div.sidebar-wrapper  li").click(function() {
        $("div.sidebar-wrapper li").removeClass("active");
        $(this).addClass("active");
    });

    $('[data-toggle="tooltip"]').tooltip();

    $(".show-box").mouseover(function(){
        $(this).animate({ boxShadow: "0px 0px 20px  black" } , 100);
    });
    $(".show-box").mouseleave(function(){
        $(this).animate({ boxShadow: "0px 0px 0px  black" } , 100);
    });
});
function popupInvite(){
    $("#profileModal  #showForm").fadeToggle(500);
    setTimeout(function() {
        $("#profileModal  #inviteForm").fadeToggle(500);
    }, 500); 
    var sign = $("#profileModal  .main-icon").text();
    if(sign == "backspace"){
        $("#profileModal  .main-icon").text("add");
    }else{
        $("#profileModal  .main-icon").text("backspace");
    }
    
     //$("#profileModal").fadeToggle(500);
}
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