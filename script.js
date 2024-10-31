function cambioBandieraSelect() {
    let bandiera = document.getElementById("bandiera");
    let valuta = document.getElementById("valuta");
    urlBandiera(valuta.value, bandiera);
}

function urlBandiera(valuta, bandiera) {
    switch (valuta) {
        case "dol":
            bandiera.src = "./images/us-flag.gif";
            break;
        case "yen":
            bandiera.src = "./images/ja-flag.gif";
            break;
        case "fra":
            bandiera.src = "./images/sz-flag.gif";
            break;
        case "ste":
            bandiera.src = "./images/uk-flag.gif";
            break;
    }
}