
<div class="reg-page">
		<div class="container ">
				teacher
				<div class="row ">
						<div class="panel panel-default">
								<div class="panel-body" style="background: url('/ci2/assets/images/1.jpg');">
										<div class=" col-xs-12 col-sm-12 col-md-4" style="padding:20px;">
												
												<?php foreach ($images as $image):?>
														<a href="profile/form" data-toggle="tooltip" data-placement="top" title="upload picture">
																<?php if($image->user_picture == ""){?>
																	<img src="<?php echo ''.base_url().'pictures/default.png';?>" width='150' height="150" class="center-block  img-circle">
																<?php }else{?>
																	<img src="<?php echo ''.base_url().'pictures/'.$image->user_picture.'';?>" width='150' height="150" class="center-block  img-circle">
																<?php };?>
														</a>
														
												<?php endforeach; ?>
				
										</div><!--/col-->
										<div class="col-xs-12 col-sm-12 col-md-8">
												
												<p>
														<h1>Hello!</h1>
												</p>
												<p>
														Welcome <label><?php echo username();?></label> to ESL academy. We are willing to give our best to make you learn how to speak and
														write english. We will help you improve your communication skills and etc.............
												</p>
										</div><!--col-->
								</div><!--panel_body-->
						</div><!--panel-->
				</div><!--row-->	
				<div class="row ">
						<div class="col-xs-12 col-sm-12 col-md-3 ">
								<div class="panel panel-default">
										<div class="panel-body">
												<ul class="nav nav-pills nav-stacked" role="tablist">
														<li role="presentation"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Self Information</a></li>
														<li role="presentation"><a href="#setSchedule" aria-controls="messages" role="tab" data-toggle="tab">Set schedule</a></li>
														<li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">My Schedule</a></li>
														<li role="presentation"><a href="#settings" aria-controls="settings" role="tab" data-toggle="tab">Appointments<span class="badge">5</span></a></li>
												</ul>
										</div>
								</div>
						</div>
						<!-- Tab panes -->
						<div class="col-xs-12 col-sm-12 col-md-9 ">
								<div class="panel panel-default">
										<div class="panel-body">
												<div class="tab-content">
														<div role="tabpanel" class="tab-pane active" id="home">
														
						
																<?php foreach ($information as $informations){}
																						
																							?>
																
																		<h1><?php echo $informations->user_name; ?> <?php echo $informations->user_lastname; ?></h1> <br>
																		<p><strong>About:</strong> &nbsp<u><?php echo $informations->user_bio; ?></u></p>
																		<p><strong>Age:</strong> &nbsp<u><?php echo $informations->user_age; ?></u></p>
																		<p><strong>Educational Background:</strong>&nbsp <u> <?php echo $informations->user_education;?></u></p>
																		<p><strong>Contact Number:</strong> &nbsp<u><?php echo $informations->user_contact;?></u> </p>
																		<p><strong>Skype: </strong> &nbsp<u><?php echo $informations->user_skype;?></u>
																		
																		
																
																			
																	
								
														
												</div>
												<div role="tabpanel" class="tab-pane" id="profile">
														
														<?php echo $this->session->flashdata('msg'); ?>
						
																<!--<div class="row">-->
																
																
																<div class="panel panel-primary text-center">
																		<div class="panel-heading">	
																			<h2>My schedule</h2>
																			<br>
																			(Temporary)
																		</div>
																
																<table class="table  table-hover text-center">
																			  <tr class="lead">
																					  <td>Course</td>
																					  <td>Date</td>
																					  <td>Time Start</td>
																					  <td>Status</td>
																					  <!--  To be ask if we put cancel button -->
																					  <!--  <td>Action</td> -->
																			</tr>
																			
																			
																					
																					  <?php foreach ($schedules as $schedule){?>
																									<tr>
																										<td><?php echo $schedule->course; ?></td>
																										<td><?php echo $schedule->date; ?></td>
																										<td><?php echo $schedule->time_start; ?></td>
																										<td><?php echo $schedule->status; ?></td>
																										<!--  To be ask if we put cancel button -->
																										 <!--  <td> Cancel</td> -->
																									</tr>
																							
																			   
																			  		 <?php } ?>
																						
																								
																					</table>
																</div>
																
												  </div>
												  <div role="tabpanel" class="tab-pane text-center" id="setSchedule">
												  			
														<?php echo anchor('teacher/set_schedule','Set schedule',array("class"=>"btn btn-primary btn-lg", "role"=> "button"));?>									  
																									  
																									  
												  </div>
												  
												  
												  <div role="tabpanel" class="tab-pane" id="settings">
												  	<table class="table  table-hover text-center">
																			  <tr class="lead">
																					  <td>Course</td>
																					  <td>Date</td>
																					  <td>Time Start</td>
																			</tr>
																			
																			
																					
																					  <?php foreach ($appointments as $appointment){?>
																									<tr>
																										<td><?php echo $appointment->course; ?></td>
																										<td><?php echo $appointment->date; ?></td>
																										<td><?php echo $appointment->time_start; ?></td>
																										<!--  To be ask if we put cancel button -->
																										 <!--  <td> Cancel</td> -->
																									</tr>
																							
																			   
																			  		 <?php } ?>
																						
																								
																					</table>
												  
												  
												  
												  
												  </div>
												</div>
										</div>
								</div>
						</div>
				</div>
											
		
				
		</div>

		</div><!--/container-->

