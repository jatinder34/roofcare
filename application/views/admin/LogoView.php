 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper" id="Productform">
    <!-- Content Header (Page header) -->
    
    <section class="content-header">
      <h1>
        Settings
      </h1>
      <ol class="breadcrumb">
          <form action="<?php echo base_url();?>Admin/LogoController/logoupload" enctype="multipart/form-data" method="post">
        <li><div class="input-group cate">
              <input type="submit" name="submit" value="Save">
            </div></li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-md-12">
           <div class="box box-info">
            <div class="box-body">
              <div class="input-group cate_input">
                <div class="form-group">
                  <div class="btn btn-default btn-file">
                    <i class="fa fa-paperclip"></i> Attachment
                    <input type="file" name="logo">
                  </div>
                </div>
              </div>
              <?php
              if ($logoadminpage) {
              
                foreach ($logoadminpage as $logo):
                 // print_r($logo);
              ?>
              <img class="img-responsive" src="<?php echo $logo->logo_image;?>" alt="Photo">
            <?php endforeach;}?>
            </form>
          </div>
      </div>
    </div>
  </div>
    <!-- /.box -->
  </section>
  <!-- right col -->
  </div>
      <!-- /.row (main row) -->

<!-- jQuery 3 -->
<style type="text/css">
  .product tr th{
    background-color:#fff;
  }
  .product tr td{
    background-color:#ecf0f5;
  }
.box-header.with-border {
    background-color: #3c8dbc;
}
.box-title{
  color: #fff;
  font-weight: bold;
}
.cate input{
  background-color: #3c8dbc;
  border: none;
  padding: 4px 16px;
  border-radius: 4px;
  color: #fff;
  font-weight: bold;
}
.cate_input span{
  color: #9e9f9f;
  font-size: 11px;
  margin-left: 10px;
}
</style>