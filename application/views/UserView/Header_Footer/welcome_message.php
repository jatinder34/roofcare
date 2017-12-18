<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html>
<head>
    <title>Menus</title>
    <link rel="stylesheet" href="<?php echo base_url('assets/Admin');?>/bower_components/bootstrap/dist/css/bootstrap.min.css">
    <script src="<?php echo base_url('assets/Admin');?>/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <style type="text/css">
         
.dropdown-menu > li.kopie > a {
    padding-left:5px;
}
 
.dropdown-submenu {
    position:relative;
}
.dropdown-submenu>.dropdown-menu {
   top:0;left:100%;
   margin-top:-6px;margin-left:-1px;
   -webkit-border-radius:0 6px 6px 6px;-moz-border-radius:0 6px 6px 6px;border-radius:0 6px 6px 6px;
 }
  
.dropdown-submenu > a:after {
  border-color: transparent transparent transparent #333;
  border-style: solid;
  border-width: 5px 0 5px 5px;
  content: " ";
  display: block;
  float: right;  
  height: 0;     
  margin-right: -10px;
  margin-top: 5px;
  width: 0;
}
 
.dropdown-submenu:hover>a:after {
    border-left-color:#555;
 }

.dropdown-menu > li > a:hover, .dropdown-menu > .active > a:hover {
  text-decoration: none;
}  
 .navbar-nav {
    float: right;
    margin-right: 10px;
}
@media (max-width: 767px) {

  .navbar-nav  {
     display: inline;
  }
  .navbar-default .navbar-brand {
    display: inline;
  }
  .navbar-default .navbar-toggle .icon-bar {
    background-color: #fff;
  }
  .navbar-default .navbar-nav .dropdown-menu > li > a {
    color: red;
    background-color: #ccc;
    border-radius: 4px;
    margin-top: 2px;   
  }
   .navbar-default .navbar-nav .open .dropdown-menu > li > a {
     color: #333;
   }
   .navbar-default .navbar-nav .open .dropdown-menu > li > a:hover,
   .navbar-default .navbar-nav .open .dropdown-menu > li > a:focus {
     background-color: #ccc;
   }

   .navbar-nav .open .dropdown-menu {
     border-bottom: 1px solid white; 
     border-radius: 0;
   }
  .dropdown-menu {
      padding-left: 10px;
  }
  .dropdown-menu .dropdown-menu {
      padding-left: 20px;
   }
   .dropdown-menu .dropdown-menu .dropdown-menu {
      padding-left: 30px;
   }
   li.dropdown.open {
    border: 0px solid red;
   }

}
 
@media (min-width: 768px) {
  ul.nav li:hover > ul.dropdown-menu {
    display: block;
  }
  #navbar {
    text-align: center;
  }
}  
.logo{
  width: 100px;
  height: 50px;
}
.navbar-brand{
  padding: 0px 15px !important;
}
    </style>
</head>
<body>
    <div id="navbar">    
  <nav class="navbar navbar-default navbar-static-top" role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <?php
                foreach($logoimg as $logo ):
                  //print_r($logo);
                ?>
              <a class="navbar-brand" href="<?php echo base_url();?>"><img class="img img-responsive logo" src="<?php echo $logo->logo_image;?>"></a>
            <?php endforeach;
          ?>
            </div>
            
            <div class="collapse navbar-collapse" id="navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <?php
                        foreach ($menus as $menu):
                          //print_r($menu);
                    ?>                  
                    <li class="dropdown">
                      <a href="<?php echo base_url().'Welcome/menudata/'.$menu->id;?>" class="dropdown-toggle" data-toggle="dropdown">
                        <?php echo $menu->name;?></a> 
                       <?php 
                                if (isset($menu->children)) {
                                    $submenus = $menu->children;
                                    ?>

                        <ul class="dropdown-menu">
                            <?php
                                    foreach ($submenus as $sub):
                                    // echo "<pre>";
                                    // print_r($sub);
                            ?>
                            <li><a href="<?php echo base_url().'Welcome/submenudata/'.$sub->id;?>"><?php echo $sub->name;?></a></li> 
                            <?php endforeach;?>
                        </ul>
                        <?php 
                            } ?> 
                    </li>
                <?php endforeach;?>

                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
</div>


</body>
</html>