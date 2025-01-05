<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Poznaj Europę</title>
</head>
<body>
    
    <div class="baner">
        <h1>BIURO PODRÓŻY</h1>
    </div>

    <div class="lewy">
        <h2>Promocje</h2>
        <table>
            <tr>
                <th>Warszawa</th>
                <th>Od 600 zł</th>
            </tr>

            <tr>
                <th>Wenecja</th>
                <th>Od 1200 zł</th>
            </tr>

            <tr>
                <th>Paryż</th>
                <th>Od 1200 zł</th>
            </tr>

        </table>
    </div>

    <div class="srodkowy">
        <h2>W tym roku jedziemy do...</h2>
        <?php
            $polaczenie = mysqli_connect('localhost', 'root', '', 'podroze');
            $zapytanie = "SELECT `nazwaPliku`, `podpis` FROM `zdjecia` ORDER BY `podpis` ASC";
            $wynik = mysqli_query($polaczenie, $zapytanie);
            while($row = mysqli_fetch_array($wynik)){
                echo "<img src='$row[0]' alt='$row[1]' title='$row[1]'>";
            }
        ?>
    </div>

    <div class="prawy">
        <h2>Kontakt</h2>
        <a href="mailto:biuro@wycieczki.pl">napisz do nas</a>
        <p>telefon: 444555666</p>
    </div>


    <div class="dane">
        <h3>W poprzednich latach byliśmy...</h3>
        <ol>
                <?php
                    $zapytanie = "SELECT `dataWyjazdu`, `cel` FROM `wycieczki` WHERE `dostepna` = 0";
                    $wynik = mysqli_query($polaczenie, $zapytanie);
                    while($row = mysqli_fetch_array($wynik)){
                        echo "<li>Dnia $row[1] pojechaliśmy do $row[0]</li>";
                    }
                    mysqli_close($polaczenie);
                ?>
        </ol>
    </div>

    <div class="stopka">
        <p>Stronę wykonał: trenches022</p>
    </div>

</body>
</html>