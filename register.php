<?php

$email = $_POST['email'];
$pswrepeat = $_POST['pswrepeat'];



//database connection 

$con = new mysqli("localhost","root","","textile");

if($con->connect_error) {
   die('Failed connect :'.$con->connect_error);
}
else {
	$stmt = $con->prepare("INSERT into register(email,pswrepeat) VALUES(?,?)");
    $stmt->bind_param("ss",$email,$pswrepeat);
    $stmt->execute();
    echo "Registration successfully.......";
    $stmt->close();
	$con->close();

}



?>