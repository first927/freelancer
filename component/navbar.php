
<?php
if($_SERVER['REQUEST_URI'] == "/freelancer/index.php/" || $_SERVER['REQUEST_URI'] == "/freelancer/index.php" || $_SERVER['REQUEST_URI'] == "/freelancer/"){
?>
<nav class="navbar navbar-transparent navbar-fixed-top navbar-color-on-scroll" >
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button id="menu-toggle" type="button" class="navbar-toggle">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar bar1"></span>
                <span class="icon-bar bar2"></span>
                <span class="icon-bar bar3"></span>
            </button>
            <a >

                <div class="brand">
                    <a class="navbar-brand" href="index.php"><i class="material-icons" >visibility</i>FIND MY JOB</a>
                </div>
            </a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse">
            <ul  class="nav navbar-nav navbar-right">

                    <a class="navbar-brand" href="#" data-toggle="modal" data-target="#modalAddJob"><i class="material-icons" >add</i>AddJobs</a>
                    <a class="navbar-brand" href="#" data-toggle="modal" data-target="#modalRegister"><i class="material-icons" >person_outline</i>Sign Up</a>
                    <a class="navbar-brand" href="#" data-toggle="modal" data-target="#modalLogin"><i class="material-icons" >lock</i>Log in</a>

            </ul><!--navbar-right-->
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>
              
<div class="myFade">

</div>


<div class="page-header header-filter" style="background-image: url('assets/img/headBar.jpg');">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
            </div>
        </div>
    </div>
</div>
<?php
}else{ ?>
<nav class="navbar navbar-default" role="navigation">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button id="menu-toggle" type="button" class="navbar-toggle">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar bar1"></span>
                <span class="icon-bar bar2"></span>
                <span class="icon-bar bar3"></span>
            </button>
            <a >

                <div class="brand">
                    <a class="navbar-brand" href="index.php"><i class="material-icons"  >visibility</i>FIND MY JOB</a>
                </div>
            </a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse">
            <ul  class="nav navbar-nav navbar-right">

                    <a class="navbar-brand" href="#" data-toggle="modal" data-target="#modalAddJob"><i class="material-icons" >add</i>AddJobs</a>
                    <a class="navbar-brand" href="#" data-toggle="modal" data-target="#modalRegister"><i class="material-icons" >person_outline</i>Sign Up</a>
                    <a class="navbar-brand" href="#" data-toggle="modal" data-target="#modalLogin"><i class="material-icons" >lock</i>Log in</a>

            </ul><!--navbar-right-->
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>

<?php
}
?>
<!-- Modal -->
                    <div class="modal fade" id="modalRegister" role="dialog" >
                        <!-- Modal content-->
                            <div class="modal-dialog" style="width: 450px">
                                <div class="modal-content" style="color: #1a237e">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <h3 class="modal-title" align="center">Register</h3>
                                    </div>
                                    <form  role="form" method="post" action="register.inc.php">
                                    <div class="modal-body" style="padding:40px 50px;">
                                                    <div class="form-group label-floating">
                                                        <label class="control-label" for="name"><span class="material-icons">person</span> Name</label>
                                                        <br>
                                                        <input required type="text" class="form-control" id="name" name="name" >
                                                    </div>

                                                    <div class="form-group label-floating">
                                                        <label class="control-label" for="sname"><span class="material-icons">person</span> Surname</label>
                                                        <br>
                                                        <input required type="text" class="form-control" id="sname" name="sname">
                                                    </div>

                                                    <div class="form-group label-floating">
                                                        <label class="control-label" for="username"><span class="material-icons">account_box</span> Username</label>
                                                        <br>
                                                        <input required type="text" class="form-control" id="username" name="username">
                                                    </div>

                                                    <div class="form-group label-floating">
                                                        <label class="control-label" for="pss"><span class="material-icons">lock</span> Password</label>
                                                        <br>
                                                        <input required type="password" class="form-control" id="pss" name="pss">
                                                    </div>

                                                    <div class="form-group label-floating">
                                                        <label class="control-label" for="tel"><span class="material-icons">phone</span> Phone Number</label>
                                                        <br>
                                                        <input required type="text" class="form-control" id="tel" name="tel" >
                                                    </div>

                                                    <div class="form-group label-floating">
                                                        <label class="control-label" for="email"><span class="material-icons">email</span> E-mail</label>
                                                        <br>
                                                        <input required type="email" class="form-control" id="email" name="email">
                                                    </div>
                                    </div>

                                        <div align="center">
                                        <button type="submit" class="btn btn-success" name="regisbtn" value="register">Register</button>
                                        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                    </div>
            </ul>
        </div>
        <!-- Modal End -->

                        <!-- Modal Start -->
                        <div class="modal fade" id="modalLogin" role="dialog" >
                            <div class="modal-dialog" style="width: 400px">
                                <div class="modal-content" style="color: #1a237e">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <h3 class="modal-title" align="center">Login</h3>
                                    </div>
                                    <form  role="form" method="post" action="login.inc.php">
                                    <div class="modal-body">

                                            <div class="modal-body" style="padding:40px 50px;">
                                               
                                                    <div class="form-group">
                                                        <label for="name"><span class="material-icons">account_box</span>Username</label>
                                                        <input required type="text" class="form-control" id="userlogin" name="userlogin" placeholder="Username">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="pss"><span class="material-icons">lock</span>Password</label>
                                                        <input required type="password" class="form-control" id="psslogin" name="psslogin" placeholder="Password">
                                                    </div>

                                            </div>

                                    </div>
                                    <div align="center">
                                        <button type="submit" class="btn btn-success" name="loginbtn" value="login">Login</button>
                                        <button type="button" class="btn btn-danger" data-dismiss="modal">CanCel</button>
                                    </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                        <!-- Modal AddJob-->
                        <div class="modal fade" id="modalAddJob" role="dialog" >
                            <div class="modal-dialog" style="width: 400px">
                                <div class="modal-content" style="color: #1a237e">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <h3 class="modal-title" align="center">Add Jobs</h3>
                                    </div>
                                    <div class="modal-body" style="padding:40px 50px;">
                                        <form method="post">
                                            <div class="form-group">
                                                <label for="namejob"><span class="material-icons">store</span>Name Project</label>
                                                <input required class="form-control" type="text" name="nameP" id="nameP" placeholder="Name Project">
                                            </div>
                                            <div>
                                                <label for="detail"><span class="material-icons">assignment</span>Detail</label>
                                                <textarea  rows="5" class="form-control" name="detail" placeholder="Detail your project" ></textarea>
                                            </div>
                                            <div id="job_earn" >
                                                <div class="form-group">
                                                    <label for="skill"><span class="material-icons">local_library</span>Select Skill</label>
                                                    <input required class="form-control" type="text" name="skill_1" id="skill_1">
                                                </div>
                                                <div class="form-group">
                                                    <label for="earn"><span class="material-icons">attach_money</span>Earning</label>
                                                    <input required class="form-control" type="number" name="earning_1" id="earning_1">
                                                    <label for="earn"><span class="material-icons">add</span>Add More Skill </label>
                                                    <button type="button" id="add_form()" onclick="addForm()" class="btn btn-success"><i class="material-icons">plus_one</i></button>
                                                </div>

                                            </div>
                                            <div align="center">
                                                <button type="submit" class="btn btn-success" name="submitbtn" value="login">Submit</button>
                                                <button type="button" class="btn btn-danger" data-dismiss="modal" >CanCel</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
<script>
    //Script AddJobs
    var i = 1;
    function addForm() {
        if (i<=100){
            i++;
            var div = document.createElement('div');
            div.innerHTML = '<div class="form-group"><label for="skill"><span class="material-icons">local_library</span>Select Skill</label><input required class="form-control" type="text" name="skill_'+i+'""></div><div class="form-group"> <label for="earn"><span class="material-icons">attach_money</span>Earning</label><input required class="form-control" type="number" name="earning_'+i+'""></div><label for="earn"><span class="material-icons">add</span>Delete</label> <button type="button" id="remove_form()" onclick="removeForm(this)" class="btn btn-danger"><i class="material-icons">delete</i></button>';
            document.getElementById('job_earn').appendChild(div);
        }
    }
    function removeForm(div) {
        document.getElementById('job_earn').removeChild(div.parentNode);
    }

</script>