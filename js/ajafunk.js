function tana() {
    let now = new Date();

    let kuupaev = now.toLocaleDateString();
    let kellaaeg = now.toLocaleTimeString();
    let koos = now.toLocaleString();

    let tulemus = document.getElementById("tulemus");

    tulemus.innerHTML = "<b>kuupäev:</b> " + kuupaev + "<br>" +
        "<b>kellaaeg:</b> " + kellaaeg + "<br>" +
        "<b>Kuupäev ja kellaaeg:</b> " + koos;

    console.log("Kuupäev: " + kuupaev);
    console.log("Kellaaeg: " + kellaaeg);
    console.log("Kuupäev ja kellaaeg: " + koos);
}

function synnipaev() {
    let tulemus = document.getElementById("tulemus");
    let now = new Date();

    let synna = new Date(2007,6,26);

    let vahe = synna - now.getTime();
    let paevad = (vahe / (1000 * 60 * 60 * 24));

    tulemus.innerText = "Sünnipäevani on jäänud " + paevad + " päeva.";
    console.log("Sünnipäevani on jäänud: " + paevad + " päeva");
}