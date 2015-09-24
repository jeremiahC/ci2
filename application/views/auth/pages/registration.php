<div id="content">
<div class="signup_wrap">
<div class="signin_form">
 <?php echo form_open("user/login"); ?>
  <label for="email">Email:</label>
  <input type="text" id="email" name="email" value="" />
  <label for="password">Password:</label>
  <input type="password" id="pass" name="pass" value="" />
  <input type="submit" class="" value="Sign in" />
 <?php echo form_close(); ?>
</div><!--<div class="signin_form">-->
</div><!--<div class="signup_wrap">-->
<div class="reg_form">
<div class="form_title">Sign Up</div>
<div class="form_sub_title">It's free and anyone can join</div>
 <?php echo validation_errors('<p class="error">'); ?>
 <?php echo form_open("user/registration"); ?>
  <p>
  <label for="user_name">User Name:</label>
  <input type="text" id="user_name" name="user_name" value="<?php echo set_value('user_name'); ?>" />
  </p>
  <p>
  <label for="email_address">Your Email:</label>
  <input type="text" id="email_address" name="email_address" value="<?php echo set_value('email_address'); ?>" />
  </p>
  <p>
  <label for="password">Password:</label>
  <input type="password" id="password" name="password" value="<?php echo set_value('password'); ?>" />
  </p>
  <p>
  <label for="con_password">Confirm Password:</label>
  <input type="password" id="con_password" name="con_password" value="<?php echo set_value('con_password'); ?>" />
  </p>
  <p>
  <input type="submit" class="greenButton" value="Submit" />
  </p>
 <?php echo form_close(); ?>
</div><!--<div class="reg_form">-->
</div><!--<div id="content">-->





<div id="main">
<div id="login">
<h2>Registration Form</h2>
<hr/>
<?php
echo "<div class='error_msg'>";
echo validation_errors();
echo "</div>";
echo form_open('user_authentication/new_user_registration');

echo form_label('Create Username : ');
echo"<br/>";
echo form_input('username');
echo "<div class='error_msg'>";
if (isset($message_display)) {
echo $message_display;
}
echo "</div>";
echo"<br/>";
echo form_label('Email : ');
echo"<br/>";
$data = array(
'type' => 'email',
'name' => 'email_value'
);
echo form_input($data);
echo"<br/>";
echo"<br/>";
echo form_label('Password : ');
echo"<br/>";
echo form_password('password');
echo"<br/>";
echo"<br/>";
echo form_submit('submit', 'Sign Up');
echo form_close();
?>
<a href="<?php echo base_url() ?> ">For Login Click Here</a>