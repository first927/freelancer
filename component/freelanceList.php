<?php

// include "assets/model/connectService.inc.php";
$flList = json_decode(getContent("users/getByType/1"));
// var_dump($flList);
$indexFl = 0;
$maxFl = count($flList->Users);

    while($indexFl < $maxFl){ ?>
    	<div class='col-md-3' onclick="popupModal(<?php echo $flList->Users[$indexFl]->uid; ?>)" data-toggle="modal" data-target="#profileModal">
				<div class='card show-box'>
					<div class='card-header card-chart' data-background-color='orange'>
						<div class='ct-chart' id='dailySalesChart'></div>
					</div>
					<div class='card-content'>
						<h4 class='title' id='myTitle' ><?php echo $flList->Users[$indexFl]->name; ?></h4>
						<p class='category'><span class='text-success'><i class='fa fa-long-arrow-up'></i> 55%  </span> increase in today sales.</p>
					</div>
					<div class='card-footer'>
						<div class='stats'>
							<i class='material-icons'>access_time</i> since 1996
						</div>
					</div>
				</div>
			</div>

<?php $indexFl++; }; ?>