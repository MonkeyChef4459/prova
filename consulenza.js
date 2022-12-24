var caricamento = document.getElementById("avanzamento");
var intro = document.getElementById("top");
var a = document.getElementById("pag1");
var b = document.getElementById("pag2");
var b_1 = document.getElementById("pag21");
var c = document.getElementById("pag3");
var c_1 = document.getElementById("pag31");
var d = document.getElementById("pag4");
var f = document.getElementById("pag5");
var g = document.getElementById("pag6");
var barra = document.getElementById("a");
var result1 = document.getElementById("result1");
var result2 = document.getElementById("result2");
var result3 = document.getElementById("result3");

var inizio; var prima; var seconda; var terza; var quarta; var quinta; var sesta;

function inizia(){
    caricamento.style.display = "flex";
    intro.style.display = "none";
    a.style.display = "block";
}

const radioButtons = document.querySelectorAll('input[name="scelte"]');
        for(const radioButton of radioButtons){
            radioButton.addEventListener('change', showSelected);
        }
        

function showSelected(e) {
        console.log(e);
            if (this.checked) {
                if(this.value === "si"){
                    barra.style.width = "40%"; /* capitale disponibile subito */
                    a.style.display = "none";
                    b.style.display = "block"; /* quanti subito? */
                    inizio = 1;
                }
                
                if(this.value === "no"){
                    barra.style.width = "40%"; /* capitale mensile */
                    a.style.display = "none";
                    c.style.display = "block"; /* quanti al mese? */
                    inizio = 2;
                }
                
                if(this.value === "en"){
                    barra.style.width = "40%"; /* entrambe le scelte */
                    a.style.display = "none";
                    b_1.style.display = "block"; /* quanti subito? */
                    inizio = 3;
                }
                
                if(this.value === "1"){
                    barra.style.width = "60%"; /* meno di 10k */
                    b.style.display = "none";
                    d.style.display = "block"; /* orizzonte temporale */
                    prima = 1;
                }
                
                if(this.value === "2"){
                    barra.style.width = "60%"; /* 10k-50k */
                    b.style.display = "none";
                    d.style.display = "block"; /* orizzonte temporale */
                    prima = 2;
                }
                
                if(this.value === "3"){
                    barra.style.width = "60%"; /* 50k-200k */
                    b.style.display = "none";
                    d.style.display = "block"; /* orizzonte temporale */
                    prima = 3;
                }
                
                if(this.value === "4"){
                    barra.style.width = "60%"; /* più di 200k */
                    b.style.display = "none";
                    d.style.display = "block"; /* orizzonte temporale */
                    prima = 4;
                }
                
                if(this.value === "5"){
                    barra.style.width = "60%"; /* meno di 300 */
                    c.style.display = "none";
                    d.style.display = "block"; /* orizzonte temporale */
                    seconda = 1;
                }
                
                if(this.value === "6"){
                    barra.style.width = "60%"; /* 300-800 */
                    c.style.display = "none";
                    d.style.display = "block"; /* orizzonte temporale */
                    seconda = 2;
                }
                
                if(this.value === "7"){
                    barra.style.width = "60%"; /* 800-3000 */
                    c.style.display = "none";
                    d.style.display = "block"; /* orizzonte temporale */
                    seconda = 3;
                }
                
                if(this.value === "8"){
                    barra.style.width = "60%"; /* più di 3000 */
                    c.style.display = "none";
                    d.style.display = "block"; /* orizzonte temporale */
                    seconda = 4;
                }

                if(this.value === "11"){
                    barra.style.width = "40%"; /* meno di 10k EN */
                    b_1.style.display = "none";
                    c_1.style.display = "block"; /* orizzonte temporale */
                    terza = 1;
                }
                
                if(this.value === "21"){
                    barra.style.width = "40%"; /* 10k-50k EN */
                    b_1.style.display = "none";
                    c_1.style.display = "block"; /* orizzonte temporale */
                    terza = 2;
                }
                
                if(this.value === "31"){
                    barra.style.width = "40%"; /* 50k-200k EN */
                    b_1.style.display = "none";
                    c_1.style.display = "block"; /* orizzonte temporale */
                    terza = 3;
                }
                
                if(this.value === "41"){
                    barra.style.width = "40%"; /* più di 200k EN */
                    b_1.style.display = "none";
                    c_1.style.display = "block"; /* orizzonte temporale */
                    terza = 4;
                }
                
                if(this.value === "51"){
                    barra.style.width = "60%"; /* meno di 300 EN */
                    c_1.style.display = "none";
                    d.style.display = "block"; /* orizzonte temporale */
                    quarta = 1;
                }
                
                if(this.value === "61"){
                    barra.style.width = "60%"; /* 300-800 EN */
                    c_1.style.display = "none";
                    d.style.display = "block"; /* orizzonte temporale */
                    quarta = 2;
                }
                
                if(this.value === "71"){
                    barra.style.width = "60%"; /* 800-3000 EN */
                    c_1.style.display = "none";
                    d.style.display = "block"; /* orizzonte temporale */
                    quarta = 3;
                }
                
                if(this.value === "81"){
                    barra.style.width = "60%"; /* più di 3000 EN */
                    c_1.style.display = "none";
                    d.style.display = "block"; /* orizzonte temporale */
                    quarta = 4;
                }
                
                if(this.value === "min2"){
                    barra.style.width = "80%"; /* <5 anni */
                    d.style.display = "none";
                    f.style.display = "block"; /* consulente? */
                    quinta = 1;
                }
                
                if(this.value === "tra2"){
                    barra.style.width = "80%"; /* tra 5 e 10 anni */
                    d.style.display = "none";
                    f.style.display = "block"; /* consulente? */
                    quinta = 2;
                }
                
                if(this.value === "max2"){ 
                    barra.style.width = "80%"; /* più di 10 anni */
                    d.style.display = "none";
                    f.style.display = "block"; /* consulente? */
                    quinta = 3;
                }
                
                if(this.value === "auto" || this.value === "consulente"){

                    if(prima === 1 || seconda===1 || seconda===2){
                        result2.style.display = "block";
                    }if(prima === 3 || prima===4 || seconda===3 || seconda===4 || terza===3 || terza===4){
                        result1.style.display = "block";
                    }if(prima === 2){
                        result3.style.display = "block";
                    }if(terza===1 && quarta===1){
                        result2.style.display = "block";
                    }if(terza===1 && quarta===2){
                        result2.style.display = "block";
                    }if(terza===1 && quarta===3 || quarta===4){
                        result1.style.display = "block";
                    }if(terza===2 && quarta===2 || quarta===3 || quarta===4){
                        result1.style.display = "block";
                    }if(terza===2 && quarta===1){
                        result3.style.display = "block";
                    }

                    f.style.display = "none"; /* da solo */
                    g.style.display = "block"; /* finale */
                    barra.style.width = "100%";
                    sesta = 1;
                }
                
            }
        }

/*------------ PANORAMICA ABBONAMENTO -------------*/
function obbligazionario(){
    sessionStorage.setItem('x','obb');
    window.location.href = "abbonamento.php";
}

function small(){
    sessionStorage.setItem('x','sma');
    window.location.href = "abbonamento.php";
}

function bilanciato(){
    sessionStorage.setItem('x','bil');
    window.location.href = "abbonamento.php";
}

function aggressivo(){
    sessionStorage.setItem('x','agg');
    window.location.href = "abbonamento.php";
}
/*----------- FINE PANORAMICA ABBONAMENTO ------------*/