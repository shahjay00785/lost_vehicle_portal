


<div id="wrapper">

  <!-- Navigation -->
  <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <!-- Brand and toggle get grouped for better mobile display -->
    <?php  include_once('admin_header.php'); ?>
    <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
    <?php include_once('admin_menu.php'); ?>
    <!-- /.navbar-collapse -->
  </nav>
  <div id="page-wrapper">

    <div class="container-fluid">

      <div class="col-lg-12">
        <h1 class="page-header">
          Fir View

        </h1>
        <ol class="breadcrumb">
          <li>
            <i class="fa fa-dashboard"></i>  <a href="">Dashboard</a>
           <h2 align="center" style="color:green;"> <?php echo $this->session->flashdata('message'); ?> </h2>





          </li>

        </ol>
      </div>


        <div class="col-xs-12">
        <form class="form-inline" method="post" action="<?php echo base_url('index.php/Admin_controller/Admin/fir_data/data'); ?>">

          <div class="form-group">


						<div id="mydiv">

						</div>

          </div>
          <div class="form-group">


						<div id="mydiv">

						</div>

          </div>


        </form>
      </div>





			<div class="col-lg-12">



					</h2>
		      <div class="table-responsive">
		        <table class="table table-bordered table-hover table-striped">
		          <thead>
		            <tr>
		              <th>#</th>
		              <th> Fir Number</th>
									<th> Fir Date  </th>
									<th>User Name  </th>
						      <th> Vehicle Issue Number </th>



		            </tr>
		          </thead>


		     <?php

	/*			 $this->db->join('tbl_user_side','tbl_user_side.user_id=tbl_book_master.author_id');
         $this->db->join('tbl_publisher','tbl_publisher.publisher_id=tbl_book_master.publisher_id');
         $this->db->join('tbl_category','tbl_category.cat_id=tbl_book_master.cat_id');
   */



				 $fir_view=$this->db->query("SELECT
DISTINCT fir.fir_id,fir.fir_number,fir.fir_date,rto.vehicle_issue_number,user.user_aadhar_number,rto.vehicle_issue_number,user.user_name from
tbl_fir fir, tbl_rto_database rto,tbl_user_side user
where rto.rto_id=fir.fir_id AND  user.user_aadhar_number=rto.user_aadhar_number;");
		     $i=0;

		     foreach ($fir_view->result_array()  as $row_fir)
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


		           <td><?php echo $row_fir['fir_id']; ?></td>
		           <td><?php echo $row_fir['fir_number']; ?></td>
		           <td><?php echo $row_fir['fir_date']; ?></td>
               <td><?php echo $row_fir['user_name']; ?></td>
               <td><?php echo $row_fir['vehicle_issue_number']; ?></td>


		           <td></td>


		         </tr>


		         <?php
		       }
		       ?>




		      </div>




        </div>
