<!DOCTYPE html>
<!-- lekcja 7 -->
<html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Użytkownicy</title>
  </head>
  <body>
    <h4>Użytkownicy</h4>
<?php
  $connect = new mysqli("localhost", "root", "", "zsk_4bg1_baza1");
  $sql = "SELECT * FROM `users`;";
  $result = $connect->query($sql);
  //echo $row['name'];
  //print_r($row);

  while ($row = $result->fetch_assoc()) {
    echo  <<< ROW
    Id: {$row['id']} <br>
    Imię: {$row['name']}, Nazwsiko: {$row['surname']}<br>
    Data urodzin: {$row['birthday']}
    <hr>
ROW;
  }
  $connect->close();
?>
  </body>
</html>
