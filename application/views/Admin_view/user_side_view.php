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
                      User Registation Form
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

                  <form role="form" method="post" action="<?php echo base_url('index.php/Admin_controller/Admin/manage_user_side/add'); ?>">

                      <div class="form-group">
                          <label>User Full Name</label>
                          <input type="text" id="txt_user_name" name="txt_user_name" class="form-control">
                          <p class="help-block">Example Jay shah</p>
                      </div>

                      <div class="form-group">
                          <label>User Aadhar Number</label>
                          <input type="text" id="txt_user_aadhar_number" name="txt_user_aadhar_number" class="form-control">
                     </div>

                     <div class="form-group">
                         <label>User Driving License Number</label>
                         <input type="text" id="txt_user_driving_license_number" name="txt_user_driving_license_number" class="form-control">
                    </div>

                    <div class="form-group">
                        <label>User Phone Number</label>
                        <input type="text" id="txt_user_phone_number" name="txt_user_phone_number" class="form-control">
                   </div>


                    <div class="form-group">
                        <label>User Password</label>
                        <input type="password" id="txt_user_password" name="txt_user_password" class="form-control">
                   </div>



                      <button type="submit" name="btn_submit" class="btn btn-default">Submit Button</button>
                      <button type="reset" class="btn btn-default">Reset Button</button>

                  </form>

              </div>

          </div>
          <!-- /.row -->

            


      </div>
      <!-- /.container-fluid -->

  </div>
