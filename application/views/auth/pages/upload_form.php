<section id="reg-page" >	
    <div class="container">

<?php echo $error;?>

<?php echo form_open_multipart('student/Profile');?>

<input type="file" name="userfile" size="20" />

<br /><br />

<input type="submit" value="upload" name="upload" class="btn btn-primary" disabled/>

<?php echo form_close();?>



</div>
    
</section>