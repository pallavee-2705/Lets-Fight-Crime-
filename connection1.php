<?php

$username = "epiz_27404034";
$password = "l25x3C4snQcs2i";
$server = '	sql210.epizy.com';
$db = 'epiz_27404034_crime';

// Create connection
$conn = mysqli_connect($server, $username, $password, $db);
  
if($conn){
	//echo "Connection succesful!";
?>
<script type="text/javascript">
	alert('Connection succesful');
</script>
	<?php 
}else {
    die("no connection". mysqli_connect_error());
}

?>