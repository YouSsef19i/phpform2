<?php
session_start();
if(!isset($_SESSION["ut"]))
{
    header("Location:db.form.php");
}

    $con = mysqli_connect("localhost", "root", "", "mydb");
    $query = "SELECT * FROM ut";

    $res=mysqli_query($con, $query);

    if($res){

        echo '<table>
        
        <tr><td align="left"><b>id</b></td>
        <td align="left"><b>name</b></td>
        <td align="left"><b>Age</b></td>
        <td align="left"><b>Email</b></td>
        <td align="left"><b>Pass</b></td>
        <td align="left"><b>Update</b></td>
        <td align="left"><b>Delete</b></td>
        </tr>';

    while($row = mysqli_fetch_array($res)){
        
        echo '<tr><td align="left">' . 
        $row['id'] . '</td><td align="left">' . 
        $row['name'] . '</td><td align="left">' . 
        $row['age'] . '</td><td align="left">' .
        $row['email'] . '</td><td align="left">' . 
        $row['password'] . '</td><td align="left"><a href="db.up.form.php?id='
        .$row['id'].'"> update </a></td><td align="left"><a href="db.delete.php?id='
        .$row['id'].'"> Delete </a></td>';


        echo '</tr>';
        }

        echo '</table>';

        } else {

        echo "Couldn't issue database query<br />";


        }

        mysqli_close($con);


?>