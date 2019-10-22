<?php

if(isset($_POST["submit"])){
    $id=$_POST["id"];
    $name=$_POST["name"];
    $email=$_POST["email"];
    $age=$_POST["age"];
    $pass=$_POST["pass"];
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "tdb";

        $conn = new mysqli($servername, $username, $password, $dbname);

                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                } 

                $sql = "UPDATE ut SET name='".$name."', email='".$email."', password='".$pass."' , age ='".$age."' WHERE id='".$id."'";


                if (mysqli_query($conn, $sql)) {
                echo "record Updated successfully";
                header("Location:db.get.php");
                } else {
                echo "Error: " . $sql . "" . mysqli_error($conn);
                }
                $conn->close();
}
         
?>