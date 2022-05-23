function checkPassword()
{
	var pwd1 = document.getElementById("psw");
	var pwd2 = document.getElementById("pswrepeat");
	
	if(pwd1.value == pwd2.value)
	{
		alert("Success!");
		return true;
	}
	else
	{
		alert("Password Mismatch!");
		return  false;
	}
}
