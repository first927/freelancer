

<div class="modal fade" id="profileModal" role="dialog" >
    <div class="modal-dialog" style="width: 70%">
        <div class="modal-content" style="color: #1a237e">
            
            <div class="card card-profile">
                <button class="btn btn-warning btn-fab btn-fab-mini btn-roundbtn-round" onclick="popupInvite()" >
	                    <i class="material-icons edit-icon">build</i>
                </button>
                <button class="btn btn-success btn-fab btn-fab-mini btn-roundbtn-round" onclick="popupInvite()" >
	                    <i class="material-icons main-icon">add</i>
                </button>
                
    			<div class="card-avatar" >
                    
    				<a href="#pablo">
    					<img class="img" src="assets/img/faces/marc.jpg" />
    				</a>
    			</div>
    			<div class="content">
                    <div id="showForm">
                        <h6 class="category text-gray">POSITION</h6>
                        <h4 class="card-title" id="profiletitle">Name Surname</h4>
                        <hr>
                        <p class="category ">CONTRACT</p>
                        <div class="col-md-6">
                            <div class="form-group label-floating">
                                <label class="control-label">E-mail</label>
                                <input type="text" class="form-control" value="first927@live.com" disabled>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group label-floating">
                                <label class="control-label">Tel-No.</label>
                                <input type="text" class="form-control" value="0948274583" disabled>
                            </div>
                        </div>
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