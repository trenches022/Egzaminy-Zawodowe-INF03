let aktualneZdjecie = 1;

const prev = () => {
    aktualneZdjecie -= 1;
    if (aktualneZdjecie < 1) aktualneZdjecie = 7
    const aktywneZdjecie = document.getElementById('aktywne_zdjecie');
    aktywneZdjecie.src = aktualneZdjecie + ".jpg"
}

const next = () => {
    aktualneZdjecie += 1;
    if (aktualneZdjecie > 7) aktualneZdjecie = 1
    const aktywneZdjecie = document.getElementById('aktywne_zdjecie');
    aktywneZdjecie.src = aktualneZdjecie + ".jpg"
}
