
<div class="container-fluid footer1">
    <div class="row">
		    <div class="col-md-3">
		    	<h3 class="text-default font-cursive">Website<span class="text-success">LOGO</span></h3> 
		    </div>
            
            <div class="col-md-3">
            		<div class="text-gray1 text-center"><h3>Contact us</h3></div>
            		
            		<center>
            			<div class="divider-inverse"></div>
            		</center>
            		
            		<div class="form-inline">
            			<label class="text-muted"> <span class="glyphicon glyphicon-map-marker text-success"></span> Address: Apas, Cebu City, 6000 Cebu, Philippines</label>
            		</div>
            		
            		<div class="form-inline">
            			<label class="text-muted"> <span class="glyphicon glyphicon-earphone text-success"></span> Phone: 000-000-0000</label>
            		</div>
            		
            		<div class="form-inline">
            			<label class="text-muted"> <span class="glyphicon glyphicon-envelope text-success"></span> Email:</label> <?php echo anchor('contactform','Click Here'); ?></li>
            		</div>
            		
            		<div class="form-inline">
            			<label class="text-muted"> <span class="glyphicon glyphicon-globe text-success"></span> Website: <?php echo anchor('home','www.websitename.com'); ?></label>
            		</div>
		    </div>
            
            <div class="col-md-3">
            		<div class="text-gray1 text-center"><h3>About us</h3></div>
            		<center>
            			<div class="divider-inverse"></div>
            		</center>
            		
            		<ul class="">
				        <li> <?php echo anchor('#','General Information'); ?></li>
				        <li> <?php echo anchor('#','Vision-Mission'); ?> </li>
				        <li> <?php echo anchor('#','Team'); ?></li>
				        <li> <?php echo anchor('#','Careers'); ?></li>
				        <li> <?php echo anchor('#','Tems of use'); ?></li>
				        <li> <?php echo anchor('#','Privacy policy'); ?></li>
				  	</ul>
            	
		    </div>
            
            <div class="col-md-3">
            		<div class="text-danger text-center"><h3>Text Widget</h3></div>
            		<p class="text-success">Some text here...</p>
            		<p class="text-success">Some text here...</p>
	             	<p class="text-success">Some text here...</p>
	             	<p class="text-success">Some text here...</p>
			 </div>
			 
	</div>		  
</div>

<footer>
<div class="footer2">
			<div class="container-fluid">
				<div class="row">
					
					<div class="col-md-6 widget">
						<div class="widget-body">
							<p class="simplenav">
								<?php echo anchor('home','Home'); ?> | 
								<?php echo anchor('courses','Courses'); ?> |
								<?php echo anchor('schedules','Schedules'); ?> |
								<?php echo anchor('promos','Promos'); ?> |
								<?php echo anchor('about_us','About Us'); ?> |
								<?php echo anchor('#','Sign in'); ?> |
								<?php echo anchor('#','Sign up'); ?>
							</p>
						</div>
					</div>

					<div class="col-md-6 widget">
						<div class="widget-body">
							<p class="text-right">
								Copyright &copy; 2015, Website name. Designed by TEAM Gwapo
							</p>
						</div>
					</div>

				</div> <!-- /row of widgets -->
			</div>
		</div>
</footer>

</body>
</html>