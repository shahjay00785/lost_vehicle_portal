


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
									<th>Model #</th>
									<th>color</th>
		              <th>Engine #</th>
		              <th>Chasis #</th>
									<th>Missing Date</th>
		              <th> </th>



		            </tr>
		          </thead>


		     <?php

	/*			 $this->db->join('tbl_user_side','tbl_user_side.user_id=tbl_book_master.author_id');
         $this->db->join('tbl_publisher','tbl_publisher.publisher_id=tbl_book_master.publisher_id');
         $this->db->join('tbl_category','tbl_category.cat_id=tbl_book_master.cat_id');
   */



				 $fir_view=$this->db->get('tbl_fir');
		     $i=0;

		     foreach ($fir_view->result() as $row_fir)
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


		           <td><?php echo $row_fir->rto_id; ?></td>
		           <td><?php echo $row_fir->fir_number; ?></td>
		           <td><?php echo $row_fir->fir_date; ?></td>
		           <td><?php echo $row_fir->vehicle_chasis_number; ?></td>
		           <td><?php echo $row_fir->user_driving_license_number; ?></td>
		           <td><?php echo $row_fir->user_aadhar_number; ?></td>
		           <td><?php echo $row_fir->vehicle_chasis_number; ?></td>
		           <td></td>

		           <td></td>

		           <td> <a href="<?php echo base_url('index.php/Admin_controller/Admin/fir_generate/').$row_fir->rto_id; ?>"> FIR +</a> </td>
		         </tr>


		         <?php
		       }
		       ?>




		      </div>




        </div>
