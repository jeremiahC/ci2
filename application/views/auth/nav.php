<?php
	if(logged_in())
	{
	?>
		

	<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
		<div class="navigation">
		  <div class="container ">
		    <!-- Brand and toggle get grouped for better mobile display -->
		    <div class="navbar-header">
		      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
		        <span class="sr-only">Toggle navigation</span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		      </button>
		      
		      <div class="navbar-brand">
				<h1>
					<?php if(user_group('admin'))
							  echo anchor('home/dashboard','Admin Panel');
					 else{
					  
							  echo anchor('courses','<span>ESL</span>Project');
					 }
					?>
				</h1>
		      </div>
		  </div>
		
		    <!-- Collect the nav links, forms, and other content for toggling -->
		    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav nav-tabs navbar-right">
					<li><?php echo anchor('courses','Courses'); ?> </li>
					<!--<li><?php //echo anchor('schedules','Schedules'); ?></li>-->
					<li><?php echo anchor('promos','Promos'); ?></li>
					
					<li class="dropdown">
					
							<a id="dLabel" data-target="#" href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
								<span class="glyphicon glyphicon-triangle-bottom"></span>
							</a>
								  
							<ul class="dropdown-menu" aria-labelledby="dLabel">
								
								<li>
									<?php if(user_group('user'))//user as student and to be revise(for search how to)
												echo anchor('student/Profile', 'My Profile');
										   else if(user_group('editor'))//editor as teacher and to be revise(for search how to)
										   {
												echo anchor('teacher/Profile', 'My Profile');
										   }
										   else{}
									 ?>
								</li>
								<li><?php echo anchor('schedules','My Schedules'); ?><li>
								<li><a href="#">Settings</a><li>
								<li><?php echo anchor('logout', 'Logout'); ?></li>
								
							</ul>
						
					</li>
		      		
		        	
				</ul>
		    </div><!-- /.navbar-collapse -->
		  </div><!-- /.container-fluid -->
		</div>
	 </nav>

	<?php
	}
	else
	{
	?>
		

		<!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
		
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
				<div class="navbar-brand">
						<h1><?php echo anchor('home','<span>ESL</span>Project');?></h1>
				</div>
            </div>
             <!-- Collect the nav links, forms, and other content for toggling -->
		    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav nav-tabs navbar-right">
					
					<li><?php echo anchor('courses','Courses'); ?> </li>
					<li><?php echo anchor('schedules','Schedules'); ?></li>
					<li><?php echo anchor('promos','Promos'); ?></li>
					<li class="dropdown">
						
							<a id="dLabel" data-target="#"  data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
								<span class="glyphicon glyphicon-triangle-bottom"></span>
							</a>
								  
							<ul class="dropdown-menu" aria-labelledby="dLabel">

								<li><a href="" data-toggle="modal" data-target=".register"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
								<li><?php echo anchor('login','<span class="glyphicon glyphicon-log-in"></span> Log in'); ?></li>
											
							</ul>
					
					</li>


				
					
				
				</ul>
				
		    </div><!-- /.navbar-collapse -->
		</div><!-- /.container -->
		
	</nav>
		
	
		<!-- start register modal -->
		   						
		   						
		   						<div class="modal fade register" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
									<div class="modal-dialog modal-md">
										<div class="modal-content">
											<div class="modal-header">
												<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
									        
												<h4 class="modal-title text-primary" id="myModalLabel">Register</h4>
											</div>
											<div class="modal-body">
								      
													<center>
													<h1 class="text-muted">Website name</h1>
													<h4 class="text-info">Register as</h1>
														<div class="">
															<?php echo anchor('register','Student',array("class"=>"btn btn-info btn-lg", "role"=> "button"));?><span class="text-muted"> OR </span><?php echo anchor('register_teacher','Teacher',array("class"=>"btn btn-info btn-lg", "role"=> "button"));?>
														</div>
												  	<div class="divider-gray-50"></div>
												  	<p class="text-muted">Already a member?<?php echo anchor('login',' Login');?></p> 
													</center>
										
											
											</div>
								     
										</div>
									</div>
								</div>
    

	<?php
	}
	?>