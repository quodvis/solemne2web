<?php

include_once 'vars.php';

$conn=mysqli_connect($servername,$username,$password,"$dbname");
if(!$conn){
    die('Could not Connect MySql Server:' .mysql_error());
}

if(isset($_POST['submit']))
{    
     $producto = $_POST['nombreProducto'];
     $precio = $_POST['precio'];
     $cantidad = $_POST['cantidad'];

     
     if(!is_numeric($precio) && !is_number($cantidad)){
           echo "<p>* Dato invalido </p>" ;
         }
 

     $sql = "INSERT INTO Producto (nombre,precio,cantidad) VALUES ('$producto','$precio','$cantidad')";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    mysqli_close($conn);
}



?>
