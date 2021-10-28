<!DOCTYPE html>
<!-- lekcja 7 -->
<html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <!-- naucz sie jak sie robi inne punktowanie -->
    <link rel="stylesheet" href="./css/style.css">
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
  echo <<< TABLE
    <table>
      <tr>
        <th>ID</th>
        <th>Imię</th>
        <th>Nazwisko</th>
        <th>Data urodzenia</th>
        <th>Miasto</th>
      </tr>
TABLE;
  while ($row = $result->fetch_assoc()) {
    echo  <<< ROW
    <tr>
      <th>{$row['id']}</th>
      <th>{$row['name']}</th>
      <th>{$row['surname']}</th>
      <th>{$row['birthday']}</th>
      <th>{$row['miasto']}</th>
    </tr>
ROW;
  }
  echo "</table>";
  $connect->close();
?>
  </body>
</html>
