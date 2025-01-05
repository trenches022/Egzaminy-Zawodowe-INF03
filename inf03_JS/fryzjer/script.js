function promocja() {  
  const krotkie = document.getElementById('krotkie').checked;
  const srednie = document.getElementById('srednie').checked;
  const poldlugie = document.getElementById('poldlugie').checked;
  const dlugie = document.getElementById('dlugie').checked;
  let wynik = document.getElementById('wynik');

  let cenaKrotkie = 15;
  let cenaSrednie = 20;
  let cenaPoldlugie = 30;
  let cenaDlugie = 40;

  if (krotkie) {
    wynik.innerHTML = `cena promocyjna: ${cenaKrotkie}`;
  }

  if (srednie) {
    wynik.innerHTML = `cena promocyjna: ${cenaSrednie}`;
  }

  if (poldlugie) {
    wynik.innerHTML = `cena promocyjna: ${cenaPoldlugie}`;
  }

  if (dlugie) {
    wynik.innerHTML = `cena promocyjna: ${cenaDlugie}`;
  }

}