<?php
$name = $_GET['name'];
$mail = $_GET['mail'];
$age = $_GET['age'];



  if (strlen($name) > 3 && strpos($mail,'.') && strpos($mail,'@') && number_format($age)) {
    echo
    'accesso garantito';
  }
 else{
  echo 'accesso rifuitata';
}

 ?>
