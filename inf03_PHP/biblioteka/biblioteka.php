<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Biblioteka publiczna</title>
</head>
<body>
    
    <div class="baner">
    <h1>Biblioteka w Książkowicach Wielkich</h1>
    </div>

    <div class="lewy">
    <h3>Polecamy dzieła autorów:</h3>
        <ol>
            <?php
                $polaczenie = mysqli_connect('localhost', 'root', '', 'biblioteka');
                $zapytanie1 = "SELECT `imie`, `nazwisko` FROM `autorzy` ORDER BY `nazwisko` ASC";
                $wynik1 = mysqli_query($polaczenie, $zapytanie1);
                while($wiersz1 = mysqli_fetch_row($wynik1)){
                        echo "<li>$wiersz1[0] $wiersz1[1]</li>";
                }
            ?>
        </ol>
    </div>

    <div class="srodkowy">
        <h3>ul. Czytelnicza 25,&nbsp;Książkowice Wielkie</h3>
        <p><a href="sekretariat@biblioteka.pl">Napisz do nas</a></p>
        <img src="biblioteka.png" alt="książki">
    </div>
    


    <div class="prawy">
    <form action="biblioteka.php" method="post">
                <label for="imie">Imię: </label>
                <input type="text" name="imie" id="imie"><br>

                <label for="imie">Nazwisko: </label>
                <input type="text" name="nazwisko" id="nazwisko"><br>

                <label for="symbol">Symbol: </label>
                <input type="number" name="symbol" id="symbol"><br>

                <button type="submit" name="dodaj">DODAJ</button>
    </div>

    <div class="prawy1">
        <?php
            @$imie = $_POST['imie'];
            @$nazwisko = $_POST['nazwisko'];
            @$symbol = $_POST['symbol'];
            $zapytanie2 = "INSERT INTO `czytelnicy` VALUES (NULL, '$imie', '$nazwisko', '$symbol')";
            $wynik2 = mysqli_query($polaczenie, $zapytanie2);
            if($wynik2){
                echo "Czytelnik $imie $nazwisko został(a) dodany do bazy danych";
            }
            mysqli_close($polaczenie);
        ?>
    </div>

    <div class="stopka"><p>Projekt strony: trenches022</p></div>

</body>
</html>