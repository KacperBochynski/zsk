<!DOCTYPE html>
    <html>
        <head>
            <!--w reqire fatal eror i nie wyswietla plikow a include tylko warning-->
            <!--ctrl+shift+k usuniecie lini-->
            <meta charset="utf-8">
            <title>Dane użytkownika</title>
        </head>
        <body>
            <h3>Dane uzytkownika</h3>
            <!--postem można wysłac wiecej danych i jest bezpieczcnieszy od get i o co chodzi z form?-->
            <form method="post">
                <input type="text" name="name" placeholder="Podaj imię"><br><br>
                <input type="submit" value="Zatwierdź">
            </form>
            <?php
                if(!empty($_POST['name'] AND $_POST['surname']))
                    //echo $_GET['name'];
                    echo <<< L
                        Imię: {$_GET['name']} <br>
                        Nazwisko: $_GET[surname] <br>
                    L;
                }
                else{
                    echo "Wypełni wszystkie dane";
                }
            ?>
        </body>
    </html>
