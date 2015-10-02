<div class="reg-page">
<div class="container">
			
			<div class="col-lg-8">
    		<legend>Set schedule</legend>
    		<div>
    			<?php echo $this->session->flashdata('msg'); ?>
    			<span class="text-danger"><?php echo form_error('course'); ?></span>
    			<span class="text-danger"><?php echo form_error('date'); ?></span>
    			<span class="text-danger"><?php echo form_error('time_start'); ?></span>
    			<span class="text-danger"><?php echo form_error('user_skype'); ?></span>
    			<span class="text-danger"><?php echo form_error('user_contact'); ?></span>
    		</div>
				<?php echo form_open("teacher/set_schedule/save");?>
				
	
			 
			 <div class="container">
			  <div class="row">
			    <nav class="col-sm-3 well">
			      	<ul class="nav nav-pills nav-stacked" role="tablist">
			         	<li role="presentation" class="active"><a href="#course" aria-controls="course" role="tab" data-toggle="tab">Course</a></li>
						<li role="presentation"><a href="#dateday" aria-controls="dateday" role="tab" data-toggle="tab">Date or Day</a></li>
						<li role="presentation"><a href="#time" aria-controls="time" role="tab" data-toggle="tab">Time</a></li>
						<li role="presentation"><a href="#user_skype" aria-controls="user_skype" role="tab" data-toggle="tab">Skype</a></li>
						<li role="presentation"><a href="#user_contact" aria-controls="user_contact" role="tab" data-toggle="tab">Contact #</a></li>
						</ul>
			    </nav>
			   <div class="col-sm-7 tab-content">   
			      	<div role="tabpanel" class="tab-pane fade in active" id="course">
			      		<br>
			      		<input class="form-control"  name="course" placeholder="Type course here..."></input>
		                	<br>
		                <div class="row well">
		                
		                		<legend>List of courses</legend>
		                		
		                		<div class="col-md-3">
		                		Course name 1
		                			<ul>
		                			<li>Beginner</li>
		                			<li>Secondary</li>
		                			<li>Mastery</li>
		                			</ul>
		                		</div>
		                		
		                		<div class="col-md-3">
		                		Course name 2
		                			<ul>
		                			<li>Module 1</li>
		                			<li>Module 2</li>
		                			<li>Module 3</li>
		                			</ul>
		                		</div>
		                		
		                		<div class="col-md-3">
		                		Course Name 3
		                			<ul>
		                			<li>Course name</li>
		                			<li>Course name</li>
		                			</ul>
		                		</div>
		                		
		                		<div class="col-md-3">
		                		Other Course
		                			<ul>
		                			<li>Course name</li>
		                			<li>Course name</li>
		                			<li>Course name</li>
		                			<li>Course name</li>
		                			</ul>
		                		</div>
		                </div>
			      	</div>
			      	
					<div role="tabpanel" class="tab-pane fade" id="dateday">
						<select id="mySelect">
			            	 <option value="none">&lt&lt Select &gt&gt</option>
						  	 <option value="input" >Date</option>
						  	 <option value="checkbox">Day</option>
						</select>
           				<br><br>
           				
						<div id="demo"></div>
						
					
						
					</div>
					
					<div role="tabpanel" class="tab-pane fade" id="time">
						<br><br>
						<input type="time" class="form-control" name="time_start" id="timepicker" placeholder="time...">
					</div>
					
					<div role="tabpanel" class="tab-pane fade" id="user_skype">
						<br><br>
						<input placeholder="Your skype ID here..." type="text" class="form-control" name="user_skype"  value="<?php echo $this->session->userdata('user_skype');?>">
					</div>
					
					<div role="tabpanel" class="tab-pane fade" id="user_contact">
						<br><br>
						<input placeholder="Your contact # here..." type="text" class="form-control" name="user_contact" value="<?php echo $this->session->userdata('user_contact');?>">
						
					</div>
					
			    </div>
			  </div>
			</div>
			
				<br>
					<div class="col-xs-offset-5 col-md-offset-5">
					      <button type="text" class="btn btn-success col-xs-10 col-md-10">Submit</button> 
					</div>
				<br>
				<br>
			</div>	
				
			
			 	<input type="hidden" name="id" value="<?php echo $this->session->userdata('id');?>" />
            <?php echo form_close(); ?>
            
            
            
		</div>
	
			
	</div>		
			<script>
				
				
				

			</script>
