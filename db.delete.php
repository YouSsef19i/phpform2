<?php

$id=$_GET["id"];
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$dbname = 'tdb';

$conn = mysqli_connect($dbhost, $dbuser, $dbpass,$dbname);

if(! $conn ) {
    die('Could not connect: ' . mysqli_error());
 }
 echo 'Connected successfully<br>';
 $sql = ' DELETE FROM ut WHERE id = "'.$id.'" ';
 
 if (mysqli_query($conn, $sql)) {
    echo "Record deleted successfully";
 } 
 
 else {
    echo "Error deleting record: " . mysqli_error($conn);
 }

 mysqli_close($conn);
 header("Location:db.get.php");

?>