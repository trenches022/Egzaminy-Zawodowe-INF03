const zmienCytat = () => {
  let cytat1 = document.getElementById('cytat1');
  let cytat2 = document.getElementById('cytat2');
  let cytat3 = document.getElementById('cytat3');

  if (cytat1.style.display !== 'none') {
    cytat1.style.display = 'none';
    cytat2.style.display = 'block';
  } else if (cytat2.style.display !== 'none') {
    cytat2.style.display = 'none';
    cytat3.style.display = 'block';
  } else {
    cytat3.style.display = 'none';
    cytat1.style.display = 'block';
  }
  
}