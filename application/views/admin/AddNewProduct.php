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
          <div class="col-md-9">
       	   <div class="box box-info">
              <div class="box-header with-border">
                <h3 class="box-title">Input Addon</h3>
              </div>
      <div class="box-body">
        <form action="<?php echo base_url();?>Admin/ProductsController/proimage" method="post">
                            <div class="input-group">
                              <span class="input-group-addon"></span>
                              <input type="text" class="form-control" placeholder="Product Name" name="productname">
                            </div>
                            <br>
                            <div class="input-group">
                              <span class="input-group-addon"></span>
                              <input type="text" class="form-control" name="productprice" placeholder="Sale Price">
                            </div>
                            <br>
                            <div class="input-group col-md-12">
                              <span class="input-group-addon"></span>
                              <input type="text" class="form-control" name="regularprice" placeholder="Regular Price">
                            </div>
                            <br>

                            <div class="input-group">
                              <span class="input-group-addon"></span>
                              <input type="text" class="form-control" placeholder="Product Stock" name="productstock">
                            </div>
                            <br>
                            <div class="form-group">
                              <div class="btn btn-default btn-file">
                                <i class="fa fa-paperclip"></i> Attachment
                                <input type="file" name="productimage" required="required">
                              </div>
                              <p class="help-block">Max. 2MB</p>
                            </div>
                            <br>
                            <div class="input-group">
                            <input type="submit" name="submit" value="Submit" class="productsubmitbtn">
                            </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-3">
                      <div class="box box-info">
                          <div class="box-header with-border">
                            <h3 class="box-title">Categories</h3>
                          </div>
                          <div class="box-body">
                            <div class="form-group">
                            <?php foreach($allcate as $ac):?>
                              <label>
                                <input type="checkbox" value="<?php echo $ac->id; ?>" class="flat-red" name="cate[]">
                                <?php echo $ac->cat_name?>
                              </label>
                              <br>
                            <?php endforeach;?>
                            </div>
                          </div>
        </form>
        <hr>
        <div class="box-body">
          <form action="<?php echo base_url();?>Admin/ProductsController/addnewcate" method="post">
              <p class="addcategory"> 
                Add New Category
              </p>
            <div class="cat_ses">
              <p>
                <input type="text" class="form-control" placeholder="Add New Category" name="category">
              </p>
              <p>
                <input type="submit" name="submit" value="Add" class="category_button">
              </p>  
              </div>
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


<style type="text/css">
  
  input.form-control {
    width: 100%;
    
}
p.addcategory {
    clear: both;
    color: #3c8dbc;
    cursor: pointer;
}
.category_button{
    background: #00c0ef;
    border: 0;
    padding: 7px 50px;
    color: #fff;
    font-weight: bold;
    box-shadow: 1px 1px 5px #9f9e9e;
}
.productsubmitbtn{
    background: #00c0ef;
    border: 0;
    padding: 7px 50px;
    color: #fff;
    font-weight: bold;
    box-shadow: 1px 1px 5px #9f9e9e;
}
</style>