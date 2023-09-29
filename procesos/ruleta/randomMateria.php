<?php
  // Establish the database connection
  require_once "../database/conexion.php";

  // Retrieve a random category from the database
  $materiaQuery = "SELECT * FROM materias_ruleta ORDER BY RAND() LIMIT 1";
  $materiaResult = $conectar->query($materiaQuery);
  $materia = $materiaResult->fetch_array(MYSQLI_ASSOC);

  // Close the database connection
  $conectar->close();

  // Return the selected category as a JSON response
  header('Content-Type: application/json');
  echo json_encode(['materia' => $materia['nombreMateria']]);
?>