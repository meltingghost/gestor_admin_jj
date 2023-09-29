<?php
  // Establish the database connection
  require_once "../database/conexion.php";

  // Retrieve the selected category from the request parameters
  $selectedMateria = $_GET['materia'];

  // Prepare a statement to retrieve a random question from the selected category
  $questionQuery = "SELECT * FROM preguntas_ruleta WHERE materia = ? ORDER BY RAND() LIMIT 1";
  $statement = $conectar->prepare($questionQuery);
  $statement->bind_param("s", $selectedMateria);
  $statement->execute();
  
  // Bind the result to variables
  $statement->bind_result($id, $materia, $question, $respuesta, $fecha);

  // Fetch the result
  $statement->fetch();

  // Close the statement and the database connection
  $statement->close();
  $conectar->close();

  // Return the selected question as a JSON response
  header('Content-Type: application/json');
  echo json_encode(['question' => $question]);
?>