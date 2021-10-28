<?php
  //za pomocą echo nie można tego wyświetlić
  echo "<pre>";
    print_r($_POST);//wypisywanie tablic
  echo "</pre>";
  if (!empty($_POST['name']) && !empty($_POST['geometricFigure'])) {
    //echo 'ok';
    switch ($_POST['geometricFigure']) {
      case 'kwadrat':
          header('location: ./square.php');
        break;
      case 'prostokat':
          echo "prostokąt";
        break;
    }
  }else{
    ?>
      <script>
        history.back();
      </script>
    <?php
  }
?>
