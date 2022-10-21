<?php
$host="localhost";
$user="root";
$pass="";
$db="ins";
$conn= new mysqli($host,$user,$pass,$db);
if ($conn->connect_error){
	die ($conn->connect_error);
	
}


if (($_POST['register'])){
	
	
 $name=$_POST['name'];
$id =$_POST['id'];
$gndr =$_POST['gender'];
$dept =$_POST['dpt'];
$txt =$_POST['text'];


// your data


$sql="INSERT INTO form_data(name, id, gender,dept,comment)
VALUES('$name','$id','$gndr','$dept','$txt')";

if ($conn->query($sql)==TRUE){
	
	echo "query is ok <br> <br> <br>";
	
}


else{

echo "$conn->error";


}	

echo "your name is ".$name."<br>" ;
echo "your id is ".$id."<br>" ;

echo "your gender is ".$gndr."<br>" ;
echo "your dept is ".$dept."<br>" ;


}
else{
	echo " did not set";
	
}

?>