<br>

		<div class="container">
		<div class="panel panel-info">
		<!-- Default panel contents -->
		<div class="panel-heading">Course Name 3</div>
		<div class="panel-body">
				<p>Course information</p>
				<p>Details Here...</p>
				<p>Details Here...</p>
				<p>Details Here...</p>
				<?php if(logged_in()){?>
				<?php echo anchor('student/choose_my_schedule','<div class="btn btn-primary pull-right"> <span class="text-default">Choose my schedule</span></div>'); ?>
				<?php }else{?>
				<div class="btn btn-primary pull-right" data-toggle="modal" data-target=".choose_my_schedule_modal3">Choose my schedule</div></td>
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
		
				  <?php foreach ($schedules3 as $schedule3){
								$schedule_id = $schedule3['id'];?>
							
								<tr>
									<td><?php echo $schedule3['date'] ?></td>
									<td><?php echo $schedule3['time'] ?></td>
									<td><?php echo $schedule3['hours'] ?></td>
									<td>$ <?php echo $schedule3['price'] ?></td>
									<td>
									<div class="btn btn-primary btn-xs" data-toggle="modal" data-target=".enroll3-modal-<?php echo $schedule3['id'];?>">Enroll</div>
									</td>
								</tr>
									
		   
		  						<!-- start comment modal -->
		   						
		   						<div class="modal fade enroll3-modal-<?php echo $schedule3['id'];?>" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
								  <div class="modal-dialog modal-lg">
									  <div class="modal-content">
									      <div class="modal-header">
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
											    	<p><strong>Course :</strong> Course Name 3</p>
											    	<p><strong>Date :</strong> <?php echo $schedule3['date'] ?></p>
											    	<p><strong>Time :</strong> <?php echo $schedule3['time'] ?></p>
											    	<p><strong>No. of Hours :</strong> <?php echo $schedule3['hours'] ?></p>
											    	<p><strong>Price :</strong>$ <?php echo $schedule3['price'] ?></p>
											    
											    	<div class="form-group">
													    <label class="control-label text-left">Skype ID </label>
													    <div class="">
													      <input type="text" class="form-control" name="user_skype"  value="<?php echo $infos['user_skype'];?>">
													    </div>
													</div>
												  
												 
												  
												  <div class="form-group">
												    <label class="control-label text-left">Contact Number </label>
												    <div class="">
												      <input type="text" class="form-control" name="user_contact" value="<?php echo $infos['user_contact'];?>">
												    </div>
												  </div>
												  
												  <input type="hidden" name="date" value="<?php echo $schedule3['date'] ?>">
												  <input type="hidden" name="time" value="<?php echo $schedule3['time'] ?>">
												  <input type="hidden" name="hours" value="<?php echo $schedule3['hours'] ?>">
												  <input type="hidden" name="price" value="<?php echo $schedule3['price'] ?>">
												  <input type="hidden" name="course_no" value="3">			  		
											</div>
											<?php }else{ ?>
													<?php echo form_open('course_enroll/visitor')?>
													<center>
													<h1 class="text-muted">Website name</h1>
													<input type="hidden" name="course" value="<?php echo $schedule3['course']; ?>">
													<input type="hidden" name="date" value="<?php echo $schedule3['date'] ?>">
												  	<input type="hidden" name="time" value="<?php echo $schedule3['time'] ?>">
												  	<input type="hidden" name="hours" value="<?php echo $schedule3['hours'] ?>">
												  	<input type="hidden" name="price" value="<?php echo $schedule3['price'] ?>">
												 	<input type="hidden" name="course_no" value="3">
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
								<!-- end comment modal-->
								
								
		   
		  					<?php
							}
							?>
								
				</table>
				
				<!-- start choose schedule modal -->
		   						
		   						
		   						<div class="modal fade choose_my_schedule_modal3" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
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