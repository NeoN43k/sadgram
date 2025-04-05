<?php 
require_once('db.php');

$email = $_POST['email'];
$password = $_POST['password'];


if (empty($email) || empty($password)) {
  echo "Заполните все поля";
} else {
  $sql = "SELECT * FROM `users` WHERE email = '$email' AND pass = '$password'";
  $result = $conn->query($sql);

  if ($result->num_rows > 0){ 
  while($row = $result->fetch_assoc()){
    echo "Добро пожаловать пожаловать " . $row['username'];
    }
  } else {
      echo "Нет такого пользователя";
    }
  }