<!DOCTYPE html>
<html lang="pl">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="styl.css">
  <title>Hodowla świnek morskich</title>
</head>
<body>
  
  <header>
    <h1>Hodowla  świnek  morskich  -  zamów 
      świnkowe maluszki</h1>
  </header>

  <section id="menu">
    <a href="peruwianka.php">Rasa Peruwianka</a>
    <a href="american.php">Rasa American</a>
    <a href="crested.php">Rasa Crested</a>
  </section>

  <section id="prawy">
    <h3>Poznaj wszystkie rasy świnek morskich</h3>
    <ol>
      <?php
        $polaczenie = mysqli_connect('localhost', 'root', '', 'hodowla');
        $zapytanie4 = "SELECT rasa FROM rasy";
        $wynik = mysqli_query($polaczenie, $zapytanie4);
        while ($wiersz = mysqli_fetch_array($wynik)) {
          echo '<li>';
          echo "$wiersz[0]";
          echo '</li>';
        }
      ?>
    </ol>
  </section>

  <section id="glowny">
    <img src="peruwianka.jpg" alt="Świnka morska rasy peruwianka">
        <?php
          $zapytanie2 = "SELECT DISTINCT data_ur, miot, rasa FROM swinki JOIN rasy ON swinki.rasy_id = rasy.id WHERE rasy_id = 1";
          $wynik = mysqli_query($polaczenie, $zapytanie2);
          while ($wiersz = mysqli_fetch_array($wynik)) {
            echo "<h2>Rasa: $wiersz[2]</h2>";
            echo "<p>Data urodzenia: $wiersz[0]</p>";
            echo "<p>Oznaczenie  miotu: $wiersz[1]</p>";
          }
        ?>
    <hr>
    <h2>Świnki w tym miocie</h2>
        <?php
          $zapytanie3 = "SELECT imie, cena, opis FROM swinki WHERE rasy_id = 1";
          $wynik = mysqli_query($polaczenie, $zapytanie3);
          while ($wiersz = mysqli_fetch_array($wynik)) {
            echo "<h3>$wiersz[0] - $wiersz[1] zł</h3>";
            echo $wiersz[2];
          }

          mysqli_close($polaczenie);
        ?>
  </section>

  <footer>
    <p>strone wykonal: trenches022</p>
  </footer>

</body>
</html>