$(document).ready(function(){
    //toggle side menu
    $("div.sidebar-wrapper  li").click(function() {
        $("div.sidebar-wrapper li").removeClass("active");
        $(this).addClass("active");
    });

    $('[data-toggle="tooltip"]').tooltip();

    //box-shadow
    $(".show-box").mouseover(function(){
        $(this).animate({ boxShadow: "0px 0px 20px  black" } , 100);
    });
    $(".show-box").mouseleave(function(){
        $(this).animate({ boxShadow: "0px 0px 0px  black" } , 100);
    });

    //toggle edit-save-invite-port-back
    $("#profile-edit-btn").click(function(){
        $("#profile-detail input").prop('disabled', false);
        $(this).css("display","none");
        $("#profile-save-btn").css("display","inline-block");
        $("#profile-port-btn").css("display","none");
        $("#invite-btn").css("display","none");
        $("#profile-detail input#username").focus();
    });
    //save
    $("#profile-save-btn").click(function(){
        $("#profile-detail input").prop('disabled', true);
        $(this).css("display","none");
        $("#invite-btn").css("display","inline-block");
        $("#profile-port-btn").css("display","inline-block");
        $("#profile-edit-btn").css("display","inline-block");
    });
    //protfolio
    $("#profile-port-btn").click(function(){

        $("#profileModal  #showForm").slideToggle(500,function(){
            $("#profile-portfolio").slideToggle(500);
        });
        $(this).css("display","none");
        $("#profile-backport-btn").css("display","inline-block");
        $("#profile-edit-btn").css("display","none");
        $("#invite-btn").css("display","none");

    });
    //backport
    $("#profile-backport-btn").click(function(){
        $("#profile-portfolio").slideToggle(500,function(){
            $("#profileModal  #showForm").slideToggle(500);
        });
        $(this).css("display","none");
        $("#invite-btn").css("display","inline-block");
        $("#profile-port-btn").css("display","inline-block");
        $("#profile-edit-btn").css("display","inline-block");
    });
    //invite
    $("#invite-btn").click(function(){
        $("#profileModal  #showForm").slideUp(500,function(){
            $("#profileModal  #inviteForm").slideDown(500,function(){
                $('#inviteForm [rows="3"]').focus();
            });
        });
        $(this).css("display","none");
        $("#back-btn").css("display","inline-block");
        $("#profile-edit-btn").css("display","none");
        $("#profile-port-btn").css("display","none");
        
    });
    //back
    $("#back-btn").click(function(){
        $("#profileModal  #inviteForm").slideUp(500,function(){
            $("#profileModal  #showForm").slideDown(500);
        });
        $(this).css("display","none");
        $("#invite-btn").css("display","inline-block");
        $("#profile-port-btn").css("display","inline-block");
        $("#profile-edit-btn").css("display","inline-block");
    });



    
});