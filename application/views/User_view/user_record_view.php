<!DOCTYPE html>
<html>
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
.left{
  margin-left: 10cm;
  margin-right: 10cm;
}
.footer{
  background-color:  black;
  color: white;
}

.center1{
  margin-left: 15cm;
}
</style>
<body>
  <div style="width:80%;margin:auto;">
<?php include_once('user_header_view.php'); ?>
<div>
<br />
<br />
<center>
  <div class="w3-content w3-section" style="max-width:800px max-height:20px">
    <!-- <img class="mySlides" src="1.jpg" style="width:100%">
    <img class="mySlides" src="2.jpg" style="width:100%">
    <img class="mySlides" src="3.jpg" style="width:100%"> -->
  </div>
</center>
<br />
<h2 align="center" style="color:green;"> <?php echo $this->session->flashdata('message'); ?> </h2>
<br />



  <div class="left">
    <h2> Records </h2>
    <table class="table table-striped table-hover table-bordered">
    <thead class="thead-dark">
      <tr>
        <th>#</th>
        <th>Fir NUmber</th>
        <th>Fir Date</th>

      </tr>
    </thead>

    <?php
    $fir_view=$this->db->get('tbl_fir');
    foreach ($fir_view->result() as $row_fir)
    {
     ?>



    <tbody>
      <tr>
        <td><?php echo $row_fir->fir_id; ?></td>
        <td><?php echo $row_fir->fir_number; ?></td>
        <td><?php echo $row_fir->fir_date; ?></td>

      </tr>

   </tbody>
   <?php
 }
    ?>
      </table>
</div>
<footer class="footer" style="width:80%;margin:auto;">
  <div class="center1"><p>@20017 copy right</a>.</p></div>
</footer>
</body>
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
  <link href="<?php echo base_url('Assests/Admin_template/css/bootstrap.min.css')?>" rel="stylesheet">
</html>
