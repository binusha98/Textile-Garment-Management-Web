<?php



$FullName =$_POST['FullName'];
$Email = $_POST['Email'];
$Mobile=$_POST['Mobile'];
$Messege=$_POST['Messege'];



//database connection 

$con = new mysqli("localhost","root","","textile");

if($con->connect_error) {
   die('Failed connect :'.$con->connect_error);
}
else {
	$stmt = $con->prepare("INSERT into contactus(FullName,Email,Mobile,Messege) VALUES(?,?,?,?)");
    $stmt->bind_param("ssss",$FullName,$Email,$Mobile,$Messege);
    $stmt->execute();
    echo header('location:index.php');
    $stmt->close();
	$con->close(); 

}



?>