<ul>

  <li><a href="<?php echo base_url('index.php/User_controller/User_home_controller/'); ?>">Home</a></li>
    <li><a href="<?php echo base_url('index.php/User_controller/User_about_us_controller/'); ?>">About us</a></li>
    <li><a href="<?php echo base_url('index.php/User_controller/User_missing_controller/'); ?>">Missing Vehicle</a></li>
    <li><a href="<?php echo base_url('index.php/User_controller/User_found_controller/'); ?>">Found Vehicle</a></li>


    <?php
  					if(isset($_SESSION["useremail"])){
              ?>
              <div class="lefNav">
                <li><a href="<?php echo base_url('index.php/User_controller/User_record_controller'); ?>">Record</a></li>
                <li><a href="<?php echo base_url('index.php/User_controller/User_home_controller/manage_logout/logout'); ?>">Logout</a></li>
            <?php
  					}
  					else{
              ?>
              <!--  <li><a href="information.html">Information</a>Login</li> -->
            <?php
  					}
  					?>
  </div>
</div>


</ul>
