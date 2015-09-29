	
<section id="reg-page" >	
	<div class="container" id="login">
		<div class="row ">
			<div class="col-md-6">
				<legend>
				<?php if(empty($username)) { ?>
				<h2>Teachers Registration</h2>
				<?php } else { ?>
				<h2>Update</h2>
				<?php } ?>
				</legend>
		
				<div class="">
						<form  class="reg-form" method="post" >
						<?php if(empty($username)) { ?>
						
						<div class="form-group">
							<label>Username</label>
							<input type="text" name="username" size="50" class="form-control" value="<?php echo set_value('username'); ?>" placeholder="Username"/>
							<div class="text-danger" role="alert">
								<?php echo form_error('username'); ?>
							</div>
						</div>
						
						<div class="form-group">
							<label>Password</label>
							<input type="password" name="password" size="50" class="form-control" value="<?php echo set_value('password'); ?>" placeholder="Password"/>
							<div class="text-danger" role="alert">
								<?php echo form_error('password'); ?>
							</div>
						</div>
						
						<div class="form-group">
							<label>Password Confirmation</label>
							<input type="password" name="password_conf" size="50" class="form-control" value="<?php echo set_value('conf_password'); ?>" placeholder="Retype Password"/>
							<div class="text-danger" role="alert">
								<?php echo form_error('conf_password'); ?>
							</div>
							<?php } ?>
						</div>
						
						<div class="form-group">
							<label>Email</label>
							<?php if(empty($username)){ ?>
							<input type="text" name="email" size="50" class="form-control" value="<?php echo set_value('email'); ?>" placeholder="Email"/>
							<div class="text-danger" role="alert">
								<?php echo form_error('email'); ?>
							</div>
						</div>
							<?php }else{ ?>
							<input type="text" name="email" size="50" class="form" value="<?php echo set_value('email', $email); ?>" />
							
							<div class="text-danger" role="alert">
									<?php echo form_error('email'); ?>
							</div>
						</div>
						
						<?php } if(empty($username)) { ?>
							<button type="submit" class="btn btn-primary" name="register" >Register</button>
						<?php } else { ?>
							<button type="submit" class="btn btn-primary" name="register" >Update</button>
						<?php } ?>
						
			<!-- 			link to login (BUG) -->
				<!-- 		<button class="btn btn-primary" > <?php echo anchor('login','<span class="text-default">Login</span>');?></button>  -->	
					
				</div>
			</div>
		</div>
	</div>
</section>
