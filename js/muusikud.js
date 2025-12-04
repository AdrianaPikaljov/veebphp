function valiMuusikud() {
    let v1 = document.getElementById("vastus1");
    let muusik1 = document.getElementById("muusik1");
    let muusik2 = document.getElementById("muusik2");
    let muusik3 = document.getElementById("muusik3");
    let muusik4 = document.getElementById("muusik4");

    let valik = [];

    if (muusik1.checked) valik.push(muusik1.value);
    if (muusik2.checked) valik.push(muusik2.value);
    if (muusik3.checked) valik.push(muusik3.value);
    if (muusik4.checked) valik.push(muusik4.value);

    if (valik.length == 0) {
        v1.innerText = "Palun vali vÃ¤hemalt Ã¼ks muusik!";
    } else {
        v1.innerText = "Valisid: " + valik +", ";
    }
}

function valiArvamus() {
    let v2 = document.getElementById("vastus2");
    let arvamus = document.getElementById("arvamus").value;

    if (arvamus == "") {
        v2.innerText = "Palun kirjuta oma arvamus!";
    } else {
        v2.innerText = "Sinu arvamus: " + arvamus;
    }
}

function valiKuulamisaeg() {
    let v3 = document.getElementById("vastus3");
    let tunnid = document.getElementById("tunnid").value;

    if (tunnid == "") {
        v3.innerText = "Palun sisesta tunnid!";
    } else {
        v3.innerText = "Kuulad muusikat " + tunnid + " tundi pÃ¤evas";
    }
}

function valiRaadio() {
    let v4 = document.getElementById("vastus4");
    let jah = document.getElementById("jah");
    let ei = document.getElementById("ei");

    if (jah.checked) {
        v4.innerText = "Kuulan raadiot: Jah";
    } else if (ei.checked) {
        v4.innerText = "Kuulan raadiot: Ei";
    } else {
        v4.innerText = "Palun vali raadio kuulamine!";
    }
}

function valiJaamad() {
    let v5 = document.getElementById("vastus5");
    let jaamad = document.getElementById("jaamad").value;

    if (jaamad == "") {
        v5.innerText = "Palun nimeta mÃµni raadiojaam!";
    } else {
        v5.innerText = "Raadiojaamad: " + jaamad;
    }
}

function valiStiil() {
    let v6 = document.getElementById("vastus6");
    let stiil = document.getElementById("stiil").value;

    if (stiil == "") {
        v6.innerText = "Palun vali muusika stiil!";
    } else {
        v6.innerText = "Valisid stiili: " + stiil;
    }
}

function kokkuvott() {
    let v1 = document.getElementById("vastus1").innerText;
    let v2 = document.getElementById("vastus2").innerText;
    let v3 = document.getElementById("vastus3").innerText;
    let v4 = document.getElementById("vastus4").innerText;
    let v5 = document.getElementById("vastus5").innerText;
    let v6 = document.getElementById("vastus6").innerText;

    let vastused = document.getElementById("vastused");

    vastused.innerHTML =
        v1 + "<br>" +
        v2 + "<br>" +
        v3 + "<br>" +
        v4 + "<br>" +
        v5 + "<br>" +
        v6 + "<br><hr>";
}

function puhasta() {
    let v1 = document.getElementById("vastus1");
    let v2 = document.getElementById("vastus2");
    let v3 = document.getElementById("vastus3");
    let v4 = document.getElementById("vastus4");
    let v5 = document.getElementById("vastus5");
    let v6 = document.getElementById("vastus6");

    let muusik1 = document.getElementById("muusik1");
    let muusik2 = document.getElementById("muusik2");
    let muusik3 = document.getElementById("muusik3");
    let muusik4 = document.getElementById("muusik4");
    let arvamus = document.getElementById("arvamus");
    let tunnid = document.getElementById("tunnid");
    let jah = document.getElementById("jah");
    let ei = document.getElementById("ei");
    let jaamad = document.getElementById("jaamad");
    let stiil = document.getElementById("stiil");
    let vastused = document.getElementById("vastused");

    v1.innerText = "";
    v2.innerText = "";
    v3.innerText = "";
    v4.innerText = "";
    v5.innerText = "";
    v6.innerText = "";

    muusik1.checked = false;
    muusik2.checked = false;
    muusik3.checked = false;
    muusik4.checked = false;
    arvamus.value = "";
    tunnid.value = "";
    jah.checked = false;
    ei.checked = false;
    jaamad.value = "";
    stiil.selectedIndex = 0;
    vastused.innerHTML = "";
}