<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Prostokąt</title>
  </head>
  <body>
    <h3>Prostokąt</h3>
    <form method="get">
      <input type="text" name="sideA" placeholder="Podaj długość boku A"><br><br>
      <input type="text" name="sideB" placeholder="Podaj długość boku B"><br><br>
      <input type="submit" value="Oblicz">
    </form>
    <?php
      if (!empty($_GET['sideA']) && !empty($_GET['sideA'])){
        //echo "pole = ", $_GET['sideA']**2, "cm^2";
        $sideA=str_replace(',','.', $_GET['sideA']);
        $sideA=str_replace(',','.', $_GET['sideB']);
        $area=$sideA*$sideB;
        $circuit=$sideA*2+$sideB*2;
        echo <<< RESULT
          <hr>
          Pole prostokąta wynosi: $area cm<sup>2</sup><br>
          Obwód prostokąta wynosi $circuit cm
        RESULT;
      }else(isset($_GET['button'])) {
        echo "Wypełni wszystkie pola!";
      }
    ?>
  </body>
</html>
