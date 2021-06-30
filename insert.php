<?php
$server = "localhost";
$username = "root";
$password = "";
$dbname = "website";

$conn = mysqli_connect($server, $username, $password, $dbname);

if(isset($_POST['submit'])){
	if(!empty($_POST['المحرك 1']) && !empty($_POST['المحرك 2']) && !empty($_POST['المحرك 3']) && !empty($_POST['المحرك 4'])
		&& !empty($_POST['المحرك 5']) && !empty($_POST['المحرك 6'])) {
			
			$motor1 = $_POST['المحرك 1'];
			$motor2 = $_POST['المحرك 2'];
			$motor3 = $_POST['المحرك 3'];
			$motor4 = $_POST['المحرك 4'];
			$motor5 = $_POST['المحرك 5'];
			$motor6 = $_POST['المحرك 6'];
			
			$query = "website into form (motor1, motor2, motor3, motor4, motor5, motor6) values ('$motor1' , '$motor2' , '$motor3' , 
			'$motor4' , '$motor5' , '$motor6')";
			
			$run = mysqli_query($conn, $query);
			or die (mysqli_error());
			
			if ($run){
				echo " form sumitted successfully" ;
				
			}
			else {
				echo"form not sumitted";
				
			}
			
		}
	else {
		echo" all fields required";
		
		}
}

?>