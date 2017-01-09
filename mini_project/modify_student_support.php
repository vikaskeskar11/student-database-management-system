<?php
include 'config.php';

$name=$_GET['name'];

$query="select * from registration where name='$name'";
$result=mysqli_query($conn,$query);

$array=mysqli_fetch_row($result);

echo json_encode($array);
?>