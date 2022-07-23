<?php
function conectar(){
    $host="sql5.freemysqlhosting.net";
    $user="sql5501096";
    $pass="Um52KfZfqu";
    $bd="sql5501096";

    $con=mysqli_connect($host,$user,$pass);

    mysqli_select_db($con,$bd);

    return $con;
}
?>
