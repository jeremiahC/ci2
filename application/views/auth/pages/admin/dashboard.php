    <div id="wrapper">

        <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-brand">
                    <a href="#">
                        Admin Dashboard
                    </a>
                </li>
                <li>
                    <a role="button" data-toggle="collapse" href="#user" aria-expanded="false" aria-controls="collapseExample" style="background:#98bf21; width: 10px;">Users</a>
						<ul class="drop collapse" id="user">
								<li><?php echo anchor('admin/crud/users','Admin');?></li>
								<li><?php echo anchor('admin/crud/teachers','Teachers');?></li>
					      		<li><?php echo anchor('admin/crud/admins','Students');?></li>
						</ul>
                </li>
                <li>
                    <a role="button" data-toggle="collapse" href="#courses" aria-expanded="false" aria-controls="collapseExample" style="background:#4DB8FF; width: 10px;">Courses</a>
						<ul class=" collapse" id="courses">
								<li><?php echo anchor('admin/crud/course_1','Course Name 1');?></li>
					      		<li><?php echo anchor('admin/crud/course_2','Course Name 2');?></li>
					      		<li><?php echo anchor('admin/crud/course_3','Course Name 3');?></li>
						</ul>

                </li>
                <li>
                    <a role="button" data-toggle="collapse" href="#schedules" aria-expanded="false" aria-controls="collapseExample" style="background:#fff; width: 10px;">Schedules</a>
						<ul class="collapse" id="schedules">
								<li><?php echo anchor('admin/crud/course1_enrollees','Course Name 1');?></li>
					      		<li><?php echo anchor('admin/crud/course2_enrollees','Course Name 2');?></li>
					      		<li><?php echo anchor('admin/crud/course3_enrollees','Course Name 3');?></li>
					      		<li><?php echo anchor('admin/crud/special_schedules','Special Schedules');?></li>
					      		<li><?php echo anchor('admin/crud/visitor_schedules','Visitors Schedules');?></li>
						</ul>
                </li>
            </ul>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
				<div class="reg-page">
						<div class="container-fluid">
							<div class="row">
								<div class="col-lg-12">
										<a href="#menu-toggle" class="glyphicon glyphicon-menu-hamburger" id="menu-toggle"></a>
										<h1>Welcome Admin!</h1>
										<p>This template has a responsive menu toggling system. The menu will appear collapsed on smaller screens, and will appear non-collapsed on larger screens. When toggled using the button below, the menu will appear/disappear. On small screens, the page content will be pushed off canvas.</p>
										<p>Make sure to keep all page content within the <code>#page-content-wrapper</code>.</p>
										
								</div>
							</div>
						</div>
				</div>
        </div>
        <!-- /#page-content-wrapper -->

