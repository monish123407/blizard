

<?php 
	$name1=$_POST['name'];
	$email1=$_POST['email'];
	$phno1=$_POST['phno'];
	$psw1=$_POST['psw'];
//ob_start();
//sesion_star();
$conn=mysqli_connect('localhost','root','',"student");
if($conn->connect_error)
{
	die('connect_error: '.$conn->connect_error);
}
else{
	$stmt=$conn->prepare("insert into student(name,email,phno,psw')values(?, ?, ?, ?)");
	$stmt->bind_param("ssis",$name1,$email1,$phno1,$psw1);
	$stmt->execute();
	echo "registration succesfully";
	$stmt->close();
	$conn->close();

}


 ?>