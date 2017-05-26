<div class="card card-nav-tabs">
	<div class="card-header" data-background-color="purple">
		<div class="nav-tabs-navigation">
			<div class="nav-tabs-wrapper">
				<span class="nav-tabs-title">Tasks:</span>
				<ul class="nav nav-tabs" data-tabs="tabs">
					<li class="active">
						<a href="#profile" data-toggle="tab">
							<i class="material-icons">bug_report</i>
							JOB
						<div class="ripple-container"></div></a>
					</li>
					<li class="">
						<a href="#messages" data-toggle="tab">
							<i class="material-icons">code</i>
							FREELANCE
						<div class="ripple-container"></div></a>
					</li>
                    <li class="">
						<a href="#fb" data-toggle="tab">
							<i class="material-icons">code</i>
							FACEBOOK
						<div class="ripple-container"></div></a>
					</li>
				</ul>
			</div>
		</div>
	</div>

	<div class="card-content">
		<div class="tab-content">
			<div class="tab-pane active" id="profile">
				<?php include "JobList.php";?>
			</div>
			<div class="tab-pane" id="messages">
				<?php include "freelanceList.php" ; ?>
			</div>
            <div class="tab-pane" id="fb">
				<div class="iframe-container hidden-sm hidden-xs">
					    <iframe src="https://www.w3schools.com/">
						<p>Your browser does not support iframes.</p>
						</iframe>
				</div>
			</div>
            
		</div>
	</div>

</div>
