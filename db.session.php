<?php
session_start();
if(isset($_SESSION["user"]))
{
    echo "you're signed in!"."<br>";
    echo "to log out use ";
    echo "<a href='db.logout.php'>logout</a>";


}
else
{
    echo "you're not signed in!";
}
?>