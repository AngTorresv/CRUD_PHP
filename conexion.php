<?php
function connection(){

    $host= "127.0.0.1:33065";
    $user= "root";
    $pass= "";
    $db= "crud_php";
    $connect= mysqli_connect($host,$user,$pass,$db);
    mysqli_select_db($connect,$db);
    return $connect;
}

?>