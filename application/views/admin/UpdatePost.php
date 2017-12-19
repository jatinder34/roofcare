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

        <?php
          foreach ($updata as $data) {
            //print_r($data);
          }
        ?>
        <form action="<?php echo base_url();?>Admin/PostController/image_update" method="post" enctype="multipart/form-data">
          <input type="hidden" name="uppostid" value="<?php echo $data->id;?>">
                            <div class="input-group">
                              <span class="input-group-addon"></span>
                              <input type="text" class="form-control" placeholder="Product Name" name="uppostname" value="<?php echo $data->post_name;?>">
                            </div>
                            <br>
                              <input type="hidden" class="form-control" value="<?php echo date('d M Y');?>" name="uppostdate">
                           
                            <br>
                            <div class="input-group">
                              <span class="input-group-addon"></span>
                              <textarea class="form-control" placeholder="Post Content" name="uppostcontent"><?php echo $data->post_content;?></textarea>
                            </div>
                            <br>
                            <div class="form-group">
                              <div class="btn btn-default btn-file">
                                <i class="fa fa-paperclip"></i> Attachment
                                <input type="file" name="uppostimage" >
                                <input type="hidden" name="upposturl" value="<?php echo $data->post_image;?>">
                              </div>
                              <p class="help-block">Max. 2MB</p>
                            </div>
                            <br>
                            <div class="input-group">
                            <input type="submit" name="submit" value="Submit" class="productsubmitbtn">
                            </div>

                            <div class="box-body">
                              
                              <div class="cus_ses">
                                <p>
                                <div class="col-md-3"><label>Custom Field 1</label></div>
                                  <div class="col-md-9">
                                  <input type="text" class="form-control" placeholder="Add Custom Fields" name="upcustom_field" value="<?php echo $data->post_custom;?>">
                                </div>
                                </p> 
                              </div>  
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
                                <input type="checkbox" value="<?php echo $ac->id; ?>" class="flat-red" name="upcate[]">
                                <?php echo $ac->cat_name?>
                              </label>
                              <br>
                            <?php endforeach;?>
                            </div>
                          </div>
        </form>
        <hr>
        <div class="box-body">
          <form action="<?php echo base_url();?>Admin/PostController/addnewcate" method="post">
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