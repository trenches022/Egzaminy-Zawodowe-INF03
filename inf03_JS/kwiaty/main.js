function przejdzDoBloku(numer) {
  let blok1 = document.getElementById('blok1');
  let blok2 = document.getElementById('blok2');
  let blok3 = document.getElementById('blok3');

  if (numer == 2) {
    blok1.style.visibility = 'hidden';
    blok2.style.visibility = 'visible';
    blok3.style.visibility = 'hidden';
  }
  else if (numer == 3){
    blok1.style.visibility = 'hidden';
    blok2.style.visibility = 'hidden';
    blok3.style.visibility = 'visible';
  }


}

function zatwierdz() {
  const haslo = document.getElementById('haslo1').value;
  const potwierdzHaslo = document.getElementById('haslo2').value;

  if (haslo !== potwierdzHaslo) {
    window.alert('Podane hasla sa rozne');
  }

  const imie = document.getElementById('imie').value;
  const nazwisko = document.getElementById('nazwisko').value;

  console.log(`Witaj ${imie} ${nazwisko}`);
  

}