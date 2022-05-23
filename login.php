<?php


$email = $_POST['email'];
$pswrepeat = $_POST['pswrepeat'];


//database connection


$con = new mysqli("localhost","root","","textile");
if($con->connect_error) {
   die("Failed to connect :".$con->connect_error);
}
else {
	$stmt = $con->prepare("select * from register where email= ?");
	$stmt->bind_param("s",$email);
	$stmt->execute();
    $stmt_result = $stmt-> get_result();
	if($stmt_result->num_rows > 0){
		$data = $stmt_result->fetch_assoc();
		if($data['pswrepeat'] === $pswrepeat){
			header('location:index.php');
		}else {
		    echo "<h2>Invalid email or password </h2>";
	    }
	}else {
		echo "<h2>Invalid email or assword </h2>";
	}


}
?>