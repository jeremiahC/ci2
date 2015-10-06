<section id="main-slider" class="no-margin">
        <div class="carousel slide">      
            <div class="carousel-inner">
                <div class="item active" style="background-image: url(/ci2/assets/images/esl.jpg); height:1000px;">
                    <div class="container">
                        <div class="row slide-margin">
                            <div class="col-sm-6">
                                <div class="carousel-content">
                                    <h2 class="animation animated-item-1">Welcome <span>To ESL</span></h2>
                                    <p class="animation animated-item-2">This proven method strengthens your reading, speaking, and listening all at the same time and makes learning English easy.</p>
                                    <a class="btn-slide animation animated-item-3" href="#">Read More</a>
                                </div>
                            </div>

                          <!--  <div class="col-sm-6 hidden-xs animation animated-item-4">
                                <div class="slider-img">
                                    <img src="images/slider/img3.png" class="img-responsive">
                                </div>
                            </div>
						-->
                        </div>
                    </div>
                </div><!--/.item-->             
            </div><!--/.carousel-inner-->
        </div><!--/.carousel-->
    </section><!--/#main-slider-->
	  <?php if (logged_in()){} else { ?>

			<div class="signup">
				  <div class="row ">
						<div class="container">
							  
									<div class="col-xs-12 col-sm-12 col-md-12 ">
										  <h2 >Sign Up Now</h2>
									</div>
							  
							 
									<div class="col-xs-12 col-sm-12 col-md-12 ">
										  <div class="col-md-6">
												
												<?php echo anchor('register','<button class="btn btn-primary">Student<span><img src="../assets/images/student.png" style="height:100px; width:100px;"></span></button>');?>
										  </div>
												
										  <div class="col-md-6">
												<?php echo anchor('register_teacher','<button class="btn btn-primary">Teacher<span><img src="../assets/images/teacher.png" style="height:100px; width:100px;"></span></button>');?>
										  </div>
										  <!--<p class="text-muted">Already a member?<?php echo anchor('login',' Login');?></p> -->
									</div>			  
						</div>	
				  </div>
			
			</div>
	<?php } ?>
	  
	
	  <!-- Page Content -->
		<div class="about">
				<div class="container">
						
						<div class="row text-center">
								<div class="col-xs-12 col-sm-6 col-md-3">
									<div class="hi-icon-wrap hi-icon-effect wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms" >
										<i class="fa fa-user"></i>	
										<h2>Register</h2>
										<p>Some text here, here too. Some text here, here too. Some text here, here too. Some text here, here too. Some text here, here too.</p>
									</div>
								</div>
								<div class="col-xs-12 col-sm-6 col-md-3">
									<div class="hi-icon-wrap hi-icon-effect wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms" >
										<i class="fa fa-search"></i>	
										<h2>Find Courses</h2>
										<p>Some text here, here too. Some text here, here too. Some text here, here too. Some text here, here too. Some text here, here too.</p>
									</div>
								</div>
								<div class="col-xs-12 col-sm-6 col-md-3">
									<div class="hi-icon-wrap hi-icon-effect wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="900ms" >
										<i class="fa fa-heart-o"></i>	
										<h2>Learn</h2>
										<p>Some text here, here too. Some text here, here too. Some text here, here too. Some text here, here too. Some text here, here too.</p>
									</div>
								</div>
								<div class="col-xs-12 col-sm-6 col-md-3">
									<div class="hi-icon-wrap hi-icon-effect wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="1200ms" >
										<i class="fa fa-check"></i>	
										<h2>Done</h2>
										<p>Some text here, here too. Some text here, here too. Some text here, here too. Some text here, here too. Some text here, here too.</p>
									</div>
								</div>
						</div>
						
				</div>
		</div>
			
	<!--  <div class="container">
			<!-- Portfolio Section -->
			<!--<div class="row">
				  
				<div class="col-md-12 col-sm-12  wow fadeInDown animated" data-wow-delay="300ms" data-wow-duration="1000ms" style="visibility: visible;-webkit-animation-duration: 1000ms; -moz-animation-duration: 1000ms; animation-duration: 1000ms;-webkit-animation-delay: 300ms; -moz-animation-delay: 300ms; animation-delay: 300ms;">
					<h2 class="page-header text-center">Portfolio Heading</h2>
				</div>
				<div class="col-md-4 col-sm-12 wow fadeInDown animated" data-wow-delay="600ms" data-wow-duration="1000ms" style="visibility: visible;-webkit-animation-duration: 1000ms; -moz-animation-duration: 1000ms; animation-duration: 1000ms;-webkit-animation-delay: 600ms; -moz-animation-delay: 600ms; animation-delay: 600ms;">
					<a href="portfolio-item.html">
						<img class="img-responsive img-portfolio img-hover " src="http://placehold.it/700x450" alt="">
					</a>
				</div>
				<div class="col-md-4 col-sm-12 wow fadeInDown animated" data-wow-delay="900ms" data-wow-duration="1000ms" style="visibility: visible;-webkit-animation-duration: 1000ms; -moz-animation-duration: 1000ms; animation-duration: 1000ms;-webkit-animation-delay: 900ms; -moz-animation-delay: 900ms; animation-delay: 900ms;">
					<a href="portfolio-item.html">
						<img class="img-responsive img-portfolio img-hover" src="http://placehold.it/700x450" alt="">
					</a>
				</div>
				<div class="col-md-4 col-sm-12 wow fadeInDown animated" data-wow-delay="1200ms" data-wow-duration="1000ms" style="visibility: visible;-webkit-animation-duration: 1000ms; -moz-animation-duration: 1000ms; animation-duration: 1000ms;-webkit-animation-delay: 1200ms; -moz-animation-delay: 1200ms; animation-delay: 1200ms;">
					<a href="portfolio-item.html">
						<img class="img-responsive img-portfolio img-hover" src="http://placehold.it/700x450" alt="">
					</a>
				</div>
			</div><!-- /.row -->
	 <!-- </div><!--container-->			
			
			
			
			<!-- Features Section 
			<div class="row ">
				 <div class="container"> 
						<div class="col-lg-12 wow fadeInDown animated" data-wow-delay="300ms" data-wow-duration="1000ms" style="visibility: visible;-webkit-animation-duration: 1000ms; -moz-animation-duration: 1000ms; animation-duration: 1000ms;-webkit-animation-delay: 300ms; -moz-animation-delay: 300ms; animation-delay: 300ms;">
							<h2 class="page-header ">Mission</h2>
						</div>
						<div class="col-md-6 wow fadeInDown animated">
							<p>The Modern Business template by Start Bootstrap includes:</p>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis, omnis doloremque non cum id reprehenderit, quisquam totam aspernatur tempora minima unde aliquid ea culpa sunt. Reiciendis quia dolorum ducimus unde.</p>
						</div>
						<div class="col-md-6 wow fadeInDown animated" data-wow-delay="600ms" data-wow-duration="1000ms" style="visibility: visible;-webkit-animation-duration: 1000ms; -moz-animation-duration: 1000ms; animation-duration: 1000ms;-webkit-animation-delay: 600ms; -moz-animation-delay: 600ms; animation-delay: 600ms;">
							<img class="img-responsive" src="http://placehold.it/700x450" alt="">
						</div>
				  </div>
			</div>
			<!-- /.row 
	  
			<div class="row">
				  <div class="container">
						<div class="col-lg-12 wow fadeInDown animated"	data-wow-delay="300ms" data-wow-duration="1000ms" style="visibility: visible;-webkit-animation-duration: 1000ms; -moz-animation-duration: 1000ms; animation-duration: 1000ms;-webkit-animation-delay: 300ms; -moz-animation-delay: 300ms; animation-delay: 300ms;">
							<h2 class="page-header">Vission</h2>
						</div>
						<div class="col-md-6 wow fadeInDown animated">
							<p>The Modern Business template by Start Bootstrap includes:</p>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis, omnis doloremque non cum id reprehenderit, quisquam totam aspernatur tempora minima unde aliquid ea culpa sunt. Reiciendis quia dolorum ducimus unde.</p>
						</div>
						<div class="col-md-6 wow fadeInDown animated" data-wow-delay="600ms" data-wow-duration="1000ms" style="visibility: visible;-webkit-animation-duration: 1000ms; -moz-animation-duration: 1000ms; animation-duration: 1000ms;-webkit-animation-delay: 600ms; -moz-animation-delay: 600ms; animation-delay: 600ms;">
							<img class="img-responsive" src="http://placehold.it/700x450" alt="">
						</div>
				  </div>
			</div>
			
			
			<!-- /.row -->
			
	  

