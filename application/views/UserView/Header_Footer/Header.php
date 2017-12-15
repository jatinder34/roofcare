<!doctype html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Shield - Roofing Service HTML Template</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Favicon -->
		<link rel="shortcut icon" type="image/x-icon" href="">
		<!-- all css here -->
        <link rel="stylesheet" href="<?php echo base_url('assets/user');?>/css/bootstrap.min.css">
		<link rel="stylesheet" href="<?php echo base_url('assets/user');?>/css/font-awesome.min.css">
		<link rel="stylesheet" href="<?php echo base_url('assets/user');?>/css/owl.carousel.css">
	    <link rel="stylesheet" href="<?php echo base_url('assets/user');?>/css/style.css">
        <link rel="stylesheet" href="<?php echo base_url('assets/user');?>/css/responsive.css">
    </head>
    <body>
      
		<!-- header-area start-->
		<header>
			<div class="header-bottom-area">
				<div class="container">
					<div class="row">
						<nav class="navbar ">
							<div class="container-fluid">
								<div class="navbar-header">
									<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>                        
									</button>
									<a class="navbar-brand text-white" href="javascript:(0);">WebSiteName</a>
								</div>
								<div class="collapse navbar-collapse" id="myNavbar">
									<ul class="nav text-white navbar-nav navbar-right">
										<?php
					                        foreach ($menus as $menu):
					                          
					                    ?>
										<li class="active">
											<a class="text-uppercase" href="<?php echo $menu->slug;?>"><?php echo $menu->name;?></a>
										</li>
									<?php endforeach;?>
										<!-- <li><a class="text-uppercase" href="javascript:void(0);">Homeowners</a></li>
										<li><a class="text-uppercase" href="javascript:void(0);">Property Managers</a></li>
										<li><a class="text-uppercase" href="javascript:void(0);">Contractors</a></li>
										<li><a class="text-uppercase" href="javascript:void(0);">Blog</a></li> -->
									</ul>
								</div>
							</div>
						</nav>
					</div>
                </div>					
            </div>
        </header>
		<!-- header-area end-->	