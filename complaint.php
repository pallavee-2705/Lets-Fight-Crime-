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
<br> 
<div class="container">
<h3>GO AHEAD, DON'T HESITATE FILE  A COMPLAINT, HELP POLICE</h3>
<br>
  <form method="POST">
     <h3 style="font-color:rgb(0,0,0)">

    <label  for="fname">First Name</label><br>
    <input type="text" id="fname" name="fname" placeholder="Your first name....."><br>

    <label  for="lname">Last Name</label><br>
    <input type="text" id="lname" name="lname" placeholder="Your last name....."><br>
  
     <label  for="age">Age</label><br>
    <select id="age" name="age" >
      <option value="upto 18">upto 18</option>
      <option value="19-25">19-25</option>
      <option value="26-35">26-35</option>
      <option value="36-45">36-45</option>
      <option value="46-55">46-55</option>
      <option value="56-65">56-65</option>
      <option value="Above 65">Above 65</option><br>
     </select><br>

     
     
     <label for="gender">Gender</label><br>
    <input type="radio" id="m" name="gender" value="Male">Male<br>
    <input type="radio" id="f" name="gender" value="Female">Female<br>
    <input type="radio" id="O" name="gender" value="Other">Other<br><br>

    

     <label  for="phone">Mobile Number</label><br>
    <input type="text" id="phone" name="phone" placeholder="Mobile Number......"><br>
        

    <label for="city">City</label><br>
    <select id="city" name="city">
      <option value="Mumbai">Mumbai</option>
      <option value="Pune">Pune</option>
      <option value="Delhi">Delhi</option>
      <option value="Kolkata">Kolkata</option>
      <option value="Chennai">Chennai</option>
      <option value="Bengluru">Bengluru</option>
      <option value="Hyderabad">Hyderabad</option>
      <option value="Other">Other</option>



    </select><br>
     

 
      <label for="incident">Describe the incident in brief :</label><br>

    <textarea id="incident" name="incident" placeholder="Note: Please mention the date & time of the incident." style="height:200px"></textarea><br>
    
    
   <label  for="victim">Victim's Name</label><br>
    <input type="text" id="victim" name="victim" placeholder="Victim Name...."><br>
  
  
    <label  for="suspect">Suspects Name/Compalint Against</label><br>
    <input type="text" id="suspect" name="suspect" placeholder="Suspect name...."><br>

     <label  for="place">Place of Crime</label><br>
    <input type="text" id="place" name="place" placeholder="Locality,City,State"><br>

   <button type="submit" name="submit" class="registerbtn">Submit</button><br><br>

  </form>
</div>
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

include'connection1.php';

if(isset($_POST['submit'])){

  $fname = $_POST['fname'];
  $lname = $_POST['lname'];
  $age = $_POST['age'];
  $gender = $_POST['gender'];
  $phone = $_POST['phone'];
  $city = $_POST['city'];
  $incident = $_POST['incident'];
  $victim = $_POST['victim'];
  $suspect = $_POST['suspect'];
  $place = $_POST['place'];
  
  $insertquery1 = " insert into information(
    firstname, lastname, age, gender, phone, city, incident, victim, suspect, incident_place) values('$fname', '$lname', '$age', '$gender', '$phone', '$city', '$incident', '$victim', '$suspect', '$place') "; 

  $result1 = mysqli_query($conn, $insertquery1); 

  if($result1){
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


