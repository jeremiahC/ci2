<div class="reg-page">
	<div class="row well text-center">
		<div class="col-sm-6">
		<?php if(logged_in()){?>
				<?php echo anchor('student/choose_my_schedule','<span class="glyphicon glyphicon-pencil"></span> Choose my schedule',array("class"=>"btn btn-info btn-lg", "role"=> "button"));?>
		<?php }else{?>
				<button class="btn btn-info btn-lg" data-toggle="modal" data-target=".choose_my_schedule_modal"><span class="glyphicon glyphicon-pencil"></span> Choose my schedule</button></td>
				
		<?php }?>
		</div>
		<div class="col-sm-6">
		
				<?php echo anchor('#','<span class="glyphicon glyphicon-blackboard"></span> Choose my teacher',array("class"=>"btn btn-info btn-lg", "role"=> "button"));?>
		</div>
	</div>

				<?php echo $this->session->flashdata('msg'); ?>
				
				
				
				
				
				
				
				
				
				
				
				
				<?php 
				$this->load->view('auth/pages/course_1');
				$this->load->view('auth/pages/course_2');
				$this->load->view('auth/pages/course_3');
				
				
				?>
		
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