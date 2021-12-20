<?php
	session_start();
	
	$con = mysqli_connect('localhost','root','');
	mysqli_select_db($con,'dvm');
	$FIRST_NAME =$_POST['FIRST_NAME'];
	$LAST_NAME =$_POST['LAST_NAME'];
	$EMAIL_ADDRESS =$_POST['EMAIL_ADDRESS'];
	$NATIONAL_ID_NO=$_POST['NATIONAL_ID_NO'];
	$BIRTH_PLACE =$_POST['BIRTH_PLACE'];
	$phone = $_POST ['phone'];
	$PASSWORD =$_POST['PASSWORD'];
	$s ="select * from form where FIRST_NAME = '$FIRST_NAME'";
	$result = mysqli_query($con, $s);
	$num = mysqli_num_rows($result);
	if ($num ==1) {
		echo "username already exists";
	}
	else{
		$reg = "insert into form(FIRST_NAME,LAST_NAME ,EMAIL_ADDRESS,NATIONAL_ID_NO,BIRTH_PLACE, phone,PASSWORD) values ('$FIRST_NAME','$LAST_NAME ','$EMAIL_ADDRESS','$NATIONAL_ID_NO','$BIRTH_PLACE', '$phone','$PASSWORD')";
		mysqli_query($con, $reg);
		echo "your details have been updated!!!";
		echo '<script>alert("your details have been updated!!!")</script>';
	}

?>