<?php
$server   = "localhost";
$username = "root";
$password = "";
$dbname   = "myfamilytree";

$conn     = mysqli_connect($server,$username,$password,$dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
if(isset($_POST["submit"])){
    $name =$_POST['name'];
    $gender =$_POST['gender'];
    $partner =$_POST['partner'];
    $parents =$_POST['parents'];
  
   

    $sql = "INSERT INTO member(name,gender,partner,parents) 
    VALUES ('$name','$gender','$partner','$parents')";
   


if ($conn->query($sql) === TRUE) {
  echo "New member added successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
}
?>