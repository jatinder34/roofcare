<!--slider-area start -->
		<div class="slider-area">
		
		
		
			
			<div id="myCarousel" class="carousel slide" data-ride="carousel">
			  <!-- Indicators -->
			  <ol class="carousel-indicators">
				<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
				<li data-target="#myCarousel" data-slide-to="1"></li>
				<li data-target="#myCarousel" data-slide-to="2"></li>
				
			  </ol>

			  <!-- Wrapper for slides -->
			  <div class="carousel-inner" role="listbox" id="mainslids">
			  	<?php
			  		foreach ($slids as $allslids) :
			  			// echo "<pre>";
			  			// print_r($allslids);
			  		
			  	?>
				<div class="item">
				  <img src="<?php echo $allslids->slide;?>" alt="Chania">
				  <div class="carousel-caption">
					<h3><?php echo $allslids->hading1;?></h3>
							<h2><?php echo $allslids->hading2;?></h2>
							<p><?php echo $allslids->peragraph;?> </p>
							<a class="btn" href="<?php echo $allslids->button_url;?>"><?php echo $allslids->button;?></a>		
				  </div>
				</div>
			<?php endforeach;?>
				<!-- <div class="item">
				  <img src="<?php //echo base_url('assets/user');?>/img/slider/2.jpg" alt="Chania">
				  <div class="carousel-caption">
					<h3>NATURAL BEAUTY</h3>
							<h2>WE WILL HELP YOU TO FIX YOUR ROOF.</h2>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque vel volutpat felis, eu condimentum <br/> massa. Pellentesque mollis eros vel mattis tempor. </p>
							<a class="btn" href="javascript:void(0);">read more</a>		
				  </div>
				</div>
				<div class="item">
				  <img src="<?php //echo base_url('assets/user');?>/img/slider/3.jpg" alt="Chania">
				  <div class="carousel-caption">
					<h3>NATURAL BEAUTY</h3>
							<h2>WE WILL HELP YOU TO FIX YOUR ROOF.</h2>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque vel volutpat felis, eu condimentum <br/> massa. Pellentesque mollis eros vel mattis tempor. </p>
							<a class="btn" href="javascript:void(0);">read more</a>		
				  </div>
				</div> -->

				
				
				
			  </div>

			  <!-- Left and right controls -->
			  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
				<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			  </a>
			  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
				<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			  </a>
			</div>
			
				</div>
		<!-- slider-area end -->
		<!-- feature-area-start -->
		<div class="feature-area pt-80 pb-60">
			<div class="container">
				<div class="row">
					<?php
						foreach ($service_sec as $service):
							// echo "<pre>";
							// print_r($service);
					?>
					<div class="col-lg-4 col-md-4 col-sm-4 custom-width">
						<div class="single-feature mb-20">
							<div class="feature-image">
								<img src="<?php echo $service->post_image;?>" alt="" />
							</div>
							<div class="feature-text text-center">
							<h3><?php echo $service->post_name;?></h3>
							<p><?php echo $service->post_content;?></p>
							</div>
						</div>
					</div>
				<?php endforeach;?>
					<!-- <div class="col-lg-4 col-md-4 col-sm-4 custom-width">
						<div class="single-feature mb-20">
							<div class="feature-image">
								<img src="<?php echo base_url('assets/user');?>/img/feature/2.jpg" alt="" />
							</div>
							<div class="feature-text text-center">
							<h3>Residential Roofing </h3>
							<p>As the world’s largest green and clean egerngy specialist of the printing and typesetting industry. Lorem has been the industry.</p>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-4 col-sm-4 custom-width">
						<div class="single-feature mb-20">
							<div class="feature-image">
								<img src="<?php echo base_url('assets/user');?>/img/feature/3.jpg" alt="" />
							</div>
							<div class="feature-text text-center">
							<h3>Multi-Family Roofing </h3>
							<p>As the world’s largest green and clean egerngy specialist of the printing and typesetting industry. Lorem has been the industry.</p>
							</div>
						</div>
					</div> -->
				</div>
			</div>
		</div>
		<!-- feature-area-end -->
		<!-- purchase-area start -->
		<div class="purchase-area bg-img-1 ptb-80  bg-opacity">
			<div class="container">
				<?php
					foreach ($saveroof as $sr) :
						// print_r($sr);
				?>
				<div class="purchase-content text-center text-white">
					<h3><?php echo $sr->post_name;?></h3>
					<p><?php echo $sr->post_content;?></p>
					<a class="btn btn-blue" href="javascript:void(0);">learn more</a>
				</div>	
			<?php endforeach;?>
			</div>
		</div>
		<!-- purchase-area end -->
		<!--  service-area start  -->
		<div class="service-area pt-80 pb-60">
			<div class="container">
				<?php
					foreach ($shielding as $shield) :
				?>
				<div class="section-heading text-center">
					<h2><?php echo $shield->post_name;?></h2>
					<p><?php echo $shield->post_content;?></p>
				</div>
			<?php endforeach;?>
				<div class="row">
					<?php
						foreach ($shieldingall as $shieldall):
					?>
					<div class="col-lg-4 col-md-4 col-sm-6 custom-width mb-20">
						<div class="service-box text-center">
							<div class="service-image">
								<img src="<?php echo $shieldall->post_image;?>" alt="" />
							</div>
							<h3><?php echo $shieldall->post_name;?></h3>
							<p><?php echo $shieldall->post_content;?></p>
						</div>
					</div>
				<?php endforeach;?>
					<!-- <div class="col-lg-4 col-md-4 col-sm-6 custom-width mb-20">
						<div class="service-box text-center ">
							<div class="service-image">
								<img src="<?php echo base_url('assets/user');?>/img/service/2.png" alt="" />
							</div>
							<h3>Shingles</h3>
							<p>Our services are so awesome of passages of Lerem ipsum available</p>
						</div>
					</div>
					<div class="col-lg-4 col-md-4 col-sm-6 custom-width mb-20">
						<div class="service-box text-center ">
							<div class="service-image">
								<img src="<?php echo base_url('assets/user');?>/img/service/3.png" alt="" />
							</div>
							<h3>Re-Roofing</h3>
							<p>Our services are so awesome of passages of Lerem ipsum available</p>
						</div>
					</div>
					<div class="col-lg-4 col-md-4 col-sm-6 custom-width mb-20">
						<div class="service-box text-center">
							<div class="service-image">
								<img src="<?php echo base_url('assets/user');?>/img/service/4.png" alt="" />
							</div>
							<h3>Fast and Efficient Work</h3>
							<p>Our services are so awesome of passages of Lerem ipsum available</p>
						</div>
					</div>
					<div class="col-lg-4 col-md-4 col-sm-6 custom-width mb-20">
						<div class="service-box text-center">
							<div class="service-image">
								<img src="<?php echo base_url('assets/user');?>/img/service/5.png" alt="" />
							</div>
							<h3>Personalized Service</h3>
							<p>Our services are so awesome of passages of Lerem ipsum available</p>
						</div>
					</div>
					<div class="col-lg-4 col-md-4 col-sm-6 custom-width mb-20">
						<div class="service-box text-center ">
							<div class="service-image">
								<img src="<?php echo base_url('assets/user');?>/img/service/6.png" alt="" />
							</div>
                            <h3>Best Price Guarantee</h3>
							<p>Our services are so awesome of passages of Lerem ipsum available</p>
						</div>
					</div> -->
				</div>
			</div>
		</div>
        <!--  service-area end  -->		
        <!--  Project-area start  -->
		<div class="Project-area pt-80 pb-60">
			<div class="container">
				<?php
					foreach ($projectpost as $project):
				?>
				<div class="section-heading text-center">
					<h2><?php echo $project->post_name;?> </h2>
					<p><?php echo $project->post_content;?></p>
				</div>
			<?php endforeach;?>
				<div class="row">
					<?php 
						foreach ($projectposts as $pp):
					?>
					<div class="col-lg-4 col-md-4 col-sm-6 custom-width ">
						<div class="Project-box mb-20">
							<div class="Project-image">
								<a href="javascript:void(0);"><img src="<?php echo $pp->post_image;?>" alt="" /></a>
							</div>
							<div class="Project-content text-center">
								<h4><a href="javascript:void(0);"><?php echo $pp->post_name;?></a></h4>
								<span><?php echo $pp->post_content;?></span>
							</div>
						</div>
					</div>
				<?php endforeach;?>
					<!-- <div class="col-lg-4 col-md-4 col-sm-6 custom-width ">
						<div class="Project-box mb-20">
							<div class="Project-image">
								<a href="javascript:void(0);"><img src="<?php echo base_url('assets/user');?>/img/project/4.jpg" alt=""></a>
							</div>
							<div class="Project-content text-center">
								<h4><a href="javascript:void(0);">Project Name</a></h4>
								<span>Renovating</span>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-4 col-sm-6 custom-width ">
						<div class="Project-box mb-20">
							<div class="Project-image">
								<a href="javascript:void(0);"><img src="<?php echo base_url('assets/user');?>/img/project/3.jpg" alt=""></a>
							</div>
							<div class="Project-content text-center">
								<h4><a href="javascript:void(0);">Project Name</a></h4>
								<span>Plumbing</span>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-4 col-sm-6 custom-width ">
						<div class="Project-box mb-20">
							<div class="Project-image">
								<a href="javascript:void(0);"><img src="<?php echo base_url('assets/user');?>/img/project/5.jpg" alt=""></a>
							</div>
							<div class="Project-content text-center">
								<h4><a href="javascript:void(0);">Project Name</a></h4>
								<span>Roofing</span>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-4 col-sm-6 custom-width ">
						<div class="Project-box mb-20">
							<div class="Project-image">
								<a href="javascript:void(0);"><img src="<?php echo base_url('assets/user');?>/img/project/4.jpg" alt=""></a>
							</div>
							<div class="Project-content text-center">
								<h4><a href="javascript:void(0);">Project Name</a></h4>
								<span>Renovating</span>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-4 col-sm-6 custom-width ">
						<div class="Project-box mb-20">
							<div class="Project-image">
								<a href="javascript:void(0);"><img src="<?php echo base_url('assets/user');?>/img/project/6.jpg" alt=""></a>
							</div>
							<div class="Project-content text-center">
								<h4><a href="javascript:void(0);">Project Name</a></h4>
								<span>Plumbing</span>
							</div>
						</div>
					</div> -->
				</div>
			</div>
		</div>
        <!--  Project-area end  -->	
		<!-- testimonial-area start -->
		<div class="testimonial-area bg-img-2  pt-80 pb-60 bg-opacity">
			<div class="container">
				<div class="testimonial-active">
					<?php
					foreach($testimonials as $testimonial):
					?>
					<div class="single-testimonial-  ">
						<div class="testimonial-text">
							<p><?php echo $testimonial->post_content;?></p>
						</div>
						<div class="testimonial-details text-center">
							<h4><?php echo $testimonial->post_name;?></h4>
							<span><?php echo $testimonial->post_custom;?></span>
						</div>
					</div>
				<?php endforeach;?>
				</div>	
			</div>
		</div>
		<!-- testimonial-area end -->
	    <!--  blog-area start  -->
		<div class="blog-area pt-80 pb-60">
			<div class="container">
				<?php
					foreach($ourblog as $blogcon):
					?>
				<div class="section-heading text-center">
					<h2><?php echo $blogcon->post_name;?></h2>
					<p><?php echo $blogcon->post_content;?></p>
				</div>
			<?php endforeach;?>
				<div class="row">
					<?php 
						foreach ($allpost as $blog) :
					?>
					<div class="col-lg-4 col-md-4 col-sm-6 custom-width mb-20">
						<div class="blog-wrapper">
							<div class="blog-img">
								<a href="javascript:void(0);"><img src="<?php echo $blog->post_image;?>" alt="" /></a>
							</div>
							<div class="blog-content">
								<h4><a href="blog-details.html"><?php echo $blog->post_name;?></a></h4>
								<p><?php echo $blog->post_content;?></p>
								<a href="javascript:void(0);">Read more</a>
							</div>
						</div>
					</div>
				<?php endforeach;?>
					<!-- <div class="col-lg-4 col-md-4 col-sm-6 custom-width mb-20">
						<div class="blog-wrapper">
							<div class="blog-img">
								<a href="javascript:void(0);"><img src="<?php echo base_url('assets/user');?>/img/blog/2.jpg" alt="" /></a>
							</div>
							<div class="blog-content">
								<h4><a href="blog-details.html">pellentesque lacus </a></h4>
								<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature…</p>
								<a href="javascript:void(0);">Read more</a>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-4 hidden-sm custom-width mb-20">
						<div class="blog-wrapper">
							<div class="blog-img">
								<a href="javascript:void(0);"><img src="<?php echo base_url('assets/user');?>/img/blog/3.jpg" alt="" /></a>
							</div>
							<div class="blog-content">
								<h4><a href="javascript:void(0);">Cras ornare arcu avamus</a></h4>
								<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature…</p>
								<a href="javascript:void(0);">Read more</a>
							</div>
						</div>
					</div> -->
				</div>
			</div>
		</div>
        <!--  blog-area end 