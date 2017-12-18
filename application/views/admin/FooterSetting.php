 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper" id="Productform">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Footer Setting
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Footer Setting</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
     	  <div class="row">
          <div class="col-md-12">
       	   <div class="box box-info">
            <div class="box-body">
              <form action="<?php echo base_url();?>Admin/AdminController/footer_update" method="post" enctype="multipart/form-data">
                <?php foreach($footeradd as $address):
                  // print_r($address);
                ?>
                <input type="hidden" name="con_id" value="<?php echo $address->id;?>">
                <div class="input-group">
                    <span class="input-group-addon"></span>
                    <textarea class="form-control" placeholder="Footer Content" name="foo_con"><?php echo $address->foo_con;?></textarea> </div>
                  <br>
                  <div class="input-group">
                    <span class="input-group-addon"></span>
                    <input type="text" class="form-control" placeholder="Address" name="addr" value="<?php echo $address->addr;?>">
                  </div>
                   <br>
                   <div class="input-group">
                    <span class="input-group-addon"></span>
                    <input type="text" class="form-control" placeholder="Mobile" name="mobile" value="<?php echo $address->mobile;?>">
                  </div>
                   <br>
                   <div class="input-group">
                    <span class="input-group-addon"></span>
                    <input type="text" class="form-control" placeholder="Email" name="con_email" value="<?php echo $address->email_foo;?>">
                  </div>
                  <br>
                  <div class="input-group">
                  <input type="submit" name="submit" value="Submit" class="productsubmitbtn">
                  </div>
                <?php endforeach;?>
                </div>
              </div>
            </div>
                            
                         
        </form>
        <hr>
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