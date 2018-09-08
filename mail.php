<?php
if(isset($_POST['submit'])){
$name=$_POST['name'];
$email=$_POST['email'];
$message=$_POST['message'];

$to='chaharclasses@gmail.com';
$subject='New Submission';
$message="Name: ".$name."\n". "email: ".$email."\n".  "message: "."\n\n".$message;
$headers="From: ".$email;

if(mail($to, $subject, $message, $headers)){
	echo "<h2> Sent Successfully !</h2>";
}
else{
	echo "Something went Wring!";
}
}
?>