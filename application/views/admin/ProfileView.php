<?php
          if ($this->session->userdata('login')) {
            $data = $this->session->userdata('login');
            print_r($data);
          }
          else
          {
            redirect('admin');
          }
        ?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        User Profile
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">User profile</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
    <div class="row">
      <div class="col-md-12">
          <!-- Widget: user widget style 1 -->
          <div class="box box-widget widget-user">
            <!-- Add the bg color to the header using any of the bg-* classes -->
            <div class="widget-user-header bg-black" style="background: url('<?php echo base_url('assets/Admin');?>/img/photo1.png') center center;">
              <h3 class="widget-user-username"><?php echo $data['user_name'];?></h3>
              <h5 class="widget-user-desc"><?php echo $data['role'];?></h5>
            </div>
            <div class="widget-user-image">
              <img class="img-circle" src="<?php echo $data['profile_picture']?>" alt="User Avatar">
            </div>
            <div class="box-footer">
              <div class="row">
                <div class="col-sm-4 border-right">
                  <div class="description-block">
                    <h5 class="description-header">3,200</h5>
                    <span class="description-text">SALES</span>
                  </div>
                  <!-- /.description-block -->
                </div>
                <!-- /.col -->
                <div class="col-sm-4 border-right">
                  <div class="description-block">
                    <h5 class="description-header">13,000</h5>
                    <span class="description-text">FOLLOWERS</span>
                  </div>
                  <!-- /.description-block -->
                </div>
                <!-- /.col -->
                <div class="col-sm-4">
                  <div class="description-block">
                    <h5 class="description-header">35</h5>
                    <span class="description-text">PRODUCTS</span>
                  </div>
                  <!-- /.description-block -->
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->
            </div>
          </div>
          <!-- /.widget-user -->
        </div>
    </div>
          <!-- About Me Box -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">About Me</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <strong><i class="fa fa-envelope margin-r-5"></i> Email</strong>

                <p class="text-muted">
                    &nbsp;&nbsp;<?php echo $data['user'];?>
                </p>

                <hr>
              <strong><i class="fa fa-mobile margin-r-5"></i> Mobile Number</strong>

              <p class="text-muted">
                &nbsp;&nbsp;<?php echo $data['mobile_no'];?>
              </p>

              <hr>
              <strong><i class="fa fa-book margin-r-5"></i> Education</strong>

              <p class="text-muted">
                &nbsp;&nbsp;<?php echo $data['course'];?> at <?php echo $data['college'];?>
              </p>

              <hr>

              <strong><i class="fa fa-map-marker margin-r-5"></i> Location</strong>

              <p class="text-muted">&nbsp;&nbsp;<?php echo $data['state'];?>, <?php echo $data['user_address'];?></p>

              <hr>

              <strong><i class="fa fa-pencil margin-r-5"></i> Skills</strong>

              <p>
                &nbsp;&nbsp;<?php echo $data['skills'];?>
              </p>

              <hr>

              <strong><i class="fa fa-file-text-o margin-r-5"></i> Notes</strong>

              <p>&nbsp;&nbsp;Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam fermentum enim neque.</p>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <style type="text/css">
    
    .widget-user .widget-user-image>img{
      height: 98px !important;
    }
  </style>