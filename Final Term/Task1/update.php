<?php
$servername="localhost";
$username="root";
$password="";
$dbname="studentinfo";
$conn=new mysqli($servername,$username,$password,$dbname);
if($conn->connect_error)
{
	die("Connection failed:".$conn->connect_error);
}
else
{
	$q="UPDATE info SET  Name = 'ATIA ', Email = 'atia@gmail.com' WHERE info.ID = 204312";
	$result=$conn->query($q);
	if($result)
		echo "Data inserted successfully";
	else
		echo "Data not inserted";
}
?>