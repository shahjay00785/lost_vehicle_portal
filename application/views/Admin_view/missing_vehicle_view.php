<div id="wrapper">

  <!-- Navigation -->
  <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <!-- Brand and toggle get grouped for better mobile display -->
    <?php include_once('admin_header.php'); ?>
    <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
    <?php include_once('admin_menu.php'); ?>
    <!-- /.navbar-collapse -->
  </nav>

  <div id="page-wrapper">

      <div class="container-fluid">

          <!-- Page Heading -->
          <div class="row">
              <div class="col-lg-12">
                  <h1 class="page-header">
                      Missing Vehicle Registration
                  </h1>
                  <ol class="breadcrumb">
                      <li>
                          <i class="fa fa-dashboard"></i>  <a href="<?php echo base_url('index.php/Admin_controller/Admin/manage_dashboard'); ?>">Dashboard</a>
                      </li>
                      <li class="active">
                          <i class="fa fa-edit"></i> Forms
                      </li>
                  </ol>
              </div>
          </div>
          <!-- /.row -->

          <div class="row">
              <div class="col-lg-6">

                  <form role="form" method="post" action="<?php echo base_url('index.php/Admin_controller/Admin/manage_missing_vehicle/add'); ?>">

                       <div class="form-group">
                          <label>Vehicle Isssue Number</label>
                          <input type="text" id="txt_vehicle_issue_number" name="txt_vehicle_issue_number" class="form-control">
                       </div>

                       <div class="form-group">
                          <label>Vehicle Engine Number</label>
                          <input type="text" id="txt_vehicle_engine_number" name="txt_vehicle_engine_number" class="form-control">
                       </div>

                       <div class="form-group">
                          <label>User Driving License Number</label>
                          <input type="text" id="txt_user_driving_license_number" name="txt_user_driving_license_number" class="form-control">
                       </div>

                       <div class="form-group">
                          <label>User Aadhar Number</label>
                          <input type="text" id="txt_user_aadhar_number" name="txt_user_aadhar_number" class="form-control">
                       </div>

                       <div class="form-group">
                                <label>Vehicle Lost State</label>
                                <select class="form-group">
                                    <option>Gujarat</option>
                                </select>
                       </div>

                       <div class="form-group">
                                <label>Vehicle Lost City</label>
                                <select class="form-group">
                                    <option>Gandinagr</option>
                                </select>
                            </div>

                       <div class="form-group">
                          <label>Vehicle lost date</label>
                          <input type="text" id="txt_vehicle_lost_date" name="txt_vehicle_lost_date" class="form-control">
                       </div>

                       <div class="form-group">
                          <label>Vehicle lost time</label>
                          <input type="text" id="txt_vehicle_lost_time" name="txt_vehicle_lost_time" class="form-control">
                       </div>









                      <button type="submit" name="btn_submit" class="btn btn-default">Submit Button</button>
                      <button type="reset" class="btn btn-default">Reset Button</button>

                  </form>

              </div>



          </div>
          <!-- /.row -->

          <div class="col-lg-12">
      <h2>User Views <a href="<?php echo base_url('index.php/Admin_controller/admin/manage_user_side'); ?>"> <img class="img-circle" src="<?php echo base_url('img/icon/add.png'); ?>" width="50px" height="50px">  </a></h2>
      <div class="table-responsive">
        <table class="table table-bordered table-hover table-striped">
          <thead>
            <tr>
              <th>#</th>
              <th>Name</th>
          <!--    <th>Category Image</th> -->
              <th>Aadhar Number</th>
              <th>Driving License</th>
              <th>phone</th>
              <th>Delete</th>
              <th>Update</th>
            </tr>
          </thead>

     <?php
     $i=0;
     foreach ($user_view->result() as $row_user)
     {


       $i++;
       if($i%2==0){
         ?>
         <tr class="active">
           <?php
         }  else { ?>
           <tr class="success">
             <?php
           }
           ?>


           <td><?php echo $row_user->user_id; ?></td>
           <td><a href='<?php echo base_url()."index.php/Admin_controller/Admin/manage_user_side/".$row_user->user_id; ?>'><?php echo $row_user->user_name; ?></td>
       <!--    <td><img src="<?php //echo base_url('img/category_img/').$row->cat_img; ?>" width='100'> </td> -->
           <td><?php echo $row_user->user_aadhar_number; ?></td>
           <td><?php echo $row_user->user_driving_license_number; ?></td>
           <td><?php echo $row_user->user_phone_number; ?></td>
           <td><a href="<?php echo base_url('index.php/Admin_controller/Admin/manage_user_side/delete/').$row_user->user_id; ?>"> <img class="img-circle" src="<?php echo base_url('img/icon/delete.png'); ?>" width="50px" height="50px"> </a> </td>
           <td><a href="<?php echo base_url('index.php/Admin_controller/Admin/manage_category/edit/').$row_user->user_id; ?>"> <img class="img-circle" src="<?php echo base_url('img/icon/update.png'); ?>" width="50px" height="50px"></a> </td>
         </tr>


         <?php
       }
       ?>




      </div>
      <!-- /.container-fluid -->

  </div>
