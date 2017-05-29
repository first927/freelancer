

<div class="modal fade" id="profileModal" role="dialog" >
    <div class="modal-dialog" style="width: 70%">
        <div class="modal-content" style="color: #1a237e">
            
            <div class="card card-profile">
                <div id="profile-btn">
                    <?php include "profileModalButton.php"; ?>
                </div>
                
                
    			<div class="card-avatar" >
                    
    				<a href="#pablo">
    					<img class="img" src="assets/img/faces/marc.jpg" />
    				</a>
    			</div>
    			<div class="content">
                    <div id="showForm">
                        <div  id="profile-detail" >
                            <?php include "userInformation.inc.php"; ?>
                        </div>
                    </div>
    				<div class="col-md-12" id="profile-portfolio">
                        <p class="category ">PORTFOLIO( 8 lastest jobs )</p>
                        <?php include "portfolio.inc.php"; ?>
                    </div>

                    <div id="inviteForm" >
                        <?php include "inviteForm.inc.php"; ?>
                    </div>

    				
    			</div>
                
    		</div>


        </div>
    </div>
</div>