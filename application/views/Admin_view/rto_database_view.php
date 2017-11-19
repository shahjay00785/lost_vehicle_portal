<script language="javascript" type="text/javascript">
	function getXMLHTTP() { //fuction to return the xml http object
		var xmlhttp=false;
		try{
			xmlhttp=new XMLHttpRequest();
		}
		catch(e)	{
			try{
				xmlhttp= new ActiveXObject("Microsoft.XMLHTTP");
			}
			catch(e){
				try{
				xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");
				}
				catch(e){-
					xmlhttp=false;
				}
			}
		}

		return xmlhttp;
    }

	function getdata()
	{

		var searchdata=document.getElementById('txt_book_master_name').value;
		if(searchdata!="")
		{
	    var strURL="<?php echo base_url('Ajax_controller/Ajax_controller/getbookdata/'); ?>"+searchdata;
			//var strURL="googlesearch.php?data="+searchdata;
	    //alert(strURL);
			var req = getXMLHTTP();

			if (req) {


				req.onreadystatechange = function() {
					if (req.readyState == 4) {
						// only if "OK
						if (req.status == 200) {
							document.getElementById('mydiv').innerHTML=req.responseText;

						} else {
							alert("There was a problem while using XMLHTTP:\n" + req.statusText);
						}
					}
				}
				req.open("GET", strURL, true);
				req.send(null);

			}
		}
		else {
			document.getElementById('mydiv').innerHTML="";

		}
	}

	function setdata(text)
	{
		document.getElementById('txt_book_master_name').value=text;
		document.getElementById('mydiv').innerHTML="";
	}

</script>


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
          Fir request

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
            <label class="sr-only" for="exampleInputEmail3">Vehicle Issue Number</label>

            <input type="text" autocomplete="off" class="form-control" id="issue_number" name="issue_number" onkeyup="getdata();" placeholder="GJ05HD2017">

						<div id="mydiv" style="display:block;position:absolute;background-color:black;color:white">
						 <?php echo $this->session->flashdata('message'); ?>
						</div>

          </div>
          <div class="form-group">


						<div id="mydiv">

						</div>

          </div>
          <div class="form-group">


						<div id="mydiv">

						</div>

          </div>

          <button type="submit" class="btn btn-default">Search Data</button>
					<h2 align="center" style="color:green;"><?php echo $this->session->flashdata('message'); ?></h2>
        </form>
      </div>





			<div class="col-lg-12">
		      <h2>RTO database </a>


					</h2>
		      <div class="table-responsive">
		        <table class="table table-bordered table-hover table-striped">
		          <thead>
		            <tr>
		              <th>#</th>
		              <th>Issue #</th>
									<th>Vehicle Name  </th>
									<th>User Name  </th>
									<th>Model #</th>
									<th>color</th>
		              <th>Engine #</th>
		              <th>Chasis #</th>
									<th>Missing Date</th>
		              <th> FIR </th>



		            </tr>
		          </thead>


		     <?php

	/*			 $this->db->join('tbl_user_side','tbl_user_side.user_id=tbl_book_master.author_id');
         $this->db->join('tbl_publisher','tbl_publisher.publisher_id=tbl_book_master.publisher_id');
         $this->db->join('tbl_category','tbl_category.cat_id=tbl_book_master.cat_id');
   */
				 $rto_view=$this->db->get('tbl_rto_database');
		     $i=0;

		     foreach ($rto_view->result() as $row_rto)
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


		           <td><?php echo $row_rto->rto_id; ?></td>
		           <td><?php echo $row_rto->vehicle_issue_number; ?></td>
		           <td><?php echo $row_rto->vehicle_name; ?></td>
		           <td><?php echo $row_rto->vehicle_chasis_number; ?></td>
		           <td><?php echo $row_rto->user_driving_license_number; ?></td>
		           <td><?php echo $row_rto->user_aadhar_number; ?></td>
		           <td><?php echo $row_rto->vehicle_chasis_number; ?></td>
		           <td></td>

		           <td></td>

		           <td> <a href="<?php echo base_url('index.php/Admin_controller/Admin/fir_generate/').$row_rto->rto_id; ?>"> FIR +</a> </td>
		         </tr>


		         <?php
		       }
		       ?>




		      </div>




        </div>
