<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="https://use.typekit.net/ect0ndf.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
        <link rel="icon" href="icona-sito.png" type="image">
        <script>
        (function(){
            if (window.addEventListener)
            {
              window.addEventListener("load", nascondi_loading_screen, false);
            }else{
              window.attachEvent("onload", nascondi_loading_screen);
            }
          })();
          function nascondi_loading_screen()
          {
            document.getElementById("loading_screen").style.display = 'none';
          }
          </script>
        <title>Headway</title>

    </head>

    <body id="body">

        <div id="contatti">
            <img id="icon_back" onclick="chiudifooter()" src="back1.png">
            <div id="top">
                <h1 id="titolo_contatti">Hai qualche domanda?</h1>
                <p>BRESCIA Via prova 1 25232</p>
            </div>
            <div id="left_contact">
                <img id="busta" src="busta.png">
            </div>
            <div id="right_contact">
                <form>
                    <input id="inp1" type="text" placeholder="Nome"><br>
                    <input id="inp" type="text" placeholder="Cognome"><br>
                    <input id="inp2" type="email" placeholder="Email"><br>
                    <textarea placeholder="Il tuo messaggio.."></textarea>
                    <input id="but" type="submit" name="Submit" value="INVIA MESSAGGIO">
                </form>
            </div>
        </div>

    <div id="bar">
        <img src="simb.png">
            <div id="link">
                <a href="index.html">Home</a>
                <a href="consulenza.html">Investi</a>
                <a href="corsi.html">Corsi</a>
                <a onclick="contatti()">Contatti</a>
                <a href="about.html">About</a>
            </div>
            <div id="blog">
                <a href="">Blog</a>
            </div>
    </div>

    <div id="loading_screen"></div>
        <div id="menu">
            <div id="items">
                <a href="index.html" id="item1">Home</a>
                <a href="investment.html" id="item">Investi</a>
                <a onclick="contatti()" id="item">Contatti</a>
                <a href="about.html" id="item">About</a>
            </div>
            <div id="logo_menu">
                <img id="logo_menu_im" src="logo_white.png">
                <p id="info">indirizzo</p>
                <p id="info">N.P.iva</p>
            </div>
            <div id="icons">
                <img id="icon_menu" src="instagram.png">
                <img id="icon_menu" src="facebook.png">
                <img id="icon_menu" src="whatsapp.png">
                <img id="icon_menu" src="twitter.png">
            </div>
        </div>
        <div class="cont" onclick="tog(this)">
            <div class="line1"></div>
            <div class="line3"></div>
            <div class="line2"></div>
        </div>
        <div id="page1">
            <div id="up">
                <div id="left">
                    <img id="logo" src="logo_white.png">
                </div>
            </div>
            <div id="sx">
                <h1 id="introduzione">Pianifica il</h1>
                <h1 id="introduzione">Tuo futuro</h1>
                <p id="sub">Siamo una societ&agrave italiana iscritta regolarmente</br>all'Albo dei consulenti finanziari.</p>
                <p id="sub">Headway offre servizi finanziari scrupolosamente<br>studiati per raggiungere i tuoi obiettivi.</p>
                    <div id="more">
                        <a id="piu" href="consulenza.html"><span>Scopri il servizio adatto a te</span></a>
                    </div>
            </div>
        </div>
        <a name="arrivo"></a>
        <div id="page2">

            <div id="sx1">
                
            </div>

            <div id="dx1">
                <h1 id="titolo">Investi con Noi</h1>
                <h1 id="titolo1"></h1>
                <p id="subtitle">Headway offre a tutti la possibilit&agrave di approcciarsi alla gestione degli investimenti e alla pianificazione finanziaria.</p><br>
                <p id="subtitle">Con la guida di un esperto realizzeremo la <strong>migliore soluzione</strong> per te.<br>Il risultato &egrave un approccio specifico, personalizzato e coerente con le tue esigenze.</p><br>
                    <div id="more1">
                        <a id="piu" href="consulenza.html"><span>Scopri di pi&#249</span></a>
                    </div>
            </div>
        </div>

        <div id="page3">
            <div id="head">
                <h1>Cos'&#232 Headway?</h1>
                <p><strong>Headway</strong> nasce dalla neccessit&#224 di fornire un'alternativa valida e sostenibile al <strong>dispendioso sistema</strong> normalmente offerto. Il nostro piano ci permette di ridurre cos&#236 i costi a favore di <strong>rendimenti costanti</strong> e sostenibili a lungo termine. Proteggeremo cos&#236 il tuo portafoglio da eventi economici improvvisi che potrebbero andare a minare la tua stabilit&#224 finanziaria. Ti affiancheremo per massimizzare la possibilit&#224 di raggiungere <strong>obiettivi finanziari</strong> (come l'acquisto di una casa, un reddito extra a fine mese, o ottenere la <strong>pensione anticipata</strong>).</p>
            </div>

            <div id="perche">
                <h1>Perch&egrave investire?</h1>
                <p>Lasciare i propri risparmi parcheggiati sul conto corrente <strong>non &egrave la forma pi&ugrave sicura</strong> di gestione del patrimonio. Perch&egrave?<br>Sono tre i motivi principali per la quale vi &egrave la necessit&agrave di investire:</p>
                <ul>
                    <li><strong>Investire ti aiuta a raggiungere un obiettivo finanziario</strong>.</li>
                    <li><strong>L'inflazione deteriora il tuo capitale</strong>.</li>
                    <li><strong>Investire remunera il rischio</strong>.</li>
                </ul>
                <h2>Cosa sono gli obiettivi finanziari?</h2>
                <p>Pur nella loro grande variet&agrave, gli obiettivi possono essere classificati nelle seguenti macro categorie:</p>
                <ul>
                    <li><strong>Conservazione</strong>. Difendere il patrimonio dall'inflazione e dalle perdite.</li>
                    <li><strong>Imprevisti</strong>. Consiste nel creare una scorta monetaria per far fronte ad eventuali spese impreviste.</li>
                    <li><strong>Entrate periodiche</strong>. Consiste nel far lavorare il capitale in modo che generi entrate monetarie periodiche.</li>
                    <li><strong>Somma nel futuro</strong>. Consiste nel far lavorare il denaro in modo da ottenere una cifra maggiore di quella attuale, a una data futura.</li>
                    <li><strong>Rendimento</strong>. Consiste nel massimizzare il rendimento del portafoglio.</li>
                </ul>
                <h2>Cos'&egrave l'inflazione? La grande bugia del capitale garantito.</h2>
                <p>L'inflazione &egrave <strong>un nemico invisibile</strong> che deteriora il potere di acquisto della moneta, rendendo vano <strong>qualsiasi sforzo di accumulo</strong> del vostro capitale.<br>Negli ultimi 20 anni la moneta ha perso il 25% del potere di acquisto e negli ultimi 40 ben il 79%.<br>Negli ultimi 30 anni un capitale di 100.000 euro <strong>varrebbe poco pi&ugrave di 50.000</strong>, la soluzione per proteggersi da questo fenomeno &egrave investire i propri risparmi.</p>
                <table id="tab_sx">
                    <tr><td><strong>1960-2020</strong></td><td><strong>Deterioramento potere di acquisto</strong></td></tr>
                    <tr><td>Ultimi 20 anni</td><td>-25%</td></tr>
                    <tr><td>Ultimi 30 anni</td><td>-48%</td></tr>
                    <tr><td>Ultimi 40 anni</td><td>-79%</td></tr>
                    <tr><td>Ultimi 50 anni</td><td>-94%</td></tr>
                    <tr><td>Ultimi 60 anni</td><td>-96%</td></tr>
                </table>
                <table id="tab_dx">
                    <tr><td><strong>Anno</strong></td><td><strong>Stipendio (mese)</strong></td><td><strong>Giornale</strong></td><td><strong>Pane</strong></td><td><strong>Benzina</strong></td></tr>
                    <tr><td>1975</td><td>80</td><td>0,08</td><td>0,23</td><td>0,16</td></tr>
                    <tr><td>2000</td><td>723</td><td>0,77</td><td>0,98</td><td>1,34</td></tr>
                    <tr><td>2018</td><td>1200</td><td>1,08</td><td>1,98</td><td>1,6</td></tr>
                </table>
                <h2 id="rischio">Investire &egrave rischioso?</h2>
                <p><strong>Senza rischio</strong> non si pu&ograve ottenere nessun rendimento.<br>Il rischio sui mercati finanziari &egrave dato dalla <strong>volatilit&agrave dei prezzi</strong>, infatti il mercato &egrave costantemente influenzato da tantissimi fattori, cambiamenti sociali ed economici o decisioni politiche.<br>Questi cambiamenti non permettono <strong>a nessuno</strong>, nel breve periodo, di prevedere con certezza la direzione del mercato.<br>Da sempre, nel lungo periodo, <strong>il rischio &egrave stato premiato dai rendimenti</strong>.</p>

<!-- TradingView Widget BEGIN -->
<div class="tradingview-widget-container">
    <div id="tradingview_1d286"></div>
    <div class="tradingview-widget-copyright"><a href="https://it.tradingview.com/symbols/TVC-GOLD/" rel="noopener" target="_blank"><span class="blue-text">Oro</span></a> da TradingView</div>
    <script type="text/javascript" src="https://s3.tradingview.com/tv.js"></script>
    <script type="text/javascript">
    new TradingView.MediumWidget(
    {
    "symbols": [
      [
        "Oro",
        "TVC:GOLD|ALL"
      ],
      [
        "S&P500",
        "VANTAGE:SP500|ALL"
      ]
    ],
    "chartOnly": false,
    "width": "100%",
    "height": "300px",
    "locale": "it",
    "colorTheme": "light",
    "autosize": true,
    "showVolume": false,
    "hideDateRanges": false,
    "scalePosition": "right",
    "scaleMode": "Normal",
    "fontFamily": "-apple-system, BlinkMacSystemFont, Trebuchet MS, Roboto, Ubuntu, sans-serif",
    "noTimeScale": false,
    "valuesTracking": "1",
    "chartType": "line",
    "container_id": "tradingview_1d286"
  }
    );
    </script>
  </div>
  <!-- TradingView Widget END -->

            </div>

            <div id="consulente">
                <h1>Perch&egrave scegliere un consulente finanziario?</h1>
            </div>
        </div>

        <div id="page4">

            <div id="sx2">
                <h1 id="titolo3">Formazione</h1><br>
                <p id="subtitle2"><strong>I nostri percorsi</strong> di formazione specifici e su misura ti permetteranno di <strong>imparare la base</strong> dell&#39investimento, ma soprattutto la gestione del denaro.</p><br>
                    <p>Attraverso un <strong>percorso sistematico</strong> ed un incremento costante delle conoscenze ti sar&#224 possibile farne anche un lavoro.</p><br>
                    <div id="more2">
                        <a id="piu" href="corsi.html"><span>Scopri di pi&#249</span></a>
                    </div>
            </div>
            <div id="dx2">
                <h1>Differenza di costi</h1>

            </div>
        </div>

        <div id="page6">
            <canvas id="myChart" style="width:100%;max-width:700px;"></canvas>
        </div>

        <div id="page5">
            <div id="foot">
                <img id="logo_down" src="logo.png">
                    <div id="cont_down">
                        <h3>Contatti</h3>
                        <p id="ind">Telefono: 03084555</p>
                        <p id="ind">Email: uffici@headwaysrl.it</p>
                        <p id="ind">Sito: www.headwaysrl.it</p>
                    </div>
                    <div id="ind_down">
                        <h3>Ufficio Brescia</h3>
                        <p id="ind">Via prova 1</p>
                        <p id="ind">25121</p>
                    </div>
            </div>
            <div id="end">
                <a href="index.html" id="end1">Home</a>
                <a href="investment.html" id="end1">Investi</a>
                <a onclick="contatti()" id="end1">Contatti</a>
                <a href="" id="end1">About</a>
                <a href="privacy" id="end2">Privacy Policy</a>
            </div>
        </div>
        <script src="script.js"></script>
    </body>
</html>
