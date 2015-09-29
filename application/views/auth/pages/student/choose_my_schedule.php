	<div class="container">
			
		 
            
	
			<div class="col-lg-10">
			<fieldset>
    		<legend>Choose my schedule</legend>

				<?php echo form_open("student/choose_my_schedule/save");?>
				
	
				<div class="form-group row">
                <label for="course" class="col-xs-5 control-label text-right">Choose course <span class="text-danger">(Required)</span></label>
		            <div class="col-xs-7">
		                <select class="form-control" name="course">
		                	<option value="none">----- Courses -----</option>
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
				      <input type="text" class="form-control" name="date" id="datepicker" placeholder="Date">
		             <span class="text-danger"><?php echo form_error('date'); ?></span>
		             </div>
				  </div>
				  
				 	
				 	
				  <div class="form-group row">
				  
				    <label for="time" class="col-xs-5 control-label text-right">Time <span class="text-danger">(Required)</span></label>
				    <div class="col-xs-7">
						      <input type="time" class="form-control" name="time_start" id="timepicker" placeholder="Time">
		             			<span class="text-danger"><?php echo form_error('time_start'); ?></span>
				    </div>
				  </div>
				  
				   
				   
				  <div class="form-group row">
				    <label for="time" class="col-xs-5 control-label text-right">Skype ID </label>
				    <div class="col-xs-7">
				      <input placeholder="Your Skype ID" type="text" class="form-control" name="user_skype"  value="<?php echo $this->session->userdata('user_skype');?>">
				      <span class="text-danger"><?php echo form_error('user_skype'); ?></span>
				    </div>
				  </div>
				  
				 
				  
				  <div class="form-group row">
				    <label for="time" class="col-xs-5 control-label text-right">Contact Number </label>
				    <div class="col-xs-7">
				      <input placeholder="Your contact no. here..." type="text" class="form-control" name="user_contact" value="<?php echo $this->session->userdata('user_contact');?>">
				      <span class="text-danger"><?php echo form_error('user_contact'); ?></span>
				    </div>
				  </div>
				  

				  <div class="form-group row">
				    <div class="col-xs-offset-5 col-xs-10">
				      <button type="text" class="btn btn-success">Save</button> <a href="<?= base_url();?>index.php/home" class="btn btn-danger">Cancel</a>
				    </div>
				    </div>
			 </fieldset>
			 	<input type="hidden" name="id" value="<?php echo $this->session->userdata('id');?>" />
            <?php echo form_close(); ?>
           
			<?php echo $this->session->flashdata('msg'); ?>
		</div>
	</div>