<?php
$dbhostname="localhost";
$dusername="root";
$dbpassword="";
$dbname="formdata";
$conn=mysqli_connect($dbhostname,$dusername,$dbpassword,$dbname);
if(isset($_POST["submit"])){
    $name=$_POST['name'];
    $age=$_POST['age'];
    $dob=$_POST['date'];
    $query="INSERT INTO student(name,age,dob) VALUES('$name','$age','$dob')";
    $x=mysqli_query($conn,$query);
    header("Location:http://localhost/home work/show.php");
    
}
?>