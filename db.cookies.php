<?php

setcookie ("remember_me" , "remember_me" , time ()+86400 , "/" , "localhost");
  
if($_POST["remember_me"]=='1' || $_POST["remember_me"]=='on')
                    {
                    $hour = time() + 86400;
                    setcookie('username', $name, $hour);
                    setcookie('password', $pass, $hour);
                    }
?>
