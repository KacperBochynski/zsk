<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Kwadrat</title>
  </head>
  <body>
    <h3>Kwadrat</h3>
    <form method="get">
      <input type="text" name="sideA" placeholder="Podaj długość boku A"><br><br>
      <input type="submit" value="Oblicz">
    </form>
    <?php
      //if (!empty($_GET['sideA']) && is_numeric($_GET['sideA'])){
      if (!empty($_GET['sideA'])){
        //echo "pole = ", $_GET['sideA']**2, "cm^2";
        $sideA=str_replace(',','.', $_GET['sideA']);
        $area=$sideA**2;
        $circuit=$sideA*4;
        echo <<< RESULT
          <hr>
          Pole kwadratu wynosi: $area cm<sup>2</sup><br>
          Obwód kwadratu wynosi $circuit cm
        RESULT;
      }else(isset($_GET['button'])) {
        echo "Wypełni wszystkie pola!";
      }
    ?>
  </body>
</html>
