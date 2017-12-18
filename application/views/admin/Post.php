   <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper" id="Productform">
   <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
          All Post
          <small>Control panel</small>
        </h1>
        <ol class="breadcrumb">
          <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
          <li class="active">All Products</li>
        </ol>
      </section>
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="box-body table-responsive no-padding">
        <table class="table table-hover product">
          <tr>
            <th><input type="checkbox"></th>
            <th><i class="fa fa-image text-black"></i></th>
            <th>Name</th>
            <th>Slug</th>
            <th>Categories</th>
          </tr>
            <?php
			 		      foreach ($allpost as $allpro):
			 		      // echo '<pre>';
            //     print_r($allpro);
			     	?>
          <tr>
            <td><input type="checkbox"></td>
            <td><img src="<?php echo $allpro->post_image;?>" class="img-circle" alt="User Image">  </td>
            <td><?php echo $allpro->post_name;?></td> 
            <td></td>
            <td>
            
            <?php $assined = json_decode($allpro->post_categories); 

            foreach ($allcate as $alll) {
               
                if(isset($assined))
                {
                  if(in_array($alll['id'], $assined))
                  {
                    echo $alll['cat_name']. ',';
                  }
                }
            }
           
            
            ?></td>
          </tr>
            <?php endforeach;?>
            <tr>
            <th><input type="checkbox"></th>
            <th><i class="fa fa-image text-black"></i></th>
            <th>Name</th>
            <th>Slug</th>
            <th>Categories</th>
          </tr>
        </table>
     <!--    <div class="col-sm-12">
              <div class="dataTables_paginate paging_simple_numbers" id="example2_paginate">
                <ul class="pagination">
                  <?php //foreach($links as $link):?>
                  <li class="paginate_button" id="example2_previous">
                    <?php// echo $link;?>
                  </li>
                <?php //;?>
                </ul>
              </div>
             </div> -->
            </div>
       </section>
  <!-- right col -->
</div>
<!-- /.row (main row) -->
<!-- jQuery 3 -->
<style type="text/css">
  .product tr th{
    background-color:#fff;
  }
  img.img-circle {
    width: 40px;
}
a.active{
  color: #fff !important;
  background-color: #337ab7 !important;
  border-color: #337ab7 !important;
  border-radius: 4px;
}
</style>