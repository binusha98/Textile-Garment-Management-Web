<?php
	$con = mysqli_connect('127.0.0.1','root','');
	
	if(!$con)
	{
	echo 'Not Connected to the server';
	}
	 if(!mysqli_selectdb($conn,'textile')){
		 echo 'Database Not selected'
	 }

?>