<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styl2.css">
    <title>Warzywniak</title>
</head>
<body>

    <header>
        <div class="lewy">
            <h1>Internetowy sklep z eko-warzywami</h1>
        </div>

        <div class="prawy">

            <ol>

                <li>warzywa</li>
                <li>owoce</li>
                <li><a href="https://terapiasokami.pl/">soki</a></li>

            </ol>

        </div>

    </header>

    <main>
        <?php
        $polaczenie = mysqli_connect("localhost","root","","warzywniak");
        $zapytanie1 = "SELECT nazwa, ilosc, opis, cena, zdjecie FROM produkty WHERE Rodzaje_id IN (1, 2)";
        $wynik = mysqli_query($polaczenie, $zapytanie1);
        while($wiersz = mysqli_fetch_array($wynik)){
            echo '<div>';
            echo '<img src="img/'.$wiersz["zdjecie"].'"alt=".warzywniak.">';
            echo '<h5>'.$wiersz["nazwa"].'</h5>';
            echo '<p>opis:'.$wiersz["opis"].'</p>';
            echo '<p>na stanie:'.$wiersz["ilosc"].'</p>';
            echo '<h2>'.$wiersz["cena"].'zł</h2>';
            echo '</div>';
        }
        ?>
        
    </main>

    <footer>

        <form method="post">
            
            <label for="name">Nazwa:</label>
            <input type="text" name="name" id="name">
            <label for="price">Cena:</label>
            <input type="text" name="price" id="price">
            <button type="submit" name="submit">Dodaj produkt</button>

            <?php
        if(isset($_POST['name']) && isset($_POST['price'])){
            $polaczenie = mysqli_connect("localhost","root","","warzywniak");
            $nazwa = $_POST['name'];
            $cena = $_POST['price'];
            $zapytanie2 = "INSERT INTO produkty VALUES (NULL, '1', '4', '$nazwa', '10', NULL, '$cena', 'owoce.jpg')";
            $wynik2 = mysqli_query($polaczenie, $zapytanie2);
            mysqli_close($polaczenie);
        } 
        ?>
        </form>
        
        <p>Stronę wykonał: trenches022</p>

    </footer>

</body>
</html>