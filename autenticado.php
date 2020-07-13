<?php

include 'vars.php';

$conn=mysqli_connect($servername,$username,$password,"$dbname");
if(!$conn){
    die('Could not Connect MySql Server:' .mysql_error());
}
if(isset($_POST['submit']))
{
    $telefono = $_POST['telefono'];
    $password = $_POST['password'];

    $sql = "SELECT pass from Cliente where phone = '$telefono';";
    if ($conn->query($sql) === TRUE){
        echo "lalala";
        $salida = $conn->query($sql);
        echo $salida; 
    }
    mysqli_close($conn);
}
