
<section id="login-page" class="body" >
	
 	<div class="container" id="login">
		
		<h2>Login</h2>
		
		<div class="row login-wrap">
			<div class="col-md-6">
 			

 			<form  class="login-form" method="post" >
		
				       		<div class="form-group">
						    	<label>Username</label>
						    	<input class="form-control"  type="text" size="20" name="username" placeholder="Username/Email" value="<?php echo set_value('username'); ?>"/>
						    	<div class="text-danger" role="alert">
						    		<?php echo form_error('username'); ?>
						    	</div>
						  	</div>
						  	<div class="form-group">
							    <label>Password</label>
							    <input class="form-control" type="password" size="20" name="password" placeholder="Password" value="<?php echo set_value('password'); ?>"/>
							    <div class="text-danger" role="alert">
							    	<?php echo form_error('password'); ?>
							    </div>
						  	</div>
				      
				      <br>
				        <button type="submit" class="btn-primary" name="login" >Login</button>

	<!-- <button class="btn btn-primary" > <?php echo anchor('register','<span class="text-default">Register</span>');?></button> -->
			</form>
		</div>
	</div>
	</div>
	
	
	
</section>
	<?php $this->load->view('auth/pages/templates/footer'); ?>