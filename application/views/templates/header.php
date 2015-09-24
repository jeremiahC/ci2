
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/bootstrap.css'?>">
        <script type='text/javascript' src="<?php echo base_url(); ?>assets/js/jquery-2.1.4.js"></script>
        <script type='text/javascript' src="<?php echo base_url(); ?>assets/js/bootstrap.js"></script>
        
        
          </head>
    
    <body>
    <header>
    <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      
      <div class="navbar-brand">
      			<?php echo anchor('home','Project Name'); ?>
      </div>
  </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><?php echo anchor('home','Home'); ?></li>
        <li><?php echo anchor('courses','Courses'); ?> </li>
        <li><?php echo anchor('schedules','Schedules'); ?></li>
        <li><?php echo anchor('promos','Promos'); ?></li>
     
        
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Dropdown <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li class="divider"></li>
            <li><a href="#">Separated link</a></li>
            <li class="divider"></li>
            <li><a href="#">One more separated link</a></li>
          </ul>
        </li>
      </ul>
      
  
      <ul class="nav navbar-nav navbar-right">
        <li><?php echo anchor('registration','<span class="glyphicon glyphicon-user"></span> Sign Up'); ?></li>
       
      
        
<!--         <li> -->
<!-- 	        <button type="button" class="btn-lg btn-link" data-toggle="modal" data-target="#myModal"> -->
<!-- 			  <span class="glyphicon glyphicon-log-in"></span> Login  -->
<!-- 			</button> -->
		
		
			<!-- Modal -->
<!-- 				<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true"> -->
<!-- 				  <div class="modal-dialog"> -->
<!-- 				    <div class="modal-content"> -->
<!-- 				      <div class="modal-header"> -->
<!-- 				        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button> -->
<!-- 				        <h4 class="modal-title" id="myModalLabel">Website Login</h4> -->
<!-- 				      </div> -->
<!-- 				      <div class="modal-body"> -->
<!-- 				       		<div class="form-group"> -->
<!-- 						    	<label for="exampleInputUser1">Username</label> -->
<!-- 						    	<input class="form-control"  type="text" size="20" id="username" name="username" placeholder="Username"/> -->
<!-- 						  	</div> -->
<!-- 						  	<div class="form-group"> -->
<!-- 							    <label for="exampleInputPassword1">Password</label> -->
<!-- 							    <input class="form-control" type="password" size="20" id="passowrd" name="password" placeholder="Password"/> -->
<!-- 						  	</div> -->
<!-- 				      </div> -->
<!-- 				      <div class="modal-footer"> -->
<!-- 				        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button> -->
<!-- 				        <button type="button" class="btn btn-primary">Login</button> -->
<!-- 				      </div> -->
<!-- 				    </div> -->
<!-- 				  </div> -->
<!-- 				</div> -->
<!-- 		</li> -->
		
		 <li><?php echo anchor('pages/login','<span class="glyphicon glyphicon-log-in"></span> Log in'); ?></li>
		
		
		
		</ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

</header>     