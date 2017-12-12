   <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper" id="Productform">
   <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
          All Products
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
            <th>Stock</th>
            <th>Price</th>
            <th>Categories</th>
            <th><i class="fa fa-star text-black"></i></th>
            <th>Date</th>
          </tr>
            <?php
			 		      foreach ($allproducts as $allpro):
			 		      //echo '<pre>';
                //print_r($allpro);
                //echo '</pre>';
			     	?>
          <tr>
            <td><input type="checkbox"></td>
            <td><img src="<?php echo base_url('assets/Admin');?>/img/user3-128x128.jpg" class="img-circle" alt="User Image">  </td>
            <td><?php echo $allpro->product_name;?></td>
            <?php if($allpro->product_stock){ ?>
            <td><span class="label label-warning"><?php echo $allpro->product_stock;?> In stock</span></td>
            <?php }else{ ?> 
            <td></td>
             <?php } ?>
			  		<td><span class="label label-danger">
                  $&nbsp;<del><?php echo $allpro->regular_price;?></del>
                </span>
                <span class="label label-success">$&nbsp;<?php echo $allpro->product_price;?></span>
            </td>

			  		<td>
            
            <?php $assined = json_decode($allpro->product_categories); 

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
            <td><i class="fa fa-star text-yellow"></i><i class="fa fa-star text-yellow"></i><i class="fa fa-star text-yellow"></i></td>
            <td>18-Aug-2017</td>
          </tr>
            <?php endforeach;?>
            <tr>
            <th><input type="checkbox"></th>
            <th><i class="fa fa-image text-black"></i></th>
            <th>Name</th>
            <th>Stock</th>
            <th>Price</th>
            <th>Categories</th>
            <th><i class="fa fa-star text-black"></i></th>
            <th>Date</th>
          </tr>
        </table>
        <div class="col-sm-12">
              <div class="dataTables_paginate paging_simple_numbers" id="example2_paginate">
                <ul class="pagination">
                  <?php foreach($links as $link):?>
                  <li class="paginate_button" id="example2_previous">
                    <?php echo $link;?>
                  </li>
                <?php endforeach;?>
                </ul>
              </div>
             </div>
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