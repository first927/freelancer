<?php 
    $jobList =  json_decode(getContent("job/getAll"));
    $i = 0;
    while($i < count($jobList->Job)){ 
        $job = $jobList->Job[$i];
        $id = $job->idJob;
        $name = $job->jname;
        $detail = $job->jdetail;
        
        $skill = $job->jobskills;
        $position = $job->positions;?>
        
    	<div class='col-md-3 ' onclick="Redirect('<?php echo $id;?>');">
				<div class='card show-box'>
					<div class='card-header card-chart' data-background-color='orange'>
						<div class='ct-chart' id='dailySalesChart'></div>
					</div>
					<div class='card-content'>
						<h4 class='title' id='myTitle' >Job<?php echo $name; ?></h4>
						<p class='category'><span class='text-success'><i class='fa fa-long-arrow-up'></i> 55%  </span> increase in today sales.</p>
					</div>
					<div class='card-footer'>
						<div class='stats'>
							<i class='material-icons'>access_time</i> since 1996
						</div>
					</div>
				</div>
			</div>

<?php $i++; } ?>
