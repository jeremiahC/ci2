<br>

		
		<div class="container">
		<div class="panel panel-info">
		<!-- Default panel contents -->
		<div class="panel-heading">Course Name 1</div>
		<div class="panel-body">
				<p>Course information</p>
				<p>Details Here...</p>
				<p>Details Here...</p>
				<p>Details Here...</p>
				<?php if(logged_in()){?>
				<?php echo anchor('student/choose_my_schedule','<div class="btn btn-primary pull-right"> <span class="text-default">Choose my schedule</span></div>'); ?>
				<?php }else{?>
				<div class="btn btn-primary pull-right" data-toggle="modal" data-target=".choose_my_schedule_modal1">Choose my schedule</div></td>
				<?php }?>
				</div>
		
				
				
		
				<!-- Table -->
				<table class="table table-striped table-hover text-center">
		  <tr class="lead">
				  <td>Date</td>
				  <td>Time</td>
				  <td>No. of Hours</td>
				  <td>Price</td>
				  <td>Enroll</td>
		
				  <?php foreach ($schedules as $schedule){?>
						
								<tr>
									<td><?php echo $schedule['date']; ?></td>
									<td><?php echo $schedule['time']; ?></td>
									<td><?php echo $schedule['hours']; ?></td>
									<td>$ <?php echo $schedule['price']; ?></td>
									<td>
									
									<div class="btn btn-primary btn-xs" data-toggle="modal" data-target=".enroll1-modal-<?php echo $schedule['id'];?>">Enroll</div></td>
								</tr>
								
								
									<!-- start enroll modal -->
		   						
		   						
		   						<div class="modal fade enroll1-modal-<?php echo $schedule['id'];?>" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
								  <div class="modal-dialog modal-lg">
									  <div class="modal-content">
									      <div class="modal-header">
									        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
									        <?php if (logged_in()){?>
									        <h4 class="modal-title" id="myModalLabel">Enroll Course</h4>
									        <?php }else{?>
											 <h4 class="modal-title text-danger" id="myModalLabel">You are not logged in.</h4>
									        <?php }?>
									      </div>
								      <div class="modal-body">
								      		<?php if (logged_in()){?>
								      		
								      		<?php echo form_open('course_enroll/enroll')?>
								      		
								        	
								        	<div class="form-group">
											    	<p><strong>Course :</strong> <?php echo $schedule['course']; ?></p>
											    	<p><strong>Date :</strong> <?php echo $schedule['date']; ?></p>
											    	<p><strong>Time :</strong> <?php echo $schedule['time']; ?></p>
											    	<p><strong>No. of Hours :</strong> <?php echo $schedule['hours']; ?></p>
											    	<p><strong>Price :</strong>$ <?php echo $schedule['price']; ?></p>
											    
											    	<div class="form-group">
													    <label class="control-label text-left">Skype ID <span class="text-danger">(Required)</span>  </label>
													    <div class="">
													      <input type="text" class="form-control" name="user_skype"  value="<?php echo $this->session->userdata('user_skype');?>">
													    </div>
													</div>
												  
												  
												  <div class="form-group">
												    <label class="control-label text-left">Contact Number <span class="text-danger">(Required)</span>  </label>
												    <div class="">
												      <input type="text" class="form-control" name="user_contact" value="<?php echo $this->session->userdata('user_contact');?>">
												    </div>
												  </div>
												  	  <input type="hidden" name="course" value="<?php echo $schedule['course']; ?>">
													  <input type="hidden" name="date" value="<?php echo $schedule['date']; ?>">
													  <input type="hidden" name="time" value="<?php echo $schedule['time']; ?>">
													  <input type="hidden" name="hours" value="<?php echo $schedule['hours']; ?>">
													  <input type="hidden" name="price" value="<?php echo $schedule['price']; ?>">
													  <input type="hidden" name="course_no" value="1">
												  			  		
											</div>
											<?php }else{ ?>
													<?php echo form_open('course_enroll/visitor')?>
													<center>
													<h1 class="text-muted">Website name</h1>
													<input type="hidden" name="course" value="<?php echo $schedule['course']; ?>">
													<input type="hidden" name="date" value="<?php echo $schedule['date']; ?>">
												  	<input type="hidden" name="time" value="<?php echo $schedule['time']; ?>">
												  	<input type="hidden" name="hours" value="<?php echo $schedule['hours']; ?>">
												  	<input type="hidden" name="price" value="<?php echo $schedule['price']; ?>">
												  	<input type="hidden" name="course_no" value="1">
												 	<?php echo anchor('login','<div class="btn btn-primary" >Login</div>');?>
												  	 <button class="btn btn-info" type="submit">Continue Anyway</button>
												  	<?php echo form_close(); ?>
												  	<div class="divider-gray-50"></div>
												  	<p class="text-muted">New to (Website Name)? Register to avail promos!<?php echo anchor('register','Create Account');?></p> 
													</center>
											<?php } ?>
								
											
								      </div>
								      <?php if (logged_in()){?>
									      <div class="modal-footer">
									      
									      <input type="hidden" name="id" value="" />
									        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
									        <button class="btn btn-success" type="submit">Enroll</button>
								
											<?php echo form_close(); ?>
									      </div>
									      <?php }else{ ?>
												 <!-- do nothing -->
											<?php } ?>
								      </div>
								  </div>
								</div>
								
								<!-- end enroll modal-->
								
								
		   
		  					<?php
							 }
							?>
							
				</table>
				
				
									<!-- start choose schedule modal -->
		   						
		   						
		   						<div class="modal fade choose_my_schedule_modal1" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
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
								
								<!-- end choose schedule modal-->

		</div>
		</div>
		</div>