<!DOCTYPE html>
<html>
<head>
	<title>Let's Fight Crime</title>
	<link rel="stylesheet" href="style.css">
	
</head>
<body>
     
   <p style="font-size:45px;font-family:Cooper Black;color:#02075d;text-shadow:0 1px 0 #ccc, 0 2px 0 #ccc, 0 3px 0 #ccc, 0 4px 0 #ccc, 5px 0 #ccc, 0 6px 0 #ccc, 0 7px 0 #ccc, 0 8px 0 #ccc, 0 9px 0 #ccc, 0 10px 0 #ccc, 0 11px 0 #ccc, 0 12px 0 #ccc,0 20px 30px rgba(0, 0, 255,0.5) ;">    <img src="download.png" width="190" height="190" style="vertical-align:middle;margin-left:15px;margin-top:10px">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>Let's Fight Crime</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="swachh-bharat.png" weight="70" height="70" style="margin-top:20px">&nbsp;<img src="gallery12.png" weight="70" height="70" style="margin-top:20px"></p> 
    <br>                                                                                                                                                                                                                                                                                
   <div class="menu-bar">
	<nav>
 		<ul>    		
 			<li><a href="crime.php">Home</a></li>
 			<li><a href="complaint.php">Complaint</a></li>
			<li><a href="volunteer.php">Volunteer</a></li>
 			<li><a href="helpline.php">Helpline</a></li>
 			<li><a href="about.php">About Us</a></li>
 			<li><a href="join.php">Pledge</a></li>
 		</ul>
 	</nav>
        </div>
<br>
<form method="POST">
<br>
<br>
<div class="form">
  <div class="container">
    <h2 style="color:red;"><i>You are just one step back from pledging your valueable contribution towards the society!</i></h2>
    <br>
    <h1 style="color:black;">Register </h1>
    <br>
    <p>Please fill in this form to create an account.</p>
    <hr>

     <label for="name"><b>Name</b></label><br>
    <input type="text" placeholder="Enter Name" name="vname" id="name" required><br>

    <label for="email"><b>Email</b></label><br>
    <input type="text" placeholder="Enter Email" name="email" id="email" required><br>
    
    <label for="psw"><b>Password</b></label><br>
    <input type="password" placeholder="Enter Password" name="psw" id="psw" required><br>
    
    <label for="psw-repeat"><b>Repeat Password</b></label><br>
    <input type="password" placeholder="Repeat Password" name="psw-repeat" id="psw-repeat" required>
    
    <p>By creating an account you agree to our <a href="#">Terms & Privacy</a></p>
    <button type="submit" name="submit" class="registerbtn" style="margin-left:270px" >Register</button>
  </div>

</div>  
</form>

<br>
<div class="bottom">

<pre style="font-family:Times New Roman">
                      Crime Reporting Portal System
                           Under the Guidance of
                             Prof.Shyam Magar
                             
</pre>
<ul>
   <li><a href="https://docs.google.com/forms/d/e/1FAIpQLSf7kg_97iVaB2Z_wr29Qw40NDLt13PzVjjU0ExbupgK0bPvaQ/viewform" target="_blank">Feedback    |</a></li>
   <li><a href="mailto:readytohelindiap@gmail.com">Help    |</a></li>
   <li><a href="about.php">About us    |</a></li>
   <li><a href="volunteer.php">Join us    |</a></li></ul>

<ul style="margin-left:1150px">
  
  <li><a href="https://www.facebook.com/IPSAssociation/"><img src="https://icons-for-free.com/iconfiles/png/512/facebook-131994968063369706.png" height="45px"  width="45px"></a></li>
  <li><a href="https://twitter.com/ips_association?lang=en"><img src="https://icons-for-free.com/iconfiles/png/512/twitter+icon-1320185153780096253.png"  width="42px" height="42px"></a></li>
  <li><a href="https://www.instagram.com/indian.police/"><img src="instagram.png"  width="45px" height="45px"></a></li>
  </ul>
</div>
</body>
</html>

<?php 

include'connection.php';

if(isset($_POST['submit'])){

  $name = $_POST['vname'];
  $email = $_POST['email'];
  $password = $_POST['psw'];
  $repassword = $_POST['psw-repeat'];

  $insertquery = " insert into volunteer(
    name, email, password, repeat_password) values('$name', '$email', '$password', '$repassword') "; 

  $result = mysqli_query($con, $insertquery); 

  if($result){
  ?>
  <script >
       alert("Data inserted Properly");
  </script>
  <?php
  }else{
  ?>
  <script>
  alert("Data not inserted ");
  </script>
  <?php
  }
}
?>
