

<div class="modal fade" id="profileModal" role="dialog" >
    <div class="modal-dialog" style="width: 70%">
        <div class="modal-content" style="color: #1a237e">
            
            <div class="card card-profile">
                <div id="profile-btn">
                    <button class="btn btn-warning btn-fab btn-fab-mini btn-round" id="profile-edit-btn" data-toggle="tooltip" data-placement="top" title="edit"  >
	                    <i class="material-icons edit-icon">build</i>
                    </button>
                    <button class="btn btn-success btn-fab btn-fab-mini btn-round" id="profile-save-btn" data-toggle="tooltip" data-placement="top" title="save"  >
	                    <i class="material-icons edit-icon">save</i>
                    </button>
                    <button class="btn btn-info btn-fab btn-fab-mini btn-round" id="profile-port-btn" data-toggle="tooltip" data-placement="top" title="portfolio"  >
	                    <i class="material-icons edit-icon">folder</i>
                    </button>
                    <button class="btn btn-danger btn-fab btn-fab-mini btn-round" id="profile-backport-btn" data-toggle="tooltip" data-placement="top" title="portfolio"  >
	                    <i class="material-icons edit-icon">backspace</i>
                    </button>
                    <button class="btn btn-success btn-fab btn-fab-mini btn-round" id="invite-btn" data-toggle="tooltip" data-placement="top" title="invite" >
                            <i class="material-icons main-icon">add</i>
                    </button>
                    <button class="btn btn-danger btn-fab btn-fab-mini btn-round" id="back-btn" data-toggle="tooltip" data-placement="top" title="back"  >
                            <i class="material-icons main-icon">backspace</i>
                    </button>
                </div>
                
                
                
    			<div class="card-avatar" >
                    
    				<a href="#pablo">
    					<img class="img" src="assets/img/faces/marc.jpg" />
    				</a>
    			</div>
    			<div class="content">
                    <div id="showForm">
                        <div class="col-md-6" id="profile-detail" style="margin-left:25% ;">
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