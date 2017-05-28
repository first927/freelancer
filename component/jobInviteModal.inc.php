 <div class="modal fade" id="inviteModal" role="dialog" >
                            <div class="modal-dialog" style="width: 400px">
                                <div class="modal-content" style="color: #1a237e">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <h3 class="modal-title" align="center">INVITATION</h3>
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
                                        <button type="button" class="btn btn-danger" data-dismiss="modal" >CanCel</button>
                                    </div>
                                    </form>
                                </div>
                            </div>
                        </div>