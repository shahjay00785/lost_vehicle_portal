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

      <div class="row">
        <div class="col-lg-12">
          <h1 class="page-header">
            Dashboard <small>Statistics Overview</small>
          </h1>
          <ol class="breadcrumb">
            <li class="active">
              <i class="fa fa-dashboard"></i> Dashboard
            </li>
          </ol>
        </div>
      </div>
      <!-- /.row -->

      <div class="row">
        <div class="col-lg-12">
          <div class="alert alert-info alert-dismissable">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <i class="fa fa-info-circle"></i>  <strong>Data</strong>
          </div>
        </div>
      </div>
      <!-- /.row -->

      <div class="row">
        <div class="col-lg-3 col-md-6">
          <div class="panel panel-primary">
            <div class="panel-heading">
              <div class="row">
                <div class="col-xs-3">

                </div>
                <div class="col-xs-9 text-right">
                  <div class="huge">
                  <?php

                  $query=$this->db->query("SELECT COUNT(*) FROM tbl_fir");
                  $result = $query->row_array();
                  $count = $result['COUNT(*)'];
                  echo $count;

                  ?>

                  </div>
                  <div>Number  Of FIR !</div>
                </div>
              </div>
            </div>

            </a>
          </div>
        </div>
        <div class="col-lg-3 col-md-6">
          <div class="panel panel-green">
            <div class="panel-heading">
              <div class="row">
                <div class="col-xs-3">
                  <i ></i>
                </div>
                <div class="col-xs-9 text-right">
                  <div class="huge">
                    <?php
                    $query=$this->db->query("SELECT COUNT(*) FROM tbl_rto_database");
                    $result = $query->row_array();
                    $count = $result['COUNT(*)'];
                    echo $count;

                     ?>

                  </div>
                  <div>RTO Registred Vehicle</div>
                </div>
              </div>
            </div>

            </a>
          </div>
        </div>
        <div class="col-lg-3 col-md-6">
          <div class="panel panel-yellow">
            <div class="panel-heading">
              <div class="row">
                <div class="col-xs-3">

                </div>
                <div class="col-xs-9 text-right">
                  <div class="huge">
                    <?php
                    $query=$this->db->query("SELECT COUNT(*) FROM tbl_missing_vehicle");
                    $result = $query->row_array();
                    $count = $result['COUNT(*)'];
                    echo $count;
                    ?>
                  </div>
                  <div>Missing Vehicle!</div>
                </div>
              </div>
            </div>

            </a>
          </div>
        </div>
        <div class="col-lg-3 col-md-6">
          <div class="panel panel-red">
            <div class="panel-heading">
              <div class="row">
                <div class="col-xs-3">

                </div>
                <div class="col-xs-9 text-right">
                  <div class="huge">
                    <?php
                    $query=$this->db->query("SELECT COUNT(*) FROM tbl_found_vehicle");
                    $result = $query->row_array();
                    $count = $result['COUNT(*)'];
                    echo $count;
                    ?>

                  </div>
                  <div>Found Vehicle</div>
                </div>
              </div>
            </div>

            </a>
          </div>
        </div>
      </div>
      <!-- /.row -->


      <!-- /.row -->



    </div>
    <!-- /#page-wrapper -->

  </div>

  <?php include_once('admin_footer.php'); ?>
  <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
