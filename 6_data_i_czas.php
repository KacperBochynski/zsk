<?php
// date()
  echo "dzień-miesiąc-rok: ".date('d-m-Y').'<br>'; //21-10-2021
  echo date('m,d,y').'<br>'; //10-21-21
  echo date('d,M,Y').'<br>';
  echo date('d,F,Y').'<br>';

  setlocale(LC_ALL, 'polish');
  echo strftime('%d %B %Y'),'<br>';

  echo date('G:i:s'),'<br>'; //8:14:57
  echo date('G:i:sa'),'<br>'; //8:14:57am
  echo date('H:i:s'),'<br>'; //08:14:57
?>
<script>
  setTimeout(function(){
    window.location.reload();
  }, 1000)
</script>
<?php
 // getdate()
 $date=getdate();
 //echo $date; nie dziła bo to jest tablica
 echo "<pre>";
  print_r($date);
 echo "</pre>";

 echo $date['wday'],'<br>'; //4
 echo $date['yday'],'<br>'; //293

 echo date('L'),'<br>'; //0 - rok nie jest przestępny

 // mktime()
 // $today=mktime(0,0,0,21,10,2021)
 $today=mktime(0,0,0,date('m'),date('d'),date('Y'));
 echo $today; //1634767200

 //ile lat mineło od 1 stycznia 1970
  $year=$today/(60*60*24*365);
  echo (int)$year,'<br>'; //51

  $lastYear=mktime(0,0,0,date('m'),date('d'),date('Y')-1);
  $year=$today/(60*60*24*365);
  echo (int)$year,'<br>'; //50
?>
