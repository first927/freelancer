<div class="container">
<h1 style="margin-left:10%"><strong>Jobs List</strong></h1>
<% for(int i = 0;i < 9; i++){ %>
    	<div class='col-md-4' onclick="Redirect('<?php echo $id;?>');">
				<div class='card'>
					<div class='card-header card-chart' data-background-color='orange'>
						<div class='ct-chart' id='dailySalesChart'></div>
					</div>
					<div class='card-content'>
						<h4 class='title' id='myTitle' >Job <%=i%></h4>
						<p class='category'><span class='text-success'><i class='fa fa-long-arrow-up'></i> 55%  </span> increase in today sales.</p>
					</div>
					<div class='card-footer'>
						<div class='stats'>
							<i class='material-icons'>access_time</i> since 1996
						</div>
					</div>
				</div>
			</div>
           <% } %>
</div>