		
		<div class="collapse navbar-collapse navbar-ex1-collapse ">
		  
                <div class="nav navbar-nav side-nav well">
                
                <legend><strong class="text-info text-justify">DASHBOARD</strong></legend>
                    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
					  <div class="panel panel-info">
					    <div class="panel-heading" role="tab" id="headingOne">
					      <h4 class="panel-title">
					        <span class="glyphicon glyphicon-user pull-left	"></span>
					        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
					          Users
					        </a>
					        <span class=" pull-right glyphicon glyphicon-menu-hamburger" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne"></span>
					      </h4>
					    </div>
					    <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
					      <div class="list-group text-center">
					      		<ul class="list-unstyled">
					      			<li><?php echo anchor('admin/crud/users','Admin',array('class'=>'side-nav-a'));?></li>
					      			<li><?php echo anchor('admin/crud/teachers','Teachers',array('class'=>'side-nav-a'));?></li>
					      			<li><?php echo anchor('admin/crud/admins','Students',array('class'=>'side-nav-a'));?></li>
					      		</ul>
					      		
					       </div>
					    </div>
					  </div>
					  <div class="panel panel-info">
					    <div class="panel-heading" role="tab" id="headingTwo">
					      <h4 class="panel-title">
					      	<span class="glyphicon glyphicon-blackboard pull-left"></span>
					        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
					          Courses
					        </a>
					        <span class=" pull-right glyphicon glyphicon-menu-hamburger" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo"></span>
					      
					      </h4>
					    </div>
					    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
					     <div class="list-group">
					      		<ul class="list-unstyled text-center">
					      			<li><?php echo anchor('admin/crud/course_1','Course Name 1',array('class'=>'side-nav-a'));?></li>
					      			<li><?php echo anchor('admin/crud/course_2','Course Name 2',array('class'=>'side-nav-a'));?></li>
					      			<li><?php echo anchor('admin/crud/course_3','Course Name 3',array('class'=>'side-nav-a'));?></li>
					      		</ul>
					       </div>
					    </div>
					  </div>
					  <div class="panel panel-info">
					    <div class="panel-heading" role="tab" id="headingThree">
					      <h4 class="panel-title">
					      <span class="glyphicon glyphicon-certificate pull-left"></span>
					        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
					          Enrollees
					        </a>
					        <span class=" pull-right glyphicon glyphicon-menu-hamburger" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="true" aria-controls="collapseThree"></span>
					      
					      </h4>
					    </div>
					    <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
					      <div class="list-group">
					        	<ul class="list-unstyled text-center">
					      			<li><?php echo anchor('admin/crud/course1_enrollees','Course Name 1',array('class'=>'side-nav-a'));?></li>
					      			<li><?php echo anchor('admin/crud/course2_enrollees','Course Name 2',array('class'=>'side-nav-a'));?></li>
					      			<li><?php echo anchor('admin/crud/course3_enrollees','Course Name 3',array('class'=>'side-nav-a'));?></li>
					      			<li><?php echo anchor('admin/crud/special_schedules','Special Schedules',array('class'=>'side-nav-a'));?></li>
					      			<li><?php echo anchor('admin/crud/visitor_schedules','Visitors Schedules',array('class'=>'side-nav-a'));?></li>
					      		</ul>
					        </div>
					    </div>
					  </div>
					</div>
                  
                </div>
                
                
                
            </div>
            <!-- /.navbar-collapse -->
 