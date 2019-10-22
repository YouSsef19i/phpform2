<?php
$id = $_GET["id"];
$con = mysqli_connect("localhost", "root", "", "tdb");


$query = 'SELECT * FROM ut WHERE id  = "'.$id.'" ';
$res=mysqli_query($con, $query);

$name="";
$age=0;
$email="";
$password="";
if($res){

$row=mysqli_fetch_array($res);
$name=$row['name'];
$age=$row['age'];
$email=$row['email']; 
$password=$row['password'];


}


else {

echo "Couldn't issue database query<br />";

}
mysqli_close($con);

?>


<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">

        <title>
            datamangment1
        </title>

    </head>

    <body>

        <form  action="dbupdate.php" method="post">

                 <input type="hidden" name="id" value="<?php echo $id?>"><br>

                <label>Name:</label><br>
                <input type="text" name="name" value="<?php echo $name?>"><br>
                <label>age:</label><br>     
                <input type="number" name="age" value="<?php echo $age?>"><br>
                <label>password:</label><br>
                <input type="password" name="pass" value="<?php echo $password?>"><br>
                <label>email:</label><br>
                <input type="email" name="email" value="<?php echo $email?>"> <br>
                <input type="submit" name="submit">

        </form>

    </body>

</html>