<!-- footer-area start -->
		<footer class="footer-bg">
			<div class="footer-top pt-80 pb-60">
				<div class="container">
					<div class="row">
						<div class="col-lg-3 col-md-3  col-sm-6 mb-20">
							<div class="footer-widget">
								<?php foreach($footeradd as $addre):
									//print_r($addre);
								?>
								<div class="footer-logo">
								   <img src="" alt="" />
								   LOGO
								</div>
								<p><?php echo $addre->foo_con;?></p>
								<ul class="widget-contact">
									<li>
										<i class="fa fa-map-marker"></i>
										<span><?php echo $addre->addr;?></span>
									</li>
									<li>
										<i class="fa fa-phone"></i>
										<span><?php echo $addre->mobile;?></span>
									</li>
									<li>
										<i class="fa fa-globe"></i>
										<span><?php echo $addre->email_foo;?></span>
									</li>
								</ul>
							<?php endforeach;?>
						    </div>
						</div>
						<div class="col-lg-3 col-md-3 col-sm-6 mb-20">
							<div class="footer-widget">
								<h3 class="widget-title">Custom Feature</h3>
								<ul class="footer-menu">
									<?php
					                        foreach ($menus as $menu):
					                          
					                    ?>
									<li><a href="<?php echo $menu->slug;?>"><?php echo $menu->name;?></a></li>
								<?php endforeach;?><!-- 
									<li><a href="javascript:void(0);">service</a></li>
									<li><a href="javascript:void(0);">about us</a></li>
									<li><a href="javascript:void(0);">portfolio</a></li>
									<li><a href="javascript:void(0);">blog</a></li>
									<li><a href="javascript:void(0);">contact us</a></li> -->
								</ul>
							</div>
						</div>	
						<div class="col-lg-3 col-md-3 col-sm-6 mb-20">
							<div class="footer-widget">
								<h3 class="widget-title">latest post</h3>
								<div class="blog-post">
									<ul>
										<?php 
											foreach ($allpost as $blog) :
										?>
										<li>
											<div class="blog-post-img">
												<a href="javascript:void(0);"><img src="<?php echo $blog->post_image;?>" alt="" /></a>
											</div>
											<div class="blog-text">
												<h4><a href="javascript:void(0);"><?php echo $blog->post_name;?></a></h4>
												<span><i class="fa fa-calendar"></i>02 Nov 2016</span>
											</div>
										</li>
									<?php endforeach;?>
									<!-- 	<li>
											<div class="blog-post-img">
												<a href="javascript:void(0);"><img src="<?php echo base_url('assets/user');?>/img/footer/2.jpg" alt="" /></a>
											</div>
											<div class="blog-text">
												<h4><a href="javascript:void(0);">Pellentesque lacus</a></h4>
												<span><i class="fa fa-calendar"></i>02 Nov 2016</span>
											</div>
										</li>
										<li>
											<div class="blog-post-img">
												<a href="javascript:void(0);"><img src="<?php echo base_url('assets/user');?>/img/footer/3.jpg" alt="" /></a>
											</div>
											<div class="blog-text">
												<h4><a href="javascript:void(0);">Cras ornare arcu</a></h4>
												<span><i class="fa fa-calendar"></i>02 Nov 2016</span>
											</div>
										</li> -->
									</ul>
								</div>
							</div>
						</div>		
						<div class="col-lg-3 col-md-3 col-sm-6 mb-20">
							<div class="footer-widget">
								<h3 class="widget-title">CONTACT</h3>
								<p>Lorem ipsum dolor sit amet, consetur acing elit, sed do eiusmod tempor</p>
								<div class="footer-form">
									<form action="#">
									  <input type="text" placeholder="Type your E-mail address..." />
									  <textarea name="message" placeholder="Write here..."></textarea>
									  <button>send</button>
									</form>
								</div>
							</div>
						</div>	
					</div>
				</div>
			</div>
			<div class="copyright-area">
				<div class="container">
					<div class="copyright-text text-center">
						<p>Copyright &copy; 2017. All rights reserved.</p>
					</div>
				</div>
			</div>
		</footer>
		<!-- footer-area end -->
		<!-- all js here -->
		 <script src="<?php echo base_url('assets/user');?>/js/jquery.min.js"></script>
    	<script src="<?php echo base_url('assets/user');?>/js/bootstrap.min.js"></script>
		<script>
			$('#mainslids .item:nth-child(1)').addClass('active');
			$(window).scroll(function() {    
				var scroll = $(window).scrollTop();    
				if (scroll >= 50) {
					$("body").addClass("darkHeader");
				}
				else{
					$("body").removeClass("darkHeader");
				}
			});
				
		</script>
	</body>
</html>

