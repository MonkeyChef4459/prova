<!-- ABBONAMENTI -->
    <div id="introduzione_abb">
        <div id="introduzione_info">
            <h1 id="nome_port"></h1>
            <p id="obiettivo"></p>
        </div>
    </div>
    <div id="info_abbonamento">
    
    <!-- GRAFICO -->
    <canvas id="portafoglio1" style="width:100%;max-width:800px;"></canvas>
    <!-- FINE GRAFICO -->

    <div id="descrizione">
        <p>Tasso di crescita composto annuo:<strong id="media"></strong></p>
        <p>Performance totale:<strong id="performance"></strong></p>
        <p>Massima perdita in un anno:<strong id="perdita"></strong></p>
        <p>Massimo drawdown:<strong id="drawdown"></strong></p>
        <p style="color: green;"><strong>Portafoglio disponibile</strong></p>
    </div>
    </div>


<script>
var xValues1 = ['2009-12','2010-01','2010-02','2010-03','2010-04','2010-05','2010-06','2010-07','2010-08','2010-09','2010-10','2010-11','2010-12','2011-01','2011-02','2011-03','2011-04','2011-05','2011-06','2011-07','2011-08','2011-09','2011-10','2011-11','2011-12','2012-01','2012-02','2012-03','2012-04','2012-05','2012-06','2012-07','2012-08','2012-09','2012-10','2012-11','2012-12','2013-01','2013-02','2013-03','2013-04','2013-05','2013-06','2013-07','2013-08','2013-09','2013-10','2013-11','2013-12','2014-01','2014-02','2014-03','2014-04','2014-05','2014-06','2014-07','2014-08','2014-09','2014-10','2014-11','2014-12','2015-01','2015-02','2015-03','2015-04','2015-05','2015-06','2015-07','2015-08','2015-09','2015-10','2015-11','2015-12','2016-01','2016-02','2016-03','2016-04','2016-05','2016-06','2016-07','2016-08','2016-09','2016-10','2016-11','2016-12','2017-01','2017-02','2017-03','2017-04','2017-05','2017-06','2017-07','2017-08','2017-09','2017-10','2017-11','2017-12','2018-01','2018-02','2018-03','2018-04','2018-05','2018-06','2018-07','2018-08','2018-09','2018-10','2018-11','2018-12','2019-01','2019-02','2019-03','2019-04','2019-05','2019-06','2019-07','2019-08','2019-09','2019-10','2019-11','2019-12','2020-01','2020-02','2020-03','2020-04','2020-05','2020-06','2020-07','2020-08','2020-09','2020-10','2020-11','2020-12','2021-01','2021-02','2021-03','2021-04','2021-05','2021-06','2021-07','2021-08','2021-09','2021-10','2021-11','2021-12','2022-01','2022-02','2022-03','2022-04','2022-05','2022-06','2022-07','2022-08','2022-09'];
var yValues1 = [20000, 20000, 20604.91, 21648.55,21926.04,21752.06,21403.61,21613.30,21755.78,22011.34,22341.39,22865.39,23559.59,23290.65,23659.59,23253.43,23299.03,23556.04,23203.76,23356.78,22350.83,21801.79,22690.96,22781.57,23364.76,24228.91,24819.53,24932.98,24945.92,24494.49,25000.75,25810.05,25772.41,26031.40,25839.40,26183.02,26291.91,26557.60,27053.85,27935.25,28146.06,27940.27,26908.56,27639.69,27326.35,27936.80,28586.94,28846.83,28801.05,28604.34,29209.31,29385.36,29573.79,30432.23,30907.55,31155.25,32095.07,32258.12,32474.23,33027.10,33299.50,34986.40,36317.54,37115.58,36762.73,37151.98,35823.78,36533.64,34213.68,33490.15,35742.10,36425.65,35145.22,33891.93,34078.61,34832.77,35127.82,35607.80,36037.90,37160.85,37233.54,37368.51,37140.80,37675.65,38494.93,38661.71,39961.59,40002.66,39967.29,39867.16,39414.68,39506.66,39601.61,40013.77,41054.62,41157.54,41283.28,41783.84,41106.95,40546.34,41228.10,42012.96,41898.43,42422.84,42746.65,42986.09,41467.21,41810.59,39928.58,42074.28,42928.52,43986.63,44969.38,43543.12,45188.83,46107.15,46193.29,47135.47,47132.38,48208.51,48617.44,49230.95,46979.33,42506.96,45864.93,46454.27,47482.85,47860.60,49303.51,48947.23,48347.16,51183.98,52184.51,52318.35,52689.63,54837.06,55331.07,55862.40,57249.77,57973.56,59066.09,57957.02,59811.49,60164.85,61820.02,60068.20,58886.77,59706.15,57897.85,56782.76,54302.89,58002.95,56523.95,53023.43];

var xValues2 = ['2008-07','2008-08','2008-09','2008-10','2008-11','2008-12','2009-01','2009-02','2009-03','2009-04','2009-05','2009-06','2009-07','2009-08','2009-09','2009-10','2009-11','2009-12','2010-01','2010-02','2010-03','2010-04','2010-05','2010-06','2010-07','2010-08','2010-09','2010-10','2010-11','2010-12','2011-01','2011-02','2011-03','2011-04','2011-05','2011-06','2011-07','2011-08','2011-09','2011-10','2011-11','2011-12','2012-01','2012-02','2012-03','2012-04','2012-05','2012-06','2012-07','2012-08','2012-09','2012-10','2012-11','2012-12','2013-01','2013-02','2013-03','2013-04','2013-05','2013-06','2013-07','2013-08','2013-09','2013-10','2013-11','2013-12','2014-01','2014-02','2014-03','2014-04','2014-05','2014-06','2014-07','2014-08','2014-09','2014-10','2014-11','2014-12','2015-01','2015-02','2015-03','2015-04','2015-05','2015-06','2015-07','2015-08','2015-09','2015-10','2015-11','2015-12','2016-01','2016-02','2016-03','2016-04','2016-05','2016-06','2016-07','2016-08','2016-09','2016-10','2016-11','2016-12','2017-01','2017-02','2017-03','2017-04','2017-05','2017-06','2017-07','2017-08','2017-09','2017-10','2017-11','2017-12','2018-01','2018-02','2018-03','2018-04','2018-05','2018-06','2018-07','2018-08','2018-09','2018-10','2018-11','2018-12','2019-01','2019-02','2019-03','2019-04','2019-05','2019-06','2019-07','2019-08','2019-09','2019-10','2019-11','2019-12','2020-01','2020-02','2020-03','2020-04','2020-05','2020-06','2020-07','2020-08','2020-09','2020-10','2020-11','2020-12','2021-01','2021-02','2021-03','2021-04','2021-05','2021-06','2021-07','2021-08','2021-09','2021-10','2021-11','2021-12','2022-01','2022-02','2022-03','2022-04','2022-05','2022-06','2022-07','2022-08','2022-09','2022-10','2022-11'];
var yValues2 = [20000,20000,18869.05,17879.09,17491.63,16841.95,17045.71,16174.36,16402.50,17521.46,17562.95,17577.20,18467.54,18891.29,19160.99,18736.34,19021.50,19905.10,20005.80,20594.42,21648.95,22102.21,22240.17,21919.84,21956.06,22059.74,22089.74,22346.99,23194.88,23724.43,23569.78,23929.27,23360.18,23246.60,23620.83,23208.60,23266.39,21984.93,21921.96,22648.94,23015.67,23807.39,24571.39,24886.17,25025.16,25088.54,25073.95,25385.60,26237.92,26087.55,26088.05,25880.35,26123.40,26261.65,26412.31,27211.97,28179.62,28248.35,28351.96,27504.05,28071.46,27748.90,28309.79,28904.89,29190.78,29107.98,29115.09,29503.92,29623.95,29678.31,30652.45,31049.89,31294.26,32290.75,32675.48,32816.19,33624.27,34170.40,36332.41,37542.69,38988.68,38191.62,39028.19,37726.21,38468.96,36146.39,34974.18,37499.14,38729.93,37209.22,35340.57,35765.15,36063.66,36417.29,37295.82,37346.98,38412.45,38602.87,38579.98,38780.70,39855.73,40894.73,40720.15,42077.09,42095.88,41911.73,41364.38,40920.66,40618.53,40517.99,41199.17,42290.82,42135.28,42303.79,42227.45,41699.39,41052.74,41924.07,43260.43,43098.80,43646.81,44171.94,44277.51,42880.85,43207.72,41097.34,43223.65,44149.08,45246.62,46171.85,44827.16,45952.69,46906.82,46968.48,48162.16,48106.38,49417.88,49645.47,50038.42,47791.97,43293.35,46456.70,47041.90,47587.92,46749.33,48078.20,47940.38,47302.58,50431.58,51146.44,51550.66,52509.98,55146.21,55316.37,55531.59,57206.48,57607.56,58715.28,58245.25,59606.71,59958.13,61454.25,60054.30,58780.81,59913.63,59260.94,58117.43,55734.18,59530.69,58544.78,55426.40,56771.64,57933.31];

var xValues3 = ['2012-08','2012-09','2012-10','2012-11','2012-12','2013-01','2013-02','2013-03','2013-04','2013-05','2013-06','2013-07','2013-08','2013-09','2013-10','2013-11','2013-12','2014-01','2014-02','2014-03','2014-04','2014-05','2014-06','2014-07','2014-08','2014-09','2014-10','2014-11','2014-12','2015-01','2015-02','2015-03','2015-04','2015-05','2015-06','2015-07','2015-08','2015-09','2015-10','2015-11','2015-12','2016-01','2016-02','2016-03','2016-04','2016-05','2016-06','2016-07','2016-08','2016-09','2016-10','2016-11','2016-12','2017-01','2017-02','2017-03','2017-04','2017-05','2017-06','2017-07','2017-08','2017-09','2017-10','2017-11','2017-12','2018-01','2018-02','2018-03','2018-04','2018-05','2018-06','2018-07','2018-08','2018-09','2018-10','2018-11','2018-12','2019-01','2019-02','2019-03','2019-04','2019-05','2019-06','2019-07','2019-08','2019-09','2019-10','2019-11','2019-12','2020-01','2020-02','2020-03','2020-04','2020-05','2020-06','2020-07','2020-08','2020-09','2020-10','2020-11','2020-12'];
var yValues3 = [20000,20000,19986.50,20114.66,19963.38,19615.28,20167.18,20667.65,20656.38,20441.17,19915.27,19966.26,19833.31,19877.25,20032.17,20078.04,19830.19,20216.16,20152.26,20207.61,20318.17,20876.04,20965.42,21275.86,21791.15,22263.69,22411.60,22737.68,23152.49,24838.99,25076.19,25999.36,25251.83,25576.31,24814.49,25364.52,24470.44,24275.00,25181.02,25969.43,25149.94,24849.83,25142.57,24876.90,24957.34,25428.81,25813.69,26173.61,26144.72,26115.12,26262.91,26548.20,26938.81,26594.22,27239.01,27098.41,26861.85,26503.33,26120.60,25783.52,25777.78,25863.74,26338.65,26059.33,25969.73,25388.29,25429.76,25286.15,25640.69,26313.65,26353.25,26392.06,26638.97,26672.77,26630.17,26703.00,26376.80,26946.77,27226.52,27992.85,28264.08,28331.62,28547.92,29157.58,29753.12,30030.85,29657.64,30112.62,29819.55,30551.38,30431.45,29051.63,30264.62,30092.59,30367.36,29744.27,29872.51,30159.11,30052.13,30437.72,30277.59];

var xValues4 = ['2007-06','2007-07','2007-08','2007-09','2007-10','2007-11','2007-12','2008-01','2008-02','2008-03','2008-04','2008-05','2008-06','2008-07','2008-08','2008-09','2008-10','2008-11','2008-12','2009-01','2009-02','2009-03','2009-04','2009-05','2009-06','2009-07','2009-08','2009-09','2009-10','2009-11','2009-12','2010-01','2010-02','2010-03','2010-04','2010-05','2010-06','2010-07','2010-08','2010-09','2010-10','2010-11','2010-12','2011-01','2011-02','2011-03','2011-04','2011-05','2011-06','2011-07','2011-08','2011-09','2011-10','2011-11','2011-12','2012-01','2012-02','2012-03','2012-04','2012-05','2012-06','2012-07','2012-08','2012-09','2012-10','2012-11','2012-12','2013-01','2013-02','2013-03','2013-04','2013-05','2013-06','2013-07','2013-08','2013-09','2013-10','2013-11','2013-12','2014-01','2014-02','2014-03','2014-04','2014-05','2014-06','2014-07','2014-08','2014-09','2014-10','2014-11','2014-12','2015-01','2015-02','2015-03','2015-04','2015-05','2015-06','2015-07','2015-08','2015-09','2015-10','2015-11','2015-12','2016-01','2016-02','2016-03','2016-04','2016-05','2016-06','2016-07','2016-08','2016-09','2016-10','2016-11','2016-12','2017-01','2017-02','2017-03','2017-04','2017-05','2017-06','2017-07','2017-08','2017-09','2017-10','2017-11','2017-12','2018-01','2018-02','2018-03','2018-04','2018-05','2018-06','2018-07','2018-08','2018-09','2018-10','2018-11','2018-12','2019-01','2019-02','2019-03','2019-04','2019-05','2019-06','2019-07','2019-08','2019-09','2019-10','2019-11','2019-12','2020-01','2020-02','2020-03','2020-04','2020-05','2020-06','2020-07','2020-08','2020-09','2020-10','2020-11','2020-12','2021-01','2021-02','2021-03','2021-04','2021-05','2021-06','2021-07','2021-08','2021-09','2021-10','2021-11','2021-12','2022-01','2022-02','2022-03','2022-04','2022-05','2022-06','2022-07','2022-08','2022-09'];
var yValues4 = [20000,20000,20050.35,20338.97,20799.63,19527.33,19576.32,18516.33,18187.85,17228.96,18076.71,18525.64,17061.38,17052.75,17832.25,16595.27,15043.54,14374.97,13852.87,14150.69,13326.38,13616.35,15201.15,15593.23,15475.26,16630.40,17074.83,17507.78,16975.21,17567.11,18723.36,18602.51,19567.23,20864.26,21628.73,21706.74,21028.27,20950.56,20921.09,21227.89,21689.86,22945.88,23676.89,23253.28,23790.71,23356.18,23175.97,23565.24,23082.89,23301.38,21910.86,21333.22,22616.51,23097.73,23678.95,24811.50,25371.00,25629.12,25655.26,25314.05,25885.47,26734.67,26717.50,26934.76,26472.30,26797.36,26815.97,27152.31,27924.59,29258.04,29009.70,29284.72,28102.26,29178.22,28884.17,29413.97,30117.28,30482.32,30417.15,30239.09,30945.72,31014.03,30937.98,32006.51,32756.78,32914.85,34257.40,34465.16,34989.31,35590.46,36185.07,38355.10,40242.04,41550.99,40569.44,41547.22,39921.50,40524.93,37700.79,36565.67,39565.01,40767.66,38719.82,36821.25,37345.90,38171.81,38688.52,39374.29,39836.84,41438.77,41519.46,41773.36,41617.57,43502.71,44610.84,44856.28,46643.50,46501.54,46129.21,45432.02,44841.44,44753.03,44628.35,45486.37,46861.94,46918.15,46972.45,47342.54,46526.33,45611.29,46767.61,48885.71,48847.00,49483.34,50425.81,50495.14,48245.66,48629.01,45314.21,48608.63,49983.63,50995.92,52528.38,49882.55,52118.46,53518.62,53057.78,54641.80,54694.07,56488.96,57294.88,57606.84,54283.63,47231.97,52571.57,53403.87,55034.26,55093.13,57573.90,56589.64,56337.89,61180.63,63042.05,64550.00,66405.85,70549.83,71207.44,72132.00,74280.06,74412.46,76268.41,75218.73,77946.59,78664.61,81395.66,78986.75,78138.75,80165.31,78459.20,77075.39,73359.13,79480.94,78369.50,73177.15,75922.94,77548.72];

var portafoglio = document.getElementById("nome_port");
var obiettivo = document.getElementById("obiettivo");

var media = document.getElementById("media");
var performance = document.getElementById("performance");
var perdita = document.getElementById("perdita");
var drawdown = document.getElementById("drawdown");

var x = sessionStorage.getItem('x'); 
console.log(x);

if(x === "obb"){
    xValues = xValues3;
    yValues = yValues3;
    portafoglio.innerHTML = "Safe Obbligazionario";
    obiettivo.innerHTML = "<strong>Obbiettivo del portafoglio</strong>: portafoglio a basso rischio e modesto rendimento, per tutti coloro che puntano a mantenere saldo il valore del proprio capitale nel tempo contrastando l'inflazione. Ideale per chi &egrave avverso al rischio e non &egrave interessato ad alti rendimenti, ma vuole tuttavia lentamente e in modo costante incrementare il proprio patrimonio creandosi un cuscino di sicurezza da cui attingere in caso di necessit&agrave.";
    media.innerHTML = " 5.15%";
    performance.innerHTML = " 51,39%";
    perdita.innerHTML = " -3,6%";
    drawdown.innerHTML = " -7,2%";
}if(x === "sma"){
    xValues = xValues1;
    yValues = yValues1;
    portafoglio.innerHTML = "Piccolo Investitore";
    obiettivo.innerHTML = "<strong>Obbiettivo del portafoglio</strong>: Per tutti quegli aspiranti investitori che credevano investire fosse troppo costoso e alla portata di pochi, Headway ha studiato un portafoglio inclusivo diretto a chi dispone di un capitale modesto. Diversificato tra obbligazioni, azioni e materie prime, garantirà al neo-investitore una crescita del proprio capitale nel lungo termine. Questo portafoglio è designato a coloro che intendono investire una cifra mensile sotto forma di un piano di accumulo (pac).La soglia minima necessaria da investire mensilmente per poter seguire il piano con zelo è di 100 euro.";
    media.innerHTML = " 8.61%";
    performance.innerHTML = " 182.61%";
    perdita.innerHTML = " -5.3%";
    drawdown.innerHTML = " -13.7%";
}if(x === "bil"){
    xValues = xValues2;
    yValues = yValues2;
    portafoglio.innerHTML = "Bilanciato";
    obiettivo.innerHTML = "<strong>Obbiettivo del portafoglio</strong>: Offre un portafoglio bilanciato tra obbligazione e azioni (max 70%) con obiettivo il lungo periodo (dai 5 anni in su). In questo portafoglio coesistono due aspetti fondamentali: la crescita del portafoglio stesso, con rendimenti che superano l’inflazione, e il preservare il portafoglio da cicli economici e situazioni di difficoltà che potrebbero mettere a rischio il tuo capitale. In questo portafoglio è presente una componente X che ci distingue, sarebbe un fondo diverso dagli altri che annualmente, a seconda della situazione economica e finanziaria globale, ne verrà suggerito l’acquisto. L'asset allocation spazia tra varie nazioni e mercati globali, settori (come quello industriale, farmaceutico e fonti rinnovabili) e diverse valute (eur,usd,gbp..) per ottenere la migliore diversificazione possibile.";
    media.innerHTML = " 7.80%";
    performance.innerHTML = " 189,66%";
    perdita.innerHTML = " -7,3%";
    drawdown.innerHTML = " -19,1%";
}if(x === "agg"){
    xValues = xValues4;
    yValues = yValues4;
    portafoglio.innerHTML = "Aggressivo";
    obiettivo.innerHTML = "<strong>Obiettivo del portafoglio</strong>: ideale per tutti coloro che hanno un'orizzonte temporale di medio-lungo termine. Un investitore in grado di non farsi influenzare da sbalzi improvvisi di mercato, in virtù di un maggiore rendimento futuro, troverà questo portafoglio adatto a soddisfare le sue esigenze. I movimenti improvvisi di mercato possono spaventare, e sono anche la causa di irrazionalità, panico e conseguenti performance negative da parte del 95% dei neo-investitori. Il portafoglio studiato da Headway non si cura di tutto ciò, sono anzi occasioni per proseguire con la propria strategia, in vista del raggiungimento di un obiettivo di alto guadagno finale.";
    media.innerHTML = " 9,29%";
    performance.innerHTML = " 287,74%";
    perdita.innerHTML = " -29,2%";
    drawdown.innerHTML = " -35,9%";
}

new Chart("portafoglio1", {
    type: "line",
    data: {
      labels: xValues,
      datasets: [{  
        label: "Performance",
        fill: false,
        backgroundColor: "#004A7C",
        borderColor: "#004A7C",
        data: yValues,
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
</script>
<!-- FINE ABBONAMENTI -->











