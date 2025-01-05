<!DOCTYPE html>
<html lang="pl">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="styl.css">
  <title>Poziomy rzek</title>
</head>
<body>
  
  <div class="baner">
    <img src="obraz1.png" alt="Mapa Polski">
  </div>

  <div class="baner1">
    <h1>Rzeki w województwie dolnośląskim</h1>
  </div>  

  <div class="menu">
  <form action="poziomRzek.php" method="post">
    <input type="radio" name="stan" id="wszystkie" value="wszystkie">
    <label for="wszystkie">Wszystkie</label>
      <input type="radio" name="stan" id="ostrzegawczy" value="ostrzegawczy">
	    <label for="ostrzegawczy">Ponad stan ostrzegawczy</label>
	
	    <input type="radio" name="stan" id="alarmowy" value="alarmowy">
	    <label for="alarmowy">Ponad stan alarmowy</label>
	
	    <button type="submit" name="pokaz">Pokaż</button>
   </form>
  </div>

  <div class="lewy">
    <h3>Stany na dzień 2022-05-05</h3>
    <table>
      <tr>
        <th>Wodomierz</th>
        <th>Rzeka</th>
        <th>Ostrzegawczy</th>
        <th>Alarmowy</th>
        <th>Aktualny</th>
      </tr>
      <?php
        $polaczenie = mysqli_connect('localhost', 'root', '', 'rzeki');
        if (isset($_POST['stan'])) {
          $stan = $_POST['stan'];
          if($stan == 'wszystkie'){
            $zapytanie = "SELECT nazwa, rzeka, stanOstrzegawczy, stanAlarmowy, stanWody FROM wodowskazy JOIN pomiary ON wodowskazy.id = wodowskazy_id WHERE dataPomiaru='2022-05-05';"; 
          }
          elseif ($stan == 'ostrzegawczy') {
            $zapytanie = "SELECT nazwa, rzeka, stanOstrzegawczy, stanAlarmowy, stanWody FROM wodowskazy JOIN pomiary ON wodowskazy.id = wodowskazy_id WHERE dataPomiaru='2022-05-05' AND stanWody > stanOstrzegawczy;";
          }
          elseif ($stan == 'alarmowy') {
            $zapytanie = "SELECT nazwa, rzeka, stanOstrzegawczy, stanAlarmowy, stanWody FROM wodowskazy JOIN pomiary ON wodowskazy.id = wodowskazy_id WHERE dataPomiaru='2022-05-05' AND stanWody > stanAlarmowy;";
          }
          $wynik = mysqli_query($polaczenie, $zapytanie);
          while ($wiersz = mysqli_fetch_array($wynik)) {
            echo "<tr>";
            echo "<td>$wiersz[0]</td>";
            echo "<td>$wiersz[1]</td>";
            echo "<td>$wiersz[2]</td>";
            echo "<td>$wiersz[3]</td>";
            echo "<td>$wiersz[4]</td>";
            echo "</tr>";
          }
        }
      ?>
    </table>
  </div>

  <div class="prawy">
    <h3>Informacje</h3>
    <ul>
      <li>Brak  ostrzeżeń  o  burzach z gradem</li>
      <li>Smog w mieście Wrocław</li>
      <li>Silny wiatr w Karkonoszach</li>
    </ul>
    <h3>Średnie stany wód</h3>
      <?php
        $zapytanie4 = "SELECT dataPomiaru, AVG(stanWody) FROM pomiary GROUP BY dataPomiaru";
        $wynik = mysqli_query($polaczenie, $zapytanie4);
        while ($wiersz = mysqli_fetch_array($wynik)) {
          echo "<p>$wiersz[0]: $wiersz[1]</p>";
        }
        mysqli_close($polaczenie);
      ?>
     <a href="https://komunikaty.pl">Dowiedz się więcej</a>
     <img src="obraz2.jpg" alt="rzeka">
  </div>

  <div class="stopka">
    <p>Strone wykonał: trenches022</p>
  </div>

</body>
</html>