<?php
  // Establish the database connection
  require_once "../database/conexion.php";

  // Retrieve the question and answer from the request parameters
  $selectedQuestion = $_GET['question'];
  $userAnswer = $_GET['answer'];

  // Prepare a statement to retrieve the correct answer for the question
  $answerQuery = "SELECT respuesta FROM preguntas_ruleta WHERE pregunta = ?";
  $statement = $conectar->prepare($answerQuery);
  $statement->bind_param("s", $selectedQuestion);
  $statement->execute();

  // Bind the result to a variable
  $statement->bind_result($correctAnswer);

  // Fetch the result
  $statement->fetch();

  // Close the statement
  $statement->close();

  // Compare the user's answer with the correct answer
  $isCorrect = ($userAnswer === $correctAnswer);

  // Return the result as a JSON response
  header('Content-Type: application/json');
  echo json_encode(['correct' => $isCorrect]);

  // Close the database connection
  $conectar->close();
?>