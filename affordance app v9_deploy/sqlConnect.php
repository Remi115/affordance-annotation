<?php
@session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db_actionverb_autogenerated_affordance_2000_v2";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";


$psw =  $_REQUEST["psw"];
$uname = $_REQUEST["uname"]	;

$sql = "SELECT ID,username FROM user WHERE username = '" . $uname . "' AND password = '" . $psw ."'"; 
$result = $conn->query($sql);
if ($result) {
    $rowNum = mysqli_num_rows($result) ;
	if($rowNum != 1){
		
		header("Location: login.php");
		$_SESSION['message']  = "<p id='warning'>Invalid username or password</p>";
	}
	else{
		header("Location: app.php");
		$_SESSION["name"] = $uname;
		$row = mysqli_fetch_assoc($result);
		$ID = $row["ID"];
		$_SESSION["UID"] = $ID;
	}
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


$conn->close();
?>