<?php
//usuniecie białych znaków (trim)
//zamienienie pierwszej litery na drugą (ucfirst)
//od drugiej litery małe znaki (strtolower)
//drugi parametr bedzie okreslal długośc stringa dlugosc stringa (strlen)
  require_once '../functions/5_function.php';
  show();
  if (!empty($_POST['name'])){
    echo "imię: ".stringValidate($_POST['name'], 4)." , długość: ".strlen(stringValidate($_POST['name'],4));
  }

 ?>
