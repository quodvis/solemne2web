
<h1>Catalogo de productos</h1>

<?php

include 'vars.php';

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id, nombre, precio FROM Producto";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  ?>
  <table border=1>
    <tr>
      <th>ID</th>
      <th>Nombre</th>
      <th>Precio</th>
    </tr>
  <?php
  while($row = $result->fetch_assoc()) {
    echo "<tr>
      <td>". $row["id"]."</td>
      <td>". $row["nombre"]."</td>
      <td>". $row["precio"]."</td>
    </tr>";
  }
  ?>
  </table>
  <?php

} else {
  echo "0 results";
}

$conn->close();

?>