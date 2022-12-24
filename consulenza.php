<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="consulenza.css">
        <link rel="stylesheet" href="https://use.typekit.net/ect0ndf.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
        <link rel="icon" href="icona-sito.png" type="image">
    </head>
    <body>

<?php include('bar.php')?>

<span id="page">
<div id="page1">
    <div id="test">

        <div id="avanzamento">
            <div id="a"></div>
        </div>

        <div id="top">
            <div id="text">
                <h1>Trova il servizio su misura per te</h1>
                <p>Possiedi gi&agrave un <strong>portafoglio d'investimento</strong> e non sei soddisfatto della sua <strong>performance</strong>? Oppure hai gi&agrave in mente un portafoglio e vuoi un'<strong>analisi</strong>? <a href="#tan">Clicca qui per saperne di pi&ugrave</a>.</p>
                <p>Headway ha sviluppato un sistema per <strong>guidarti</strong> nella scelta del <strong>servizio pi&ugrave adatto</strong> a te.</p> 
                    <div id="more">
                        <a id="piu" onclick="inizia()"><span>Inizia</span></a>
                    </div>
            </div>
                <img id="graf" src="grafica1.png">
        </div>

        <div id="pag1">
            <h2>Il capitale da investire</h2>
            <p>Il <strong>capitale da investire</strong> pu&ograve essere una cifra <strong>subito disponibile</strong> oppure entrate future che possono essere accantonate mensilmente in un <strong>piano di accumulo</strong> (PAC).</p>
            <div id="input">
                <input type="radio" name="scelte" value="si">Ho una cifra subito disponibile<br>
                <input type="radio" name="scelte" value="no">Ho una cifra mensile<br>
                <input type="radio" name="scelte" value="en">Entrambi
            </div>
        </div>
    
        <div id="pag2">
            <h2>Il capitale da investire</h2>
            <p>Per valutare al meglio il <strong>servizio pi&ugrave conveniente</strong> per te, mi serve sapere a <strong>quanto ammonta</strong> il tuo capitale</p>
            <div id="input">
                <input type="radio" name="scelte" value="1">Meno di 10000<br>
                <input type="radio" name="scelte" value="2">Tra 10000 e 50000<br>
                <input type="radio" name="scelte" value="3">Tra 50000 e 200000<br>
                <input type="radio" name="scelte" value="4">Pi&ugrave di 200000
            </div>
        </div>

        <div id="pag21">
            <h2>Il capitale da investire</h2>
            <p>Per valutare al meglio il <strong>servizio pi&ugrave conveniente</strong> per te, mi serve sapere a <strong>quanto ammonta</strong> il tuo capitale</p>
            <div id="input">
                <input type="radio" name="scelte" value="11">Meno di 10000<br>
                <input type="radio" name="scelte" value="21">Tra 10000 e 50000<br>
                <input type="radio" name="scelte" value="31">Tra 50000 e 200000<br>
                <input type="radio" name="scelte" value="41">Pi&ugrave di 200000
            </div>
        </div>
    
        <div id="pag3">
            <h2>Il capitale da investire</h2>
            <p>Quanto sei disposto ad <strong>accantonare</strong> mensilmente?</p>
            <div id="input">
                <input type="radio" name="scelte" value="5">Meno di 300<br>
                <input type="radio" name="scelte" value="6">Tra 300 e 800<br>
                <input type="radio" name="scelte" value="7">Tra 800 e 3000<br>
                <input type="radio" name="scelte" value="8">Pi&ugrave di 3000
            </div>
        </div>

        <div id="pag31">
            <h2>Il capitale da investire</h2>
            <p>Quanto sei disposto ad <strong>accantonare</strong> mensilmente?</p>
            <div id="input">
                <input type="radio" name="scelte" value="51">Meno di 300<br>
                <input type="radio" name="scelte" value="61">Tra 300 e 800<br>
                <input type="radio" name="scelte" value="71">Tra 800 e 3000<br>
                <input type="radio" name="scelte" value="81">Pi&ugrave di 3000
            </div>
        </div>
    
        <div id="pag4">
            <h2>L'orizzonte temporale</h2>
            <p>L'orizzonte temporale di un investimento &egrave quanto si &egrave disposti a <strong>lasciare i soldi</strong> negli asset selezionati</p>
            <p>Nulla ti impedisce di prelevare soldi dal portafoglio quando vuoi, bens&igrave maggiore &egrave l'orizzonte temporale <strong>maggiori sono i guadagni</strong></p> 
            <div id="input">
                <input type="radio" name="scelte" value="min2">Fino a 5 anni<br>
                <input type="radio" name="scelte" value="tra2">Tra i 5 e i 10 anni<br>
                <input type="radio" name="scelte" value="max2">Maggiore di 10 anni
            </div>
        </div>
    
        <div id="pag5">
            <h2>Il consulente finanziario</h2>
            <p>Tutti i nostri servizi sono studiati da un <strong>consulente finanziario</strong>, il quale si occupa della gestione di essi.</p>
            <p>Offriamo consulenza personalizzata per chiunque lo desideri, bens&igrave in alcuni casi la sconsigliamo (capitali minori o brevi orizzonti temporali).</p>
            <p>Desideri una consulenza peronalizzata?</p>
            <div id="input">
                <input type="radio" name="scelte" value="auto">Si<br>
                <input type="radio" name="scelte" value="consulente">No
            </div>
        </div>
    
        <div id="pag6">
            <div id="result1">
                <h1>Consulenza continuativa</h1>
            </div>
            <div id="result2">
                <h1>Abbonamento</h1>
            </div>
            <div id="result3">
                <h1>Consulenza una tantum</h1>
            </div>
        </div>

    </div>
</div>

    <div id="page2">
        <div id="center">
            <div id="left">
                <h1>Siamo la soluzione per<br>migliorare i tuoi investimenti</h1><br><br>
                <p>Uno studio specifico del cliente e un'attenta pianificazione finanziaria ci permettono di creare la <strong>strategia di investimento ideale</strong>. L'essere totalmente indipendenti ci permette di evitare conflitti di interesse e di offrire <strong>assistenza imparziale</strong>.<br>Miriamo a dare ai clienti <strong>serenit&agrave e comprensione</strong> nella gestione del proprio portafoglio di investimento.<br>I nostri servizi sono <strong>studiati ad hoc</strong> per ogni caso specifico, scorri la pagina per scoprire di pi&ugrave...</p>
            </div>
            <div id="right">
                <p>Quanto influiscono i costi di gestione del portafoglio?<br>Le possibilit&agrave <strong>pi&ugrave conosciute</strong> di solito sono le pi&ugrave facili da trovare, ma anche le <strong>pi&ugrave dispendiose</strong>.<br>Basti pensare che una cattiva scelta dei prodotti finanziari &egrave in grado di <strong>dimezzare i tuoi rendimenti</strong>, questo solamente per i costi maggiori.</p>
                    <div id="banche">
                        <h1>26</h1>
                        <p>Percentuale di rendimenti persa dopo 30 anni con una commissione dell'1%</p>
                    </div>
                    <div id="noi">
                        <h1>71</h1>
                        <p>Percentuale di rendimenti persa dopo 30 anni con una commissione del 4%</p>
                    </div>
            </div>
        </div>
    </div>

    <div id="page3">

        <a name="con"></a>
        <div id="continuativa">
            <div id="tri"></div>
            <h1>La nostra consulenza continuativa</h1>
            <p></p>
        </div>

        <div id="abbonamenti">
            <div id="sq"></div>
            <h1>I nostri abbonamenti</h1>
            <p>I nostri portafogli ad abbonamento sono studiati ed aggiornati per ogni scopo diverso</p>
            <table>
                <tr><td></td><td>Rischio</td><td>Rendimento</td><td>Ottimizzazione</td></tr>
                <tr><td id="port"><a onclick="obbligazionario()"><span class="material-symbols-outlined">info</span>Safe obbligazionario</td></a><td><div id="stat"><div></div><div></div></div></td><td><div id="stat"><div></div><div></div><div></div></div></td><td><div id="stat"><div></div><div></div><div></div><div></div></div></td></tr>
                <tr><td id="port"><a onclick="small()"><span class="material-symbols-outlined">info</span>Piccolo investitore</td></a><td><div id="stat"><div></div><div></div><div></div><div></div></div></td><td><div id="stat"><div></div><div></div><div></div><div></div></div></td><td><div id="stat"><div></div><div></div><div></div><div></div></div></td></tr>
                <tr><td id="port"><a onclick="bilanciato()"><span class="material-symbols-outlined">info</span>Bilanciato</td></a><td><div id="stat"><div></div><div></div><div></div></div></td><td><div id="stat"><div></div><div></div><div></div><div></div></div></td><td><div id="stat"><div></div><div></div><div></div><div></div><div></div></div></td></tr>
                <tr><td id="port"><a onclick="aggressivo()"><span class="material-symbols-outlined">info</span>Alto rendimento</td></a><td><div id="stat"><div></div><div></div><div></div><div></div><div></div></div></td><td><div id="stat"><div></div><div></div><div></div><div></div><div></div></div></td><td><div id="stat"><div></div><div></div><div></div><div></div><div></div></div></td></tr>
            </table>   
        </div>

        <a name="tan"></a>
        <div id="tantum">
            <div id="cir"></div>
            <h1>Consulenza una tantum</h1>
            <p></p>
        </div>
</div>
</span>

    <script src="consulenza.js"></script>
    </body>
</html>