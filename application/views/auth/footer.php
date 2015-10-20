

<footer>
		<!--
		<div class="footer">
				<div class="container">
						
						<div class="row">
								<div class="services">
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
													<li> <?php echo anchor('#','Terms of use'); ?></li>
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
						</div>	<!-- /row -->
			<!--	</div>
		</div>-->
		<div class="footer2">
				<div class="container">
						<div class="row">
							
								<div class="col-md-6 widget">
										<div class="copyright">
												<p class="text-success">
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
										<div class="copyright">
												<p class="text-right">
													Copyright &copy; 2015, Website name. Designed by TEAM Gwapo
												</p>
										</div>
								</div>
		
						</div> <!-- /row of widgets -->
		
				</div>
	
		</div>
		<div class="pull-right">
				<a href="" class="scrollup"><i class="fa fa-angle-up fa-3x"></i></a>
		</div>
</footer>
    </div>
    <!-- /#wrapper -->

		<script src="<?php echo base_url(); ?>assets/js/jquery.prettyPhoto.js"></script>
		<script src="<?php echo base_url(); ?>assets/js/jquery.isotope.min.js"></script>  
		<script src="<?php echo base_url(); ?>assets/js/wow.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/js/functions.js"></script>
        
		<script>
				(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
				(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
				m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
				})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
			  
				ga('create', 'UA-55234356-2', 'auto');
				ga('send', 'pageview');
			  
			
		
				$(document).ready(
						function(){
							$('input:file').change(
								function(){
									if ($(this).val()) {
										$('input:submit').attr('disabled',false); 
									} 
								}
								);

				});
				$(document).ready(function(){
						
					});
				
				$(function () {
						$('[data-toggle="popover"]').popover()
					  });
				
				$("#menu-toggle").click(function(e) {
						e.preventDefault();
						$("#wrapper").toggleClass("toggled");
					});

				$(this).ready( function() {  
					$("#id").autocomplete({  
						minLength: 1,  
						source:   
						function(req, add){  
							$.ajax({  
								url: "<?php echo base_url(); ?>index.php/admin/crud/searchCourse1",  
								dataType: 'json',  
								type: 'POST',  
								data: req,  
								success:      
								function(data){  
									if(data.response =="true"){  
										add(data.message);  
									}  
								},  
							});  
						},  
						 
					});  
				});  

	    </script>

</body>
</html>
