let raamat = {
    pealkiri: "Spider-Man: The Amazing Fantasy #15",
    autor: "Stan Lee",
    aasta: 1962,

    kuvaKirjeldus() {
        let output1 = document.getElementById('output1');
        let kir = this.pealkiri + " — " + this.autor + ", " + this.aasta;
        output1.innerHTML = kir + '<br>';
        console.log(kir);
    },

    muudaAasta(uusAasta) {
        this.aasta = uusAasta;
        let au = 'Raamatu "' + this.pealkiri + '" uus aasta: ' + this.aasta;
        document.getElementById('output1').innerHTML += au + '<br>';
        console.log(au);
    }
};

let raamatukogu = {
    raamatud: [
        { pealkiri: "Spider-Man: The Amazing Fantasy #15", autor: "Stan Lee", aasta: 1962 },
        { pealkiri: "Spider-Man: The Amazing Spider-Man #1", autor: "Stan Lee", aasta: 2001 },
        { pealkiri: "Spider-Man: Kraven's Last Hunt", autor: "J. M. DeMatteis", aasta: 1987 }
    ],

    kuvaRaamatud() {
        let output = "";
        this.raamatud.forEach(r => {
            output += r.pealkiri + " — " + r.autor + ", " + r.aasta + "<br>";
            console.log(r.pealkiri + " — " + r.autor + ", " + r.aasta);
        });
        document.getElementById('output').innerHTML = output;
    },

    kuvaKoguarv() {
        let kogu = "Raamatukogus on " + this.raamatud.length + " raamatut";
        document.getElementById('output').innerHTML += kogu + '<br>';
        console.log(kogu);
    },

    lisaRaamat(pealkiri, autor, aasta) {
        this.raamatud.push({ pealkiri, autor, aasta });
        console.log("Lisati raamat: ${pealkiri} — ${autor}, ${aasta}");


        this.kuvaRaamatud();
        this.kuvaKoguarv();
    },

    raamatudParast2000() {
        let paras = this.raamatud.filter(r => r.aasta > 2000).length;
        let prst = "Pärast 2000. aastat: " + paras + " raamatut";
        document.getElementById('output').innerHTML += prst + '<br>';
        console.log(prst);
    }
};

raamat.kuvaKirjeldus();
raamat.muudaAasta(2023);
raamatukogu.kuvaRaamatud();
raamatukogu.kuvaKoguarv();
raamatukogu.lisaRaamat("Lisati raamat: Spider-Man: Life Story", "Chip Zdarsky", 2019);
raamatukogu.raamatudParast2000();


