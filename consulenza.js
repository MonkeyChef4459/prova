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

function safe(){
    document.getElementById("abbonamento").style.display = "block";
    document.getElementById("page").style.display = "none";
    document.getElementById("nome_port").innerHTML = "Safe obbligazionario";
}

var xValues1 = ['2009-12','2010-01','2010-02','2010-03','2010-04','2010-05','2010-06','2010-07','2010-08','2010-09','2010-10','2010-11','2010-12','2011-01','2011-02','2011-03','2011-04','2011-05','2011-06','2011-07','2011-08','2011-09','2011-10','2011-11','2011-12','2012-01','2012-02','2012-03','2012-04','2012-05','2012-06','2012-07','2012-08','2012-09','2012-10','2012-11','2012-12','2013-01','2013-02','2013-03','2013-04','2013-05','2013-06','2013-07','2013-08','2013-09','2013-10','2013-11','2013-12','2014-01','2014-02','2014-03','2014-04','2014-05','2014-06','2014-07','2014-08','2014-09','2014-10','2014-11','2014-12','2015-01','2015-02','2015-03','2015-04','2015-05','2015-06','2015-07','2015-08','2015-09','2015-10','2015-11','2015-12','2016-01','2016-02','2016-03','2016-04','2016-05','2016-06','2016-07','2016-08','2016-09','2016-10','2016-11','2016-12','2017-01','2017-02','2017-03','2017-04','2017-05','2017-06','2017-07','2017-08','2017-09','2017-10','2017-11','2017-12','2018-01','2018-02','2018-03','2018-04','2018-05','2018-06','2018-07','2018-08','2018-09','2018-10','2018-11','2018-12','2019-01','2019-02','2019-03','2019-04','2019-05','2019-06','2019-07','2019-08','2019-09','2019-10','2019-11','2019-12','2020-01','2020-02','2020-03','2020-04','2020-05','2020-06','2020-07','2020-08','2020-09','2020-10','2020-11','2020-12','2021-01','2021-02','2021-03','2021-04','2021-05','2021-06','2021-07','2021-08','2021-09','2021-10','2021-11','2021-12','2022-01','2022-02','2022-03','2022-04','2022-05','2022-06','2022-07','2022-08' ];
var yValues1 = [20000, 20000, 20604.91, 21648.55,21926.04,21752.06,21403.61,21613.30,21755.78,22011.34,22341.39,22865.39,23559.59,23290.65,23659.59,23253.43,23299.03,23556.04,23203.76,23356.78,22350.83,21801.79,22690.96,22781.57,23364.76,24228.91,24819.53,24932.98,24945.92,24494.49,25000.75,25810.05,25772.41,26031.40,25839.40,26183.02,26291.91,26557.60,27053.85,27935.25,28146.06,27940.27,26908.56,27639.69,27326.35,27936.80,28586.94,28846.83,28801.05,28604.34,29209.31,29385.36,29573.79,30432.23,30907.55,31155.25,32095.07,32258.12,32474.23,33027.10,33299.50,34986.40,36317.54,37115.58,36762.73,37151.98,35823.78,36533.64,34213.68,33490.15,35742.10,36425.65,35145.22,33891.93,34078.61,34832.77,35127.82,35607.80,36037.90,37160.85,37233.54,37368.51,37140.80,37675.65,38494.93,38661.71,39961.59,40002.66,39967.29,39867.16,39414.68,39506.66,39601.61,40013.77,41054.62,41157.54,41283.28,41783.84,41106.95,40546.34,41228.10,42012.96,41898.43,42422.84,42746.65,42986.09,41467.21,41810.59,39928.58,42074.28,42928.52,43986.63,44969.38,43543.12,45188.83,46107.15,46193.29,47135.47,47132.38,48208.51,48617.44,49230.95,46979.33,42506.96,45864.93,46454.27,47482.85,47860.60,49303.51,48947.23,48347.16,51183.98,52184.51,52318.35,52689.63,54837.06,55331.07,55862.40,57249.77,57973.56,59066.09,57957.02,59811.49,60164.85,61820.02,60068.20,58886.77,59706.15,57897.85,56782.76,54302.89,58002.95,56523.95];

new Chart("portafoglio1", {
  type: "line",
  data: {
    labels: xValues1,
    datasets: [{  
      label: "Performance",
      fill: false,
      backgroundColor: "#004A7C",
      borderColor: "#004A7C",
      data: yValues1,
      pointStyle: 'circle',
      pointRadius: 1,
      pointHoverRadius: 5
    }]
  },
  options: {
    layout: {
      padding: {
          left: 0,
          right: 0,
          top: 25,
          bottom: 25
      },
  }
  }
});