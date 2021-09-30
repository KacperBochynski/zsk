<?php
    //jak podłączyć githuba???
    //jak to odpalić???

    echo "ZSK"<br>;
    echo "ZSK";

    $name="Janusz";
    echo '<br>Twoje imię: $name' //Twoje imię: $name
    echo "<br>Twoje imię: $name" //Twoje imię: Janusz


    $x='x';
    $y='y';

    //konkatenacja . ???
    echo $x.$y;

    //typy danych
    //boolean
    $prawda=true;
    $fałsz=false;
    echo $prawda; //1
    echo $fałsz; //nic nie wyświetla

    //całkowity
    $calkowita=10;
    $bin=0b1011; //11
    $oct=011; //9
    $hex=0x11; //17

    echo "<hr>$hex";

    //zmiennoprzecinkowe

    $x = 10.5;

    echo gettype($x); //double (w PHP nie ma róznicy między double a float)
    echo gettype($bin); //integer
    echo gettype($prawda)."<hr>"; //boolean

    //heredoc
    //to "E" to etykieta
    //nie można używać spacji
    //E nie może przekroczyć granicy tekstu
    $surname="Nowak";
    echo <<< E
        Imię i nazwisko:
        Janusz $surname <hr>
        Poznań
    E;

    $text = <<< E
        Imię i nazwisko:
        Janusz $surname <hr>
        Poznań
    E;

    echo $text;

    //nowdoc
    echo <<< 'E'
        <hr><hr>
        Imię i nazwisko:
        Janusz $surname <hr>
        Poznań
    E;

    echo "<br>Nazwa zmiennej surname: \$surname"
?>
