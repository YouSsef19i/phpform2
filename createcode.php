<?php 
session_start();
    $_SESSION["user"]=1;
    if(isset($_post["submit"])){
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
    echo "Connected successfully";


    $sql = "INSERT INTO ut(name,email,password,age)VALUES ('$name','$email','$pass','$age')";
  
    if (mysqli_query($conn, $sql)) {
        echo "New record created successfully";
        header("Location:db.session.php");
    }

    else {
        echo "Error: " . $sql . "" . mysqli_error($conn);
    }
     $conn->close();
  

}


?>