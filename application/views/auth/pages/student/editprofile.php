<script src="<?php echo base_url('assets/js/jquery-1.10.2.js'); ?>"></script>
<script src="<?php echo base_url('assets/jquery-ui-1.11.2/jquery-ui.min.js'); ?>"></script>

<?php echo $this->session->flashdata('msg'); ?>

            
<!-- left column -->

<?php echo form_open('student/Editprofile/edit');?>

<?php foreach ($information as $informations){
	
	$username_id=$informations->username;
	$username = $this->session->userdata('username');

	if($username===$username_id)
	{
						
?>

	
<div class="container">

		<!-- edit form column -->
	<div class="col-md-12 personal-info">
	
			<h1 class="">
				<strong>Personal Information</strong>
			</h1>
<br>
<br>
		<div class="form-group row">
				<div class="col-lg-4">
				<label for="firstname" class="control-label">First name: &nbsp<font color="red">(Required)</font></label>
				</div>
				<div class="col-lg-8">

					<input id="firstname" name="firstname" type="text" class="form-control" value="<?php echo $informations->user_name;?>">
					
					<span class="text-danger"><?php echo form_error('firstname');?></span>

				</div>
				
		</div>
			
		<div class="form-group row">
				<div class="col-lg-4">
				<label for="lastname" class=" control-label">Last name: &nbsp<font color="red">(Required)</font></label>
				</div>
				 <div class="col-lg-8">

					<input id="lastname" name="lastname" type="text" class="form-control" value="<?php echo $informations->user_lastname;?>">
					
					<span class="text-danger"><?php echo form_error('lastname');?></span>

					
				</div>
				
		</div>

		<div class="form-group row">
				<div class="col-lg-4">
				<label for="bio" class=" control-label">About Yourself:</label>
				</div>
				<div class="col-lg-8">
				
					<textarea id="bio" name="bio" type="text" class="form-control" rows="3" value="<?php echo $informations->user_bio;?>"></textarea>
					
					<span class="text-danger"><?php echo form_error('bio');?></span>

				</div>

		</div>

		<div class="form-group target row">
				<div class="col-lg-4">
				<label for="education" class=" control-label">Age:</font></label>
				</div>
				<div class="col-lg-8">
				
					<input id="age" name="age" type="text" class="form-control"value="<?php echo $informations->user_age;?>" />
					
					<span class="text-danger"><?php echo form_error('age');?></span>

				</div>
				
			</div>

		<div class="form-group target row">
				<div class="col-lg-4">
				<label for="education" class=" control-label">Educational Attainment:</label>
				</div>
				<div class="col-lg-8">
				
					<input id="education" name="education" type="text" class="form-control" value="<?php echo $informations->user_education;?>" />
					
					<span class="text-danger"><?php echo form_error('education');?></span>

				</div>
				
			</div>
			
			
			
			
<br>

			<h1 class="">
				<strong>Contact Information </strong>
			</h1>
			
<br>
 
			<div class="form-group target row">
				<div class="col-lg-4">
				<label for="contact" class=" control-label">Contact Number:</label>
				</div>
				<div class="col-lg-8">
				
					<input id="contact" name="contact" class="form-control" type="text"value="<?php echo $informations->user_contact;?>" /> 
					
					<span class="text-danger"><?php echo form_error('contact')?></span>
					
				</div>
				
			</div>
			
			<div class="form-group row">
			<div class="col-lg-4">
				<label for="skype" class=" control-label">Skype Account: &nbsp<font color="red">(Required)</font></label>
				</div>
				<div class="col-lg-8">
				
					<input id="skype" name="skype" class="form-control" type="text" value="<?php echo $informations->user_skype;?>"/> 
					
					<span class="text-danger"><?php echo form_error('skype')?></span>
					
				</div>
				
			</div>
			

			<div class="form-group row">
			
					<label class=" control-label"></label>
					
					<div class="col-lg-8">
					
						<input id="btn_add" type="submit"
						
							class="btn btn-primary" value="Save Changes"> <span class=""></span>
							

						<a href="<?= base_url();?>index.php/student/profile" class="btn btn-danger">Cancel</a>
						
					</div>
					
				</div>

			
<?php }else {
}
}
?>

			
			 <?php echo form_close(); ?>
			 
				
				 
			<!-- FOR MODIFY 

			<h3 class="">
				<strong>Others</strong>
			</h3>
			<div class="form-group">
				<label class="col-lg-3 control-label">How well can you speak
					English? &nbsp&nbsp&nbsp (Rate: 7 is the highest)</label>
			</div>

			<div class="skillLine">
				<div class="skill pull-left">
					<emp>English &nbsp&nbsp&nbsp&nbsp</emp>
				</div>
				<div class="rating" id="rate1"></div>

				<div class="form-group">
					<label class="col-lg-3 control-label"> Do you have friends who
						would like to study also?</label>
				</div>

				<div class="radio-enabled">
					<label><input type="radio" name="optradio" value="yes" id="confirm"
						class="yes" checked="checked" <?php set_radio('optradio', 'yes')?>
						onClick='javascript:radioBtnCheck()'>Yes</input></label>
				</div>
				<div class="radio-enabled">
					<label><input type="radio" name="optradio" value="no"
						id="unconfirm" class="no" <?php set_radio('optradio', 'no')?>
						onClick='javascript:radioBtnCheck()'>No</input></label>
				</div>
				<br>


				<div class="form-group">
					<label class="col-md-4 control-label"></label>
					<div class="col-md-8">
						<input id="btn_add" name="btn_add" type="submit"
							class="btn btn-primary" value="Save Changes"> <span class=""></span>

						<input id="btn_cancel" name="btn_cancel" class="btn btn-danger"
							value="Cancel" type="reset">
					</div>
				</div>


				<br> <br>
       
            -->
           
          
       		
      </div>
		</div>





	</div>

	<br>

<!-- FOR MODIFY -->
	
	<!--  <script type="text/javascript">
                $(function() {
                    var action;
                    $(".number-spinner button").mousedown(function () {
                        btn = $(this);
                        input = btn.closest('.number-spinner').find('input');
                        btn.closest('.number-spinner').find('button').prop("disabled", false);

                    	if (btn.attr('data-dir') == 'up') {
                            action = setInterval(function(){
                                if ( input.attr('max') == undefined || parseInt(input.val()) < parseInt(input.attr('max')) ) {
                                    input.val(parseInt(input.val())+1);
                                }else{
                                    btn.prop("disabled", true);
                                    clearInterval(action);
                                }
                            }, 50);
                    	} else {
                            action = setInterval(function(){
                                if ( input.attr('min') == undefined || parseInt(input.val()) > parseInt(input.attr('min')) ) {
                                    input.val(parseInt(input.val())-1);
                                }else{
                                    btn.prop("disabled", true);
                                    clearInterval(action);
                                }
                            }, 50);
                    	}
                    }).mouseup(function(){
                        clearInterval(action);
                    });
                });

                </script>



	<script type="text/javascript">
jQuery(function ($) {
    $('#rate1').shieldRating({
        max: 7,
        step: 1,
        value: 6,
        markPreset: false
    });
});
</script>-->