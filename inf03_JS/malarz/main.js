function policz() {
  const powierzchnia = document.getElementById('powierzchnia').value;
  const wynik = document.getElementById('wynik');
  let litry = 4;
  const ileFarby = Math.round(powierzchnia / litry);
  wynik.innerHTML = `Liczba potrzebnych puszek: ${ileFarby}`;

}