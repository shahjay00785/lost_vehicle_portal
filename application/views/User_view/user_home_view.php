
<!DOCTYPE html>
<html>
<head>
  <!-- <base href="/"> -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
<style>
/* Full-width input fields */
input[type=text], input[type=password] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

/* Set a style for all buttons */
button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
}

/* Extra styles for the cancel button */
.cancelbtn {
    padding: 14px 20px;
    background-color: #f44336;
}

/* Float cancel and signup buttons and add an equal width */
.cancelbtn,.signupbtn {
    float: left;
    width: 50%;
}

/* Add padding to container elements */
.container {
    padding: 16px;
}

/* Clear floats */
.clearfix::after {
    content: "";
    clear: both;
    display: table;
}

/* Change styles for cancel button and signup button on extra small screens */
@media screen and (max-width: 300px) {
    .cancelbtn, .signupbtn {
       width: 100%;
    }
}
ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #333;
}

li {
    float: left;
}

li a, .dropbtn {
    display: inline-block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

li a:hover, .dropdown:hover .dropbtn {
    background-color: red;
}


li.dropdown {
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}
.Margin {
  margin-left: 2cm;
}
.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    text-align: left;
}

.dropdown-content a:hover {background-color: #f1f1f1}

.dropdown:hover .dropdown-content {
    display: block;
}
.margueLeft{
   margin-left: 3cm;
}
.margueLeftleft{
  margin-left: 1cm;
}
.leftNav{
   margin-left: 4cm;
}
.left{
  margin-left:2cm;
    margin-right:2cm;
}
.groove {
  border-style: groove;
}
.green{
  background-color: #1182a1;
  color: white;
}
.center{
  margin-left: 3.5cm;
}
.center1{
  margin-left: 15cm;
}
.button {
    background-color: #1182a1;
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
}
.loginLeft{
  margin-left: 2cm;
}
.footer{
  background-color:  black;
  color: white;
}
</style>

<script>
function myFunction() {
    alert("Registered Sucessfully");
}
</script>
</head>
<body>
  <div>
<ul>

<li><a href="<?php echo base_url('index.php/User_controller/User_home_controller/'); ?>">Home</a></li>
  <li><a href="<?php echo base_url('index.php/User_controller/User_about_us_controller/'); ?>">About us</a></li>
  <li><a href="<?php echo base_url('index.php/User_controller/User_missing_controller/'); ?>">Missing Vehicle</a></li>
  <li><a href="<?php echo base_url('index.php/User_controller/User_found_controller/'); ?>">Found Vehicle</a></li>


  <?php
					if(isset($_SESSION["useremail"])){
            ?>
            <div class="lefNav">
              <li><a href="<?php echo base_url('index.php/User_controller/User_home_controller/manage_logout/logout'); ?>">Logout</a></li>
          <?php
					}
					else{
            ?>
              <li><a href="information.html">Information</a>Login</li>
          <?php
					}
					?>




</div>
</ul>
<div>
<br />
<br />
<center>
  <div class="w3-content w3-section" style="max-width:100px max-height:20px">
    <img class="mySlides" src="<?php echo base_url('Assests/User_template/1.jpg'); ?>" style="width:80%">
    <img class="mySlides" src="<?php echo base_url('Assests/User_template/4.jpg'); ?>" style="width:80%">
    <img class="mySlides" src="<?php echo base_url('Assests/User_template/5.jpg'); ?>" style="width:80%">
  </div>
</center>
<br />
<div class="left">
<div class="row">
  <div class="col-sm-4">
<div class="loginLeft">

<div class="center"><h2>Login</h2></div>

<form action="<?php echo base_url('index.php/User_controller/User_home_controller/manage_user_login/check');?>"  method="post"style="border:1px solid #ccc">
  <div class="container">
    <label><b>User Name</b></label>

    <input type="text" name="txt_user_name" required>

    <label><b>Password</b></label>
    <input type="password" name="txt_user_password" name="psw" required>

    <div class="clearfix">
      <div class=""><button type="submit" class="button">Login</button></div>
    </div>
  </div>
</form>

  </div>
</div>
  <div class="col-sm-4">
<div class="center"><h2>Register</h2></div>

<form action="<?php echo base_url('index.php/User_controller/User_home_controller/manage_user_side/add'); ?>" method="post" style="border:1px solid #ccc">
  <div class="container">
    <label><b>User Name</b></label>
    <input type="text" id="txt_user_name" name="txt_user_name" placeholder="Enter User Name" name="email" required>

    <label><b>User Adhar Number</b></label>
    <input type="text" id="txt_user_aadhar_number" name="txt_user_aadhar_number" placeholder="Enter User addhar number" required>

    <label><b>User Driving Licence Number</b></label>
    <input type="text" id="txt_user_driving_license_number" placeholder="Enter Drivin License" name="txt_user_driving_license_number" required>

    <label><b>User Phone Number</b></label>
    <input type="text" id="txt_user_phone_number"  name="txt_user_phone_number" required>

    <label><b>User Password</b></label>
    <input type="password" id="txt_user_password" name="txt_user_password" placeholder="Enter Password"  required>

    <div class="clearfix">
      <div class=""><button type="submit" onclick="myFunction()" class="button">Register</button></div>
    </div>
  </div>
</form>
  </div>
  <div class="margueLeft">
  <div class="Margin">
    <!-- <div class="groove">
      <div class="green"><h4>Track Vehicle</h4></div>
      <div class="margueLeftleft">
      <marquee behavior="scroll" direction="up" onmouseover="this.stop();"onmouseout="this.start();">
        <?php
        $page_data=$this->db->get('tbl_missing_vehicle');

          foreach ($page_data->result() as $data) {
              echo $data->vehicle_issue_number;
            echo "</br>";
          }

         ?>
        </marquee>
    </div>
  </div> -->
      <br />
      <div class="groove">
        <div class="green"><h4>Missing Vehicle</h4></div>
        <div class="margueLeftleft">
        <marquee behavior="scroll" direction="up" onmouseover="this.stop();"onmouseout="this.start();">
          <?php
          $page_data=$this->db->get('tbl_missing_vehicle');

            foreach ($page_data->result() as $data) {
                echo $data->vehicle_issue_number;
              echo "</br>";
            }

           ?>
          </marquee>
      </div>
    </div>
      <br />
      <div class="groove">
        <div class="green"><h4>Found Vehicle</h4></div>
        <div class="margueLeftleft">
        <marquee behavior="scroll" direction="up" onmouseover="this.stop();"onmouseout="this.start();">
          <?php
          $page_data=$this->db->get('tbl_missing_vehicle');

            foreach ($page_data->result() as $data) {
                echo $data->vehicle_issue_number;
              echo "</br>";
            }

           ?>
          </marquee>
      </div>
    </div>
    </div>
  </div>
        </div>
    </div>
  </div>
  </div>

</div>
</div >
<br />
<br />
<br />
  <script>
  var myIndex = 0;
  carousel();

  function carousel() {
      var i;
      var x = document.getElementsByClassName("mySlides");
      for (i = 0; i < x.length; i++) {
         x[i].style.display = "none";
      }
      myIndex++;
      if (myIndex > x.length) {myIndex = 1}
      x[myIndex-1].style.display = "block";
      setTimeout(carousel, 2000); // Change image every 2 seconds
  }
  </script>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
</div>
</div>
<footer class="footer">
  <div class="center1"><p>@20017 copy right</a>.</p></div>

</footer>
</body>
</html>
