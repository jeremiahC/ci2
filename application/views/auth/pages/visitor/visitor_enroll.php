	<div class="row well text-center">
		<div class="col-sm-6">
		<?php if(logged_in()){?>
				<?php echo anchor('student/choose_my_schedule','<span class="glyphicon glyphicon-pencil"></span> Choose my schedule',array("class"=>"btn btn-info btn-lg", "role"=> "button"));?>
		<?php }else{?>
				<div class="btn btn-info btn-lg" data-toggle="modal" data-target=".choose_my_schedule_modal"><span class="glyphicon glyphicon-pencil"></span> Choose my schedule</div></td>
				
		<?php }?>
		</div>
		<div class="col-sm-6">
		
				<?php echo anchor('#','<span class="glyphicon glyphicon-blackboard"></span> Choose my teacher',array("class"=>"btn btn-info btn-lg", "role"=> "button"));?>
		</div>
	</div>
	
	<!-- start choose schedule modal -->
		   						
		   						
		   						<div class="modal fade choose_my_schedule_modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
								  <div class="modal-dialog modal-lg">
									  <div class="modal-content">
									      <div class="modal-header">
									        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
									        
											 <h4 class="modal-title text-danger" id="myModalLabel">You are not logged in.</h4>
									      </div>
								      <div class="modal-body">
								      
													<center>
													<h1 class="text-muted">Website name</h1>
													<?php echo anchor('login','<div class="btn btn-primary" >Login</div>');?>
													<?php echo anchor('visitor/visitor_choose_my_schedule','<div class="btn btn-info" >Continue Anyway</div>');?>
												  	<div class="divider-gray-50"></div>
												  	<p class="text-muted">New to (Website Name)? Register to avail promos!<?php echo anchor('register','Create Account');?></p> 
													</center>
										
											
								      </div>
								     
								  </div>
								</div>
								</div>
								
	<!-- end choose schedule modal-->

		<?php echo $this->session->flashdata('msg'); ?>
		

		<?php echo form_open('course_enroll/visitor_enroll')?>
	   <div class="row well">
		   	<div class="col-md-6">
		 			<legend>Enroll</legend>
		 			
		 					<input type="hidden" name="course" value="<?php echo $course; ?>">
							<input type="hidden" name="date" value="<?php echo $date; ?>">
							<input type="hidden" name="time_start" value="<?php echo $time; ?>">
							<input type="hidden" name="hours" value="<?php echo $hours; ?>">
							<input type="hidden" name="price" value="<?php echo $price; ?>">
													  
							<p><strong>Course :</strong> <?php echo $course;?> </p>
							<p><strong>Date :</strong>  <?php echo $date;?> </p>
							<p><strong>Time :</strong>  <?php echo $time;?> </p>
							<p><strong>No. of Hours :</strong> <?php echo $hours;?> </p>
							<p><strong>Price :</strong>$  <?php echo $price;?></p>
							
							<div class="form-group">
							<label class="control-label text-left">Full Name</label>
							<input type="text" class="form-control" name="full_name" placeholder="Your Full Name">
							<span class="text-danger"><?php echo form_error('full_name'); ?></span>
							</div>
							
							<div class="form-group">
							<label class="control-label text-left">Email <span class="text-danger">(Required)</span> </label>
							<input type="text" class="form-control" name="email" placeholder="Your Email address">
							<span class="text-danger"><?php echo form_error('email'); ?></span>
							</div>
										    
							<div class="form-group">
							<label class="control-label text-left">Skype ID <span class="text-danger">(Required)</span> </label>
							<input type="text" class="form-control" name="user_skype" placeholder="Your Skype ID">
							<span class="text-danger"><?php echo form_error('user_skype'); ?></span>
							</div>
												  
												  
							<div class="form-group">
							<label class="control-label text-left">Contact Number <span class="text-danger">(Required)</span> </label> </label> 
							<input type="text" class="form-control" name="user_contact" placeholder="Your Contact Number">
							<span class="text-danger"><?php echo form_error('user_contact'); ?></span>
							</div>
							<input type="hidden" name="course_no" value="1">
						 	<button class="btn btn-success" type="submit">Enroll</button>
						 	<?php echo form_close(); ?>	 			
		 			
		 
		   </div>
	   
	   
		   <div class="col-md-6">
		   
		   <center>
				<div class="divider-gray-50"></div>
				<p class="text-muted">New to (Website Name)? Register to avail promos!<?php echo anchor('register','Create Account');?></p> 
		   </center>
		   </div>

		</div>