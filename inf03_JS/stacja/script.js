function oblicz() {
  const rodzaj = document.getElementById('rodzaj').value;
  const ilosc = document.getElementById('ilosc').value;
  const wynik = document.getElementById('wynik');

  if (rodzaj == 1) cena = 4
	else if (rodzaj == 2) cena = 3.5
	else cena = 0
  wynik.innerHTML = "koszt paliwa: " + cena * ilosc + " zł"
}
