 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper" id="Productform">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Add New
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Add New</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-md-4">
           <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Add New</h3>
            </div>
        <div class="box-body">
          <form action="<?php echo base_url();?>Admin/ProductsController/addnewcat" method="post">
            <div class="input-group cate_input">
              <input type="text" class="form-control" placeholder="Category Name" name="category">
              <span>You can add custome category here</span>
            </div>
            <br>
            <div class="input-group cate">
              <input type="submit" name="submit" value="Save">
            </div>
          </form>
        </div>
      </div>
    </div>
    <div class="col-md-8">
      <div class="box box-info">
        <div class="box-header with-border">
          <h3 class="box-title">Categories</h3>
        </div>
          <div class="box-body table-responsive no-padding">
              <table class="table table-hover product">
                <tr>
                  <th><input type="checkbox"></th>
                  <th>ID</th>
                  <th>Categories</th>
                </tr>
                <?php foreach($allcate as $ac):?>
                <tr>

                  <td><input type="checkbox"></td>
                  <td><?php echo $ac->id;?></td>
                  <td><?php echo $ac->cat_name?></td>
                </tr>
              <?php endforeach;?>
                <tr>
                  <th><input type="checkbox"></th>
                  <th>ID</th>
                  <th>Categories</th>
                </tr>
              </table>
            </div>
          <hr>
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