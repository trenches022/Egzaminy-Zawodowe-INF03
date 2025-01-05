<!DOCTYPE html>
<html lang="pl">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="styl.css">
  <title>Ważenie samochodów ciężarowych</title>
</head>
<body>
  
  <div class="baner">
    <h1>Ważenie  pojazdów  we Wrocławiu</h1>
  </div>

  <div class="baner1">
    <img src="obraz1.png" alt="waga">
  </div>

  <div class="lewy">
    <h2>Lokalizacje wag</h2>
    <ol>
      <?php
        $polaczenie = mysqli_connect('localhost', 'root', '', 'wazenietirow');
        $zapytanie2 = "SELECT ulica FROM lokalizacje";
        $wynik = mysqli_query($polaczenie, $zapytanie2);
        while ($wiersz = mysqli_fetch_array($wynik)) {
          echo "<li>ulica $wiersz[0]</li>";
        }
      ?>
    </ol>
    <h2>Kontakt</h2>
    <a href="mailto:wazenie@wroclaw.pl">napisz</a>
  </div>

  <div class="srodkowy">
    <h2>Alerty</h2>
    <table>
    <tr>
      <th>Rejestracja</th>
      <th>Ulica</th>
      <th>Waga</th>
      <th>Dzień</th>
      <th>Czas</th>
    </tr>
    <tr>
      <td>AB12345</td>
      <td>Warszawska 10</td>
      <td>1200 kg</td>
      <td>18-10-2024</td>
      <td>09:30</td>
    </tr>
    <tr>
      <td>CD67890</td>
      <td>Krakowska 22</td>
      <td>950 kg</td>
      <td>18-10-2024</td>
      <td>10:00</td>
    </tr>
    <tr>
      <td>EF11223</td>
      <td>Piłsudskiego 8</td>
      <td>800 kg</td>
      <td>18-10-2024</td>
      <td>11:15</td>
    </tr>
    <tr>
      <td>GH44556</td>
      <td>Szkolna 5</td>
      <td>1300 kg</td>
      <td>18-10-2024</td>
      <td>12:45</td>
    </tr>
    <tr>
      <td>IJ78901</td>
      <td>Mickiewicza 14</td>
      <td>1050 kg</td>
      <td>18-10-2024</td>
      <td>14:00</td>
    </tr>
        <?php
          $zapytanie4 = "SELECT wagi.rejestracja, wagi.waga, wagi.dzien, wagi.czas, lokalizacje.ulica FROM wagi JOIN lokalizacje ON wagi.lokalizacje_id = lokalizacje.id WHERE wagi.waga > 5";
          $wynik = mysqli_query($polaczenie, $zapytanie4);
          while ($wiersz = mysqli_fetch_array($wynik)) {
            echo "<tr>";
            echo "<td>$wiersz[0]</td>";
            echo "<td>$wiersz[4]</td>";
            echo "<td>$wiersz[1]</td>";
            echo "<td>$wiersz[2]</td>";
            echo "<td>$wiersz[3]</td>";
        echo "</tr>";
          }
        ?>
    </table>
    <?php
      $zapytanie3 = "INSERT INTO wagi (lokalizacje_id, waga, rejestracja, dzien, czas) VALUES (5, FLOOR(1 + (RAND() * 10)), 'DW12345', CURRENT_DATE, CURRENT_TIME)";
      $wynik = mysqli_query($polaczenie, $zapytanie3);
      header(header: "refresh: 10");
      mysqli_close($polaczenie);
    ?>
  </div>

  <div class="prawy">
    <img src="obraz2.jpg" alt="tir">
  </div>

  <div class="stopka">
    <p>Strone wykonał: trenches022</p>
  </div>

</body>
</html>