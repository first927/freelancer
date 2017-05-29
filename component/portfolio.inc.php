<?php 
    $i = 0;
    while($i < 4){ ?>
    	<div class='col-md-6' onclick="Redirect('<?php echo $i;?>');">
				<div class='card show-box'>
					<div class='card-header card-chart' data-background-color='orange'>
						<div class='ct-chart' id='dailySalesChart'></div>
					</div>
					<div class='card-content'>
						<h4 class='title' id='myTitle' >Job <?php echo $i; ?></h4>
					</div>
					<div class='card-footer'>
						<div class='stats'>
							<i class='material-icons'>grade</i>5
						</div>
					</div>
				</div>
			</div>

<?php $i++; } ?>