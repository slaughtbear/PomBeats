<?php
$idproducto=$_GET["idproducto"];
if ($idproducto=="") {
  echo 'El producto esta vacio';
  
}

            include "conexion.php";
            // Create connection
            $conn = new mysqli($servername, $username, $password, $dbname);
            // Check connection
            if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
            }

            $sql = "SELECT * FROM productos where idproducto = $idproducto";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
                $idproducto=$row["idproducto"];
                $nombre=$row["nombre"];
                $detalle=$row["descripcion"];
                $precio=$row["precio"];
                $img1=$row["imgnombre"];
                $img2=$row["imgnombre2"];
                "<br>";
            }
            } else {
            echo "0 results";
            }
            $conn->close();
            
?>




<!DOCTYPE html>
<html>
<head>
<title>Detalles</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style>
body {font-family: "Times New Roman", Georgia, Serif;}
h1, h2, h3, h4, h5, h6 {
  font-family: "Playfair Display";
  letter-spacing: 5px;
}
</style>
</head>
<body>

<!-- Navbar (sit on top) -->
<div class="w3-top">
  <div class="w3-bar w3-white w3-padding w3-card" style="letter-spacing:4px;">
    <a href="#home" class="w3-bar-item w3-button">Gourmet au Catering</a>
    <!-- Right-sided navbar links. Hide them on small screens -->
    <div class="w3-right w3-hide-small">
      <a href="#about" class="w3-bar-item w3-button">About</a>
      <a href="#menu" class="w3-bar-item w3-button">Menu</a>
      <a href="#contact" class="w3-bar-item w3-button">Contact</a>
    </div>
  </div>
</div>

<!-- Header -->
<header class="w3-display-container w3-content w3-wide" style="max-width:1600px;min-width:500px" id="home">
  <img class="w3-image" src="../img/<?php echo $img2; ?>" alt="Hamburger Catering" width="1600" height="800">
  <div class="w3-display-bottomleft w3-padding-large w3-opacity">
    <h1 class="w3-xxlarge"><?php echo $nombre;  ?></h1>
  </div>
</header>

<!-- Page content -->
<div class="w3-content" style="max-width:1100px">

  <!-- About Section -->
  <div class="w3-row w3-padding-64" id="about">
    <div class="w3-col m6 w3-padding-large w3-hide-small">
    <img src="../img/<?php echo $img1; ?>" class="w3-round w3-image w3-opacity-min" alt="Table Setting" width="600" height="750">

    </div>

    <div class="w3-col m6 w3-padding-large">
      <h1 class="w3-center"><?php echo $nombre;  ?></h1><br>
      <h5 class="w3-center"><?php echo $precio;  ?></h5><br>
      <h5 class="w3-center"><?php echo $detalle;  ?></h5>
      
    </div>
  </div>
  
  <hr>
  
<!-- End page content -->
</div>

</body>
</html>