const apply = () => {
  const beeImg = document.getElementById('pszczola');
	const blur = document.getElementById('blur').checked;
	const sepia = document.getElementById('sepia').checked;
	const negatyw = document.getElementById('negatyw').checked;
    
  let filterValue = '';

  if (blur) {
    filterValue += 'blur(6px)';
  }

  if (sepia) {
    filterValue += 'sepia(100%)';
  }

  if (negatyw) {
    filterValue += 'invert(100%)';
  }

beeImg.style.filter = filterValue;
}

const kolorowy = () => {
  const img = document.getElementById('pomarancza');
  img.style.filter = 'none';
}

const czarnobialy = () => {
  const img = document.getElementById('pomarancza');
  img.style.filter = 'grayscale(100%)';
}

const transparensy = () => {
  const img = document.querySelector('.blok2 img');
  const transparensyValue = document.getElementById('przezroczystosc').value;
  img.style.filter = `opacity(${transparensyValue}%)`;
}

const jasnosc = () => {
  const img = document.querySelector('.blok3 img');
  const jasnoscValue = document.getElementById('jasnosc').value;
  img.style.filter = `brightness(${jasnoscValue}%)`;
}



