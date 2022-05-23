<?php


$Fname = filter_input(INPUT_POST,'Fname');
$Lname = filter_input(INPUT_POST,'Lname');
$email = filter_input(INPUT_POST,'email');
$mobile = filter_input(INPUT_POST,'mobile');
$messege = filter_input(INPUT_POST,'messege');

if(!empty($Fname)){
if(!empty($Lname)){
if(!empty($email)){
if(!empty($mobile)){
if(!empty($messege)){
	
	$host = "localhost";
	$dbusername = "root";
	$dbpassword ="";
	$dbname = "textile";
	
	

	//create connection_aborted
	$conn = new mysqli ($host,$dbusername,$dbpassword,$dbname);

	if(mysqli_connect_error()){
		die('Connect Error ('.mysqli_connect_errno() .')'.mysqli_connect_error());
	}

	else{
		$sql ="INSERT INTO testimonial(Fname,Lname,email,mobile,messege) VALUES ('$Fname','$Lname','$email','$mobile','$messege')";
		if($conn->query($sql)){
			echo "New record is inserted successfully";
		}
		else{
			echo "Error :".$sql ."<br>".$conn->error;
		}
		$conn->close();
	
	}
}
}
}
}
}

?>