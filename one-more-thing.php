<?php
  require_once('inc/variables.php');
  require_once('inc/db-connect.php');

  db_connect();

  // Collecting the variables from the form
  $name = "Jacob";
  $dateCreated = date("Y-m-d H:i:s", time());
  $msg = "this is my message for the email";
  $hash = $name . $dateCreated;
  $id = hash('sha256', $hash);
  $email = "hello@bowermandigital.com";
  $phone = "0757778997";
  $emailValid = 0;

  $sql_statement = "
  INSERT INTO users (id, name, email, phone, message, emailValid, dateCreated) 
  VALUE ('$id', '$name', '$email', '$phone', '$msg', '$emailValid', '$dateCreated')";

  $users = $db_link->query($sql_statement) or die($db_link->error);

  $eventValid = true;
  echo $hash;
  echo $id;