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

foreach($_POST as $key=>$value){
	if($key[0] == "a"){
		$ID = substr($key,1);
		$T_ID = "t".substr($key,1) ;
		$t_value = $_POST[$T_ID];
		
		$sql = "UPDATE annotation SET annotated = 1 WHERE ID =".$ID." AND UserID = ".$_SESSION["UID"].";"; 
		$result = $conn->query($sql);
		
		if(strlen($value)>0){
			$text_arr = explode("\n", $value);
			$aff_arr = explode("\n", $t_value);
			if(count($text_arr) == 1){
				$sql = "INSERT INTO annotationtext(annotationID,affordance,text) VALUES (".$ID.",'".$t_value."','".$value."')";
				mysqli_query($conn, $sql);
			}
			else{
				$difference = count($text_arr) - count($aff_arr);
				if($difference > 0){
					for($i=0;$i < $difference; $i++){
						array_push($aff_arr, "");
					}					
				}

				for($i=0;$i < count($text_arr); $i++){
					$sql = "INSERT INTO annotationtext(annotationID,affordance,text) VALUES (".$ID.",'".$aff_arr[$i]."','".$text_arr[$i]."')";
					mysqli_query($conn, $sql);
				}
			}
		}
	}	
}

header("Location: app.php");

?>