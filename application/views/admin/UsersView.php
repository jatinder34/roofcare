
   <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper" id="Productform">
   <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
          All Users
          <small>Control panel</small>
        </h1>
        <ol class="breadcrumb">
          <li><a href="<?php echo base_url('admin');?>"><i class="fa fa-dashboard"></i> Home</a></li>
          <li class="active">All Users</li>
        </ol>
      </section>
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="box-body table-responsive no-padding">
        <table class="table table-hover product">
          <tr>
            <th><input type="checkbox"></th>
            <th><i class="fa fa-image text-black"></i></th>
            <th>NAME</th>
            <th>EMAIL</th>
            <th>LOCATION</th>
            <th>MOBILE</th>
            <th>EDIT</th>
          </tr>
             <?php 
                foreach ($users_data_array as $users) :
                    // echo "<pre>";
                    // print_r($users);
              ?>
          <tr>
            <td><input type="checkbox"></td>
			  		<td><img src="<?php echo $users['profile_pic'];?>" class="img-circle user"></td>
            <td><?php echo $users['name'];?></td>
            <td><?php echo $users['username'];?></td>
            <td><?php echo $users['address'];?></td>
            <td><?php echo $users['mobile'];?></td>
            <td>
              <a href="<?php echo base_url().'Admin/AdminController/update_userdata/'.$users['id'];?>"><span class="fa-stack">
                  <i class="fa fa-square fa-stack-2x"></i>
                  <i class="fa fa-pencil fa-stack-1x fa-inverse"></i>
                </span>
              </a>
              <a href="<?php echo base_url().'Admin/AdminController/delete_userdata/'.$users['id'];?>" class="table-link danger">
                <span class="fa-stack">
                  <i class="fa fa-square fa-stack-2x"></i>
                  <i class="fa fa-trash-o fa-stack-1x fa-inverse"></i>
                </span>
              </a>
            </td>
          </tr>
        <?php endforeach;?>
          <tr>
            <tr>
              <th><input type="checkbox"></th>
              <th><i class="fa fa-image text-black"></i></th>
              <th>NAME</th>
              <th>EMAIL</th>
              <th>LOCATION</th>
              <th>MOBILE</th>
              
              <th>EDIT</th>
            </tr>
          </tr>
        </table>
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
  img.img-circle.user {
    width: 40px;
    border-radius:5% !important;
}
.table a.table-link.danger{
  color: #fe635f;
}
</style>