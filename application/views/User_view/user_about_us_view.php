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
   margin-left: 0.5cm;
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
  background-color: #62f442;
  color: white;
}
.footer{
  background-color:  black;
  color: white;
}

.center1{
  margin-left: 15cm;
}
.about{
    margin-left:4cm;
      margin-right:4cm;
      text-align: justify;
  text-justify: inter-word;
  }
  .color{
    color: blue;
  }
}
</style>
</head>
<body>

  <div style="width:80%;margin:auto;">
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
</div>
</ul>
<div>
  <br>
  <br>
  <center>
    <div class="w3-content w3-section" style="max-width:100px max-height:20px">
      <img class="mySlides" src="<?php echo base_url('Assests/User_template/1.jpg'); ?>" style="width:80%">
      <img class="mySlides" src="<?php echo base_url('Assests/User_template/4.jpg'); ?>" style="width:80%">
      <img class="mySlides" src="<?php echo base_url('Assests/User_template/5.jpg'); ?>" style="width:80%">
    </div>
  </center>
<br />
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
<div class="about">
<h5>
<h2>  <center class="color">About Us</center><br> </h2>
  This portal is meant for tracing and providing a platform to find the missing and stolen vehicles. The site will gather information of found vehicles, so that the vehicle owners, Police department and the insurance companies settling the claims of missing vehicles can browse the information and the vehicles can be returned to their owners.
  <h2><br><br><center class="color">Missing Vehicle</center><br></h2>
  The data of a missing vehicle can be entered in the system by any person. He/She needs to mention the same while entering the data. The mandatory information would be the name of the owner, vehicle registration number, chassis number, vehicle make and model, date of purchase, insurance policy number and its provider, location from where the vehicle was lost, date and time of missing, his/her contact details like address, phone number, email and the FIR number etc. After filling up all necessary information, the person will receive an email confirming the receipt of information and he/she can then go and search the found vehicles database for his/her vehicle. If the vehicle data exists in the found database, the person will receive a message informing him/her to contact the administration department in the company’s registered office to collect the further details regarding his/her vehicle. The person needs to provide original papers of the vehicle, his/her photo identity proof and the copy of FIR lodged in the nearest police station while contacting the administration department. The vehicle details will be given only on producing these documents and after matching the information.
  <h2><br><br><center class="color">Found Vehicle</center><br></h2>
  A person locates a vehicle lying idle in front of the office or a residence or a parking lot and wishes to report its details to the owner of the vehicle. He can do so through this web-site. In this case, he/she need not provide his/her personal details, however, he/she needs to enter the details of the found vehicle such as the registration number, vehicle make and model and location where it was found. Although the personal information is not mandatory, it can be filled in if the user wants to check the progress of search of that vehicle owner. If he/she has entered his/her email address, he/she will receive an acknowledgement mail after filling up the information. He / She will receive auto generated emails from the company updating him/her about the progress of the search of the vehicle owner. If the company decides to offer some complementary gift to the person reporting a found vehicle in future, the person will have to enter his personal details and he/she will have to contact the administration department for their gift. He / She needs to provide his/her photo id proof for the same.
<br><br><br><br>
</h5>
</div>
<footer class="footer" style="width:80%;margin:auto;">
  <div class="center1"><p>@20017 copy right</a>.</p></div>

</footer>
</body>
</html>
