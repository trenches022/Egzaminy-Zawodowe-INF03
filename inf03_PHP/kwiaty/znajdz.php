<!DOCTYPE html>
<html lang="pl">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="styl3.css">
  <title>Kwiaty</title>
</head>
<body>
  
  <header>
    <h1>Grupa Polskich Kwiaciarni</h1>
  </header>
    
  <div class="lewy">
    <h2>Menu</h2>
    <ol>
      <li>
        <a href="index.html">Strona Główna</a>
      </li>
      <li>
        <a href="https://www.kwiaty.pl/" target="_blank">Rozpoznaj kwiaty</a>
      </li>
      <li>
        <a href="znajdz.php">Znajdź kwiaciarnię
          <ul>
            <li>w Warszawie</li>
            <li>w Malborku</li>
            <li>w Poznaniu</li>
          </ul>
        </a>
      </li>
    </ol>
  </div>

  <div class="prawy">
    <h2>Znajdź kwiaciarnię</h2>
    <form action="znajdz.php" method="post">
      <label>Podaj nazwę miejscowości
        <input type="text" name="miasto">
      </label>
      <button type="submit" name="wyslij">SPRAWDŹ</button>
    </form>
    <?php
      $polaczenie = mysqli_connect('localhost', 'root', '', 'kwiaciarnia');
      if (isset($_POST['wyslij'])) {
        $miasto = $_POST['miasto'];
        $zapytanie = "SELECT nazwa, ulica FROM kwiaciarnie WHERE miasto = '$miasto'";
        $wynik = mysqli_query($polaczenie, $zapytanie);
        while ($wiersz = mysqli_fetch_array($wynik)) {
          echo "<h3>$wiersz[0], $wiersz[1]</h3>";
        }
      }
      mysqli_close($polaczenie);
    ?>
  </div>

  <footer>
    <p>Stronę opracował: trenches022</p>
  </footer>

</body>
</html>