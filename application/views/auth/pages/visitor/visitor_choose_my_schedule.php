	<div class="container">
			
		 
            
			
			<div class="col-lg-10">
			
			<?php echo $this->session->flashdata('msg'); ?>
			
			<fieldset>
    		<legend>Choose my schedule</legend>

				<?php echo form_open("visitor/visitor_choose_my_schedule/save");?>
				
	
				<div class="form-group row">
                <label for="course" class="col-xs-5 control-label text-right">Choose course <span class="text-danger">(Required)</span></label>
		            <div class="col-xs-7">
		                <select class="form-control" name="course">
		                	<option>----- Courses -----</option>
						    <optgroup label="Course Name 1" class="text-primary"></optgroup>
						    <option>Beginner</option>
						    <option>Secondary</option>
						    <option>Mastery</option>
						     <optgroup label="Course Name 2" class="text-primary"></optgroup>
						    <option>Module 1</option>
						    <option>Module 2</option>
						    <option>Module 3</option>
						    <optgroup label="Other Courses" class="text-primary"></optgroup>
						    <option>Course Name 3</option>
						    <option>Other Course</option>
		                </select>
		            </div>
		            <div>
		             <span class="text-danger"><?php echo form_error('course'); ?></span>
		             </div>
		        </div>
				
				 <div class="form-group row">
				    <label for="date" class="col-xs-5 control-label text-right">Date <span class="text-danger">(Required)</span> </label>
				    <div class="col-xs-7">
				    <input type="date" class="form-control" name="date" id="datepicker" placeholder="Date">
		            <span class="text-danger"><?php echo form_error('date'); ?></span>
		            </div>
				  </div>
				  
				 	
				 	
				  <div class="form-group row">
				  
				    <label for="time" class="col-xs-5 control-label text-right">Time <span class="text-danger">(Required)</span></label>
				    <div class="col-xs-7">
					<input placeholder="Time" type="time" class="form-control" name="time_start" id="timepicker">
		            <span class="text-danger"><?php echo form_error('time_start'); ?></span>
				    </div>
				  </div>
				  
				   
				 			<div class="form-group row">
							<label class="col-xs-5 control-label text-right">Full Name</label>
							<div class="col-xs-7">
							<input type="text" class="form-control" name="full_name" placeholder="Your Full Name">
							<span class="text-danger"><?php echo form_error('full_name'); ?></span>
							</div>
							</div>
							
							<div class="form-group row">
							<label class="col-xs-5 control-label text-right">Email <span class="text-danger">(Required)</span> </label>
							<div class="col-xs-7">
							<input type="text" class="form-control" name="email" placeholder="Your Email address">
							<span class="text-danger"><?php echo form_error('email'); ?></span>
							</div>
							</div>
										    
							<div class="form-group row">
							<label class="col-xs-5 control-label text-right">Skype ID <span class="text-danger">(Required)</span> </label>
							<div class="col-xs-7">
							<input type="text" class="form-control" name="user_skype" placeholder="Your Skype ID">
							<span class="text-danger"><?php echo form_error('user_skype'); ?></span>
							</div>
							</div>
												  
												  
							<div class="form-group row">
							<label class="col-xs-5 control-label text-right">Contact Number <span class="text-danger">(Required)</span> </label>
							<div class="col-xs-7">
							<input type="text" class="form-control" name="user_contact" placeholder="Your Contact Number">
							</div>
							</div>
						
						 	<div class="form-group row">
						    <div class="col-xs-offset-5 col-xs-5">
						      <button type="text" class="col-xs-7 btn btn-success">Enroll</button>
						    </div>
						    </div>
            <?php echo form_close(); ?>
           
		</div>
	</div>