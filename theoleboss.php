<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <title>Ma page de test</title>
    <script src="https://cdn.plot.ly/plotly-2.20.0.min.js"></script>
    <style>
      #candle {
        position: absolute;
        top: 673px;
        left: 371.5px;
        color: #8295b2;
        background: #1e1e1e;
        border-radius: 40px;
        justify-content: center;
        align-items: center;
        padding: 9px;
        gap: 9px;
        border: none;
        font-size: 12px;
        font-family: "Arial";
        font-weight: bold;
        width: 112.5px;
        height: 32px;
      }

      #ema {
        position: absolute;
        top: 752px;
        left: 371.5px;
        color: #8295b2;
        background: #1e1e1e;
        border-radius: 40px;
        justify-content: center;
        align-items: center;
        padding: 9px;
        gap: 9px;
        border: none;
        font-size: 12px;
        font-family: "Arial";
        font-weight: bold;
        width: 112.5px;
        height: 32px;
      }

      #bollinger {
        position: absolute;
        top: 752px;
        left: 503px;
        color: #8295b2;
        background: #1e1e1e;
        border-radius: 40px;
        justify-content: center;
        align-items: center;
        padding: 9px;
        gap: 9px;
        border: none;
        font-size: 12px;
        font-family: "Arial";
        font-weight: bold;
        width: 112.5px;
        height: 32px;
      }

      #rsi {
        position: absolute;
        top: 752px;
        left: 634.5px;
        color: #8295b2;
        background: #1e1e1e;
        border-radius: 40px;
        justify-content: center;
        align-items: center;
        padding: 9px;
        gap: 9px;
        border: none;
        font-size: 12px;
        font-family: "Arial";
        font-weight: bold;
        width: 112.5px;
        height: 32px;
      }

      #macd {
        position: absolute;
        top: 752px;
        left: 766px;
        color: #8295b2;
        background: #1e1e1e;
        border-radius: 40px;
        justify-content: center;
        align-items: center;
        padding: 9px;
        gap: 9px;
        border: none;
        font-size: 12px;
        font-family: "Arial";
        font-weight: bold;
        width: 112.5px;
        height: 32px;
      }

      #so {
        position: absolute;
        top: 752px;
        left: 897.5px;
        color: #8295b2;
        background: #1e1e1e;
        border-radius: 40px;
        justify-content: center;
        align-items: center;
        padding: 9px;
        gap: 9px;
        border: none;
        font-size: 12px;
        font-family: "Arial";
        font-weight: bold;
        width: 112.5px;
        height: 32px;
      }

      #heurea {
        position: absolute;
        top: 673px;
        left: 644.5px;
        color: white;
        background: #546ee5;
        border-radius: 40px;
        justify-content: center;
        align-items: center;
        padding: 9px;
        gap: 9px;
        border: none;
        font-size: 12px;
        font-family: "Arial";
        font-weight: bold;
        width: 68.67px;
        height: 32px;
      }

      #heureb {
        position: absolute;
        top: 673px;
        left: 732.17px;
        color: #8295b2;
        background: #1e1e1e;
        border-radius: 40px;
        justify-content: center;
        align-items: center;
        padding: 9px;
        gap: 9px;
        border: none;
        font-size: 12px;
        font-family: "Arial";
        font-weight: bold;
        width: 68.67px;
        height: 32px;
      }

      #heurec {
        position: absolute;
        top: 673px;
        left: 819.84px;
        color: #8295b2;
        background: #1e1e1e;
        border-radius: 40px;
        justify-content: center;
        align-items: center;
        padding: 9px;
        gap: 9px;
        border: none;
        font-size: 12px;
        font-family: "Arial";
        font-weight: bold;
        width: 68.67px;
        height: 32px;
      }

      #classic {
        position: absolute;
        top: 673px;
        left: 503px;
        color: white;
        background: #546ee5;
        border-radius: 40px;
        justify-content: center;
        align-items: center;
        padding: 9px;
        gap: 9px;
        border: none;
        font-size: 12px;
        font-family: "Arial";
        font-weight: bold;
        width: 112.5px;
        height: 32px;
      }

      search {
        display: flex;
        flex-direction: row;
        align-items: center;
        padding: 0px 9px 0px 14px;
        position: absolute;
        width: 274px;
        height: 50px;
        left: 41px;
        top: 29px;
        background: #373d4c;
        border-radius: 22px;
      }

      .txt {
        font-family: "Arial";
        font-weight: bold;
        display: flex;
        align-items: center;
        color: #8295b2;
        font-size: 14px;
      }

      type {
        position: absolute;
        top: 649px;
        left: 371px;
      }

      outil {
        position: absolute;
        top: 728px;
        left: 371px;
      }

      heu {
        position: absolute;
        top: 649px;
        left: 644px;
      }

      .search-bar {
        background-color: #373d4c;
        border: none;
        padding: 10px;
        width: 50%;
        font-size: 16px;
      }

      .image-button {
        border: none;
        background-color: transparent;
        cursor: pointer;
        padding: 0;
      }

      .my-image {
        position: absolute;
        top: 42px;
        left: 290px;
        z-index: 2;
      }

      geom {
        position: absolute;
        left: 391px;
        top: 822px;
      }

      agentbased {
        position: absolute;
        left: 636px;
        top: 822px;
      }

      Prophet {
        position: absolute;
        left: 835px;
        top: 827px;
      }

      #sim1 {
        display: flex;
        flex-direction: row;
        justify-content: center;
        align-items: center;
        padding: 9px;
        gap: 9px;

        position: absolute;
        width: 102px;
        height: 32px;
        left: 862px;
        top: 961px;

        background: #373d4c;
        border-radius: 40px;
      }
      #sim2 {
        display: flex;
        flex-direction: row;
        justify-content: center;
        align-items: center;
        padding: 9px;
        gap: 9px;

        position: absolute;
        width: 102px;
        height: 32px;
        left: 640px;
        top: 961px;

        background: #373d4c;
        border-radius: 40px;
      }
      #sim3 {
        display: flex;
        flex-direction: row;
        justify-content: center;
        align-items: center;
        padding: 9px;
        gap: 9px;

        position: absolute;
        width: 102px;
        height: 32px;
        left: 414px;
        top: 961px;

        background: #373d4c;
        border-radius: 40px;
      }
      #rec1 {
        box-sizing: border-box;
        position: absolute;
        width: 189px;
        height: 209px;
        left: 374px;
        top: 800px;
        border: 1px solid #222839;
        border-radius: 20px;
      }
      #rec2 {
        box-sizing: border-box;
        position: absolute;
        width: 189px;
        height: 209px;
        left: 596px;
        top: 799px;
        border: 1px solid #222839;
        border-radius: 20px;
      }
      #rec3 {
        box-sizing: border-box;
        position: absolute;
        width: 189px;
        height: 209px;
        left: 818px;
        top: 799px;
        border: 1px solid #222839;
        border-radius: 20px;
      }
      #rec4 {
        box-sizing: border-box;
        position: absolute;
        width: 302px;
        height: 361px;
        left: 41px;
        top: 648px;
        border: 1px solid #222839;
        border-radius: 20px;
      }
      #rec5 {
        box-sizing: border-box;
        position: absolute;
        width: 370px;
        height: 887px;
        left: 1062px;
        top: 99px;
        border: 1px solid #222839;
        border-radius: 20px;
      }
      OAS {
        position: absolute;
        left: 77px;
        top: 659px;
      }
      lastPrice {
        position: absolute;
        top: 22px;
        left: 545px;
      }
      hourChange {
        position: absolute;
        top: 22px;
        left: 665.5px;
      }
      hourHigh {
        position: absolute;
        top: 22px;
        left: 805px;
      }
      hourLow {
        position: absolute;
        top: 22px;
        left: 929.5px;
      }
      hourVolume {
        position: absolute;
        top: 22px;
        left: 1050px;
      }
      actualPrice {
        position: absolute;
        left: 1166px;
        top: 29px;
      }
      sellHistoric {
        position: absolute;
        top: 114.2px;
        left: 1076px;
      }
      buyHistoric {
        position: absolute;
        top: 564.2px;
        left: 1076px;
      }
      Price {
        position: absolute;
        top: 154px;
        left: 1076px;
      }
      Amount {
        position: absolute;
        top: 154px;
        left: 1182px;
      }
      Total {
        position: absolute;
        top: 154px;
        left: 1296px;
      }
    </style>
  </head>

  <body style="background-color: rgb(30, 30, 30)">
    <div id="tester" style="width: 1015.13px; height: 579px"></div>
    <div id="rec1"></div>
    <div id="rec2"></div>
    <div id="rec3"></div>
    <div id="rec4"></div>
    <div id="rec5"></div>

    <type><span class="txt">Type</span></type>
    <outil><span class="txt">Outils d'Analyse Technique</span></outil>
    <heu><span class="txt">Temps</span></heu>
    <lastPrice><span class="txt">Last Price</span></lastPrice>
    <hourChange><span class="txt">24h Change</span></hourChange>
    <hourHigh><span class="txt">24h High</span></hourHigh>
    <hourLow><span class="txt">24h Low</span></hourLow>
    <hourVolume><span class="txt">24h Volume</span></hourVolume>
    <actualPrice><span class="txt">actualPrice</span></actualPrice>
    <sellHistoric style="white-space: nowrap"
      ><span class="txt">Historique Des Ventes</span></sellHistoric
    >
    <buyHistoric style="white-space: nowrap"
      ><span class="txt">Historique Des Achats</span></buyHistoric
    >
    <Price><span class="txt">Price</span></Price>
    <Amount><span class="txt">Amount</span></Amount>
    <Total><span class="txt">Total</span></Total>
    <Prophet><span class="txt">Modèle NeuralProphet</span></Prophet>
    <div style="text-align: center">
      <geom
        ><span class="txt" style="display: block"
          >Modèle Géométrique<br />
          Brownien</span
        ></geom
      >
    </div>
    <agentbased><span class="txt">Modèle Basé Agent</span></agentbased>
    <OAS><span class="txt">Outils d’Analyse Statistique</span></OAS>

    <!-- Create the button -->
    <button id="candle">CANDLESTICKS</button>
    <button id="classic">CLASSIC</button>
    <button id="ema">EMA</button>
    <button id="bollinger">BOLLINGER</button>
    <button id="rsi">RSI</button>
    <button id="macd">MACD</button>
    <button id="so">SO</button>
    <button id="heurea">1M</button>
    <button id="heureb">6M</button>
    <button id="heurec">1A</button>
    <button id="sim1">Simulation</button>
    <button id="sim2">Simulation</button>
    <button id="sim3">Simulation</button>


    <form method="POST" action="result">
        <search><input type="text" id="inputValue" name="inputValue" placeholder="Search..." class="search-bar"></search>
        <button class="image-button" id="loupe">
          <img src="loupe.png" width="25" class="my-image">
        </button>
    </form>


    <?php
        $fabsi = file("CS/Python/templates/absi.txt", FILE_IGNORE_NEW_LINES);
        $fordo = file("CS/Python/templates/ordo.txt", FILE_IGNORE_NEW_LINES);
        $fopen = file("CS/Python/templates/open.txt", FILE_IGNORE_NEW_LINES);
        $fclose = file("CS/Python/templates/close.txt", FILE_IGNORE_NEW_LINES);
        $fhigh = file("CS/Python/templates/high.txt", FILE_IGNORE_NEW_LINES);
        $flow = file("CS/Python/templates/low.txt", FILE_IGNORE_NEW_LINES);
        $fewma = file("CS/Python/templates/ewma.txt", FILE_IGNORE_NEW_LINES);
        $fbolup = file("CS/Python/templates/bolup.txt", FILE_IGNORE_NEW_LINES);
        $fboldown = file("CS/Python/templates/boldown.txt", FILE_IGNORE_NEW_LINES);
        $frsi = file("CS/Python/templates/rsi.txt", FILE_IGNORE_NEW_LINES);
        $fmacd = file("CS/Python/templates/macd.txt", FILE_IGNORE_NEW_LINES);
        $fsignal = file("CS/Python/templates/signal.txt", FILE_IGNORE_NEW_LINES);
        $fhist = file("CS/Python/templates/hist.txt", FILE_IGNORE_NEW_LINES);
        $frapidso = file("CS/Python/templates/fastso.txt", FILE_IGNORE_NEW_LINES);
        $fslowso = file("CS/Python/templates/slowso.txt", FILE_IGNORE_NEW_LINES);
        $fbrownian = file("CS/Python/templates/brownian.txt", FILE_IGNORE_NEW_LINES);
        $fdates_pred = file("CS/Python/templates/dates_list_pred.txt", FILE_IGNORE_NEW_LINES);
    ?>
    <script>
        var candle = document.getElementById("candle");
        var classic = document.getElementById("classic");
        var ema = document.getElementById("ema");
        var bollinger = document.getElementById("bollinger");
        var rsi = document.getElementById("rsi");
        var macd = document.getElementById("macd");
        var so = document.getElementById("so");
        var heurea = document.getElementById("heurea");
        var heureb = document.getElementById("heureb");
        var heurec = document.getElementById("heurec");
        var sim1 = document.getElementById("sim1");
        var sim2 = document.getElementById("sim2");
        var sim3 = document.getElementById("sim3");

        /*const currentDate = new Date();
        let newdate = new Date();  // create a new date object
        newdate.setMonth(currentDate.getMonth() - 1);  // add one month to the date*/

        var layout = {
          paper_bgcolor:'rgba(0,0,0,0)',
          plot_bgcolor:'rgba(0,0,0,0)'
    
        };

        var absi = JSON.parse('<?php echo json_encode($fabsi); ?>');
        var ordo = JSON.parse('<?php echo json_encode($fordo); ?>');
        var ope = JSON.parse('<?php echo json_encode($fopen); ?>');
        var close = JSON.parse('<?php echo json_encode($fclose); ?>');
        var high = JSON.parse('<?php echo json_encode($fhigh); ?>');
        var low = JSON.parse('<?php echo json_encode($flow); ?>');
        var ewma = JSON.parse('<?php echo json_encode($fewma); ?>');
        var bolup = JSON.parse('<?php echo json_encode($fbolup); ?>');
        var boldown = JSON.parse('<?php echo json_encode($fboldown); ?>');
        var rs = JSON.parse('<?php echo json_encode($frsi); ?>');
        var mac = JSON.parse('<?php echo json_encode($fmacd); ?>');
        var sig = JSON.parse('<?php echo json_encode($fsignal); ?>');
        var his = JSON.parse('<?php echo json_encode($fhist); ?>');
        var fasts = JSON.parse('<?php echo json_encode($frapidso); ?>');
        var slows = JSON.parse('<?php echo json_encode($fslowso); ?>');
        var brownian = JSON.parse('<?php echo json_encode($fbrownian); ?>');
        var dates_pred = JSON.parse('<?php echo json_encode($fdates_pred); ?>');

        let intordo = ordo.map(parseFloat);
        let intopen = ope.map(parseFloat);
        let intclose = close.map(parseFloat);
        let inthigh = high.map(parseFloat);
        let intlow = low.map(parseFloat);
        let intewma = ewma.map(parseFloat);
        let intbolup = bolup.map(parseFloat);
        let intboldown = boldown.map(parseFloat);
        let intrsi = rs.map(parseFloat);
        let intmacd = mac.map(parseFloat);
        let intsignal = sig.map(parseFloat);
        let inthist = his.map(parseFloat);
        let intfastso = fasts.map(parseFloat);
        let intslowso = slows.map(parseFloat);
        let intbrownian = brownian.map(parseFloat);
        let intdates_pred = dates_pred.map(parseFloat);
        let dabsi = absi.map(function(dateString) {
          return new Date(dateString);
        });
        var cdl = false;

        function myFunction(x) {
          const currentDate = new Date();
          let newdate = new Date();  // create a new date object
          newdate.setMonth(currentDate.getMonth() - x);  // add one month to the date
          window.filteredDates = dabsi.filter(function(date) {
            let nDate = new Date(date);
            return (nDate >= newdate && nDate <= currentDate);
          });
          window.subordo = intordo.slice(-filteredDates.length-1, -1);
          window.subopen = intopen.slice(-filteredDates.length-1, -1);
          window.subclose = intclose.slice(-filteredDates.length-1, -1);
          window.subhigh = inthigh.slice(-filteredDates.length-1, -1);
          window.sublow = intlow.slice(-filteredDates.length-1, -1);
          window.subewma = intewma.slice(-filteredDates.length-1, -1);
          window.subbolup = intbolup.slice(-filteredDates.length-1, -1);
          window.subboldown = intboldown.slice(-filteredDates.length-1, -1);
          window.subrsi = intrsi.slice(-filteredDates.length-1, -1);
          window.submacd = intmacd.slice(-filteredDates.length-1, -1);
          window.subsignal = intsignal.slice(-filteredDates.length-1, -1);
          window.subhist = inthist.slice(-filteredDates.length-1, -1);
          window.subfastso = intfastso.slice(-filteredDates.length-1, -1);
          window.subslowso = intslowso.slice(-filteredDates.length-1, -1);
          window.subbrownian = intbrownian.slice(-filteredDates.length-1, -1);
          window.subdates_pred = intdates_pred.slice(-filteredDates.length-1, -1);
        }
        myFunction(1);
        console.log(filteredDates)
////////////////////////////////////////////////////////////////////////////
      
        function mycandle() {
            TESTER = document.getElementById('tester');
            Plotly.newPlot( TESTER, [{
            x: filteredDates,
            open: subopen,
            high: subhigh,
            close: subclose,
            low: sublow, type: 'candlestick'}], layout);
        }
        candle.addEventListener('click', function() {
          candle.style.backgroundColor ='#546EE5';
          candle.style.color = 'white';
          classic.style.backgroundColor ='rgb(30, 30, 30)';
          classic.style.color = '#8295B2';
          ema.style.backgroundColor ='rgb(30, 30, 30)';
          ema.style.color = '#8295B2';
          bollinger.style.backgroundColor ='rgb(30, 30, 30)';
          bollinger.style.color = '#8295B2';
          macd.style.backgroundColor ='rgb(30, 30, 30)';
          macd.style.color = '#8295B2';
          rsi.style.backgroundColor ='rgb(30, 30, 30)';
          rsi.style.color = '#8295B2';
          so.style.backgroundColor ='rgb(30, 30, 30)';
          so.style.color = '#8295B2';
          mycandle();
          cdl = true;
        });
        
        function myplot() {
          TESTER = document.getElementById('tester');
          Plotly.newPlot( TESTER, [{
          x: filteredDates,
          y: subordo,
          line: {color: 'rgb(52, 152, 219)'}
          }], layout);
        }

        classic.addEventListener('click', function() {
          classic.style.backgroundColor ='#546EE5'
          classic.style.color = 'white';
          candle.style.backgroundColor ='rgb(30, 30, 30)';
          candle.style.color = '#8295B2';
          ema.style.backgroundColor ='rgb(30, 30, 30)';
          ema.style.color = '#8295B2';
          bollinger.style.backgroundColor ='rgb(30, 30, 30)';
          bollinger.style.color = '#8295B2';
          macd.style.backgroundColor ='rgb(30, 30, 30)';
          macd.style.color = '#8295B2';
          rsi.style.backgroundColor ='rgb(30, 30, 30)';
          rsi.style.color = '#8295B2';
          so.style.backgroundColor ='rgb(30, 30, 30)';
          so.style.color = '#8295B2';
          myplot();
          cdl = false;
        });

        heurea.addEventListener('click', function() {
          heurea.style.backgroundColor ='#546EE5'
          heurea.style.color = 'white';
          heureb.style.backgroundColor ='rgb(30, 30, 30)';
          heureb.style.color = '#8295B2';
          heurec.style.backgroundColor ='rgb(30, 30, 30)';
          heurec.style.color = '#8295B2';
          ema.style.backgroundColor ='rgb(30, 30, 30)';
          ema.style.color = '#8295B2';
          bollinger.style.backgroundColor ='rgb(30, 30, 30)';
          bollinger.style.color = '#8295B2';
          macd.style.backgroundColor ='rgb(30, 30, 30)';
          macd.style.color = '#8295B2';
          rsi.style.backgroundColor ='rgb(30, 30, 30)';
          rsi.style.color = '#8295B2';
          so.style.backgroundColor ='rgb(30, 30, 30)';
          so.style.color = '#8295B2';
          myFunction(1);
          if (cdl) {
            mycandle();
          } else {myplot();}
        });

        heureb.addEventListener('click', function() {
          heureb.style.backgroundColor ='#546EE5'
          heureb.style.color = 'white';
          heurea.style.backgroundColor ='rgb(30, 30, 30)';
          heurea.style.color = '#8295B2';
          heurec.style.backgroundColor ='rgb(30, 30, 30)';
          heurec.style.color = '#8295B2';
          ema.style.backgroundColor ='rgb(30, 30, 30)';
          ema.style.color = '#8295B2';
          bollinger.style.backgroundColor ='rgb(30, 30, 30)';
          bollinger.style.color = '#8295B2';
          macd.style.backgroundColor ='rgb(30, 30, 30)';
          macd.style.color = '#8295B2';
          rsi.style.backgroundColor ='rgb(30, 30, 30)';
          rsi.style.color = '#8295B2';
          so.style.backgroundColor ='rgb(30, 30, 30)';
          so.style.color = '#8295B2';
          myFunction(6);
          if (cdl) {
            mycandle();
          } else {myplot();}
        });

        heurec.addEventListener('click', function() {
          heurec.style.backgroundColor ='#546EE5'
          heurec.style.color = 'white';
          heureb.style.backgroundColor ='rgb(30, 30, 30)';
          heureb.style.color = '#8295B2';
          heurea.style.backgroundColor ='rgb(30, 30, 30)';
          heurea.style.color = '#8295B2';
          ema.style.backgroundColor ='rgb(30, 30, 30)';
          ema.style.color = '#8295B2';
          bollinger.style.backgroundColor ='rgb(30, 30, 30)';
          bollinger.style.color = '#8295B2';
          macd.style.backgroundColor ='rgb(30, 30, 30)';
          macd.style.color = '#8295B2';
          rsi.style.backgroundColor ='rgb(30, 30, 30)';
          rsi.style.color = '#8295B2';
          so.style.backgroundColor ='rgb(30, 30, 30)';
          so.style.color = '#8295B2';
          myFunction(12);
          if (cdl) {
            mycandle();
          } else {myplot();}
        });

     //////////////////////////////////////////////////////////////////////////
     function myewma() {
          if (cdl) {
            TESTER = document.getElementById('tester');
            Plotly.newPlot( TESTER, [{
            x: filteredDates,
            y: subewma,
            name: 'SMA',
            line: {color: 'rgb(243, 156, 18)'}
            },{
            x: filteredDates,
            open: subopen,
            high: subhigh,
            close: subclose,
            low: sublow, type: 'candlestick'}], layout);
          } else {
            TESTER = document.getElementById('tester');
            Plotly.newPlot( TESTER, [{
            x: filteredDates,
            y: subewma,
            name: 'SMA',
            line: {color: 'rgb(243, 156, 18)'}
            },{
            x: filteredDates,
            y: subordo,
            name: 'Stock Price',
            line: {color: 'rgb(52, 152, 219)'}
            }], layout);
          }
        }

        ema.addEventListener('click', function() {
          if (ema.style.backgroundColor == 'rgb(30, 30, 30)') {
            ema.style.backgroundColor ='#546EE5'
            ema.style.color = 'white';
            bollinger.style.backgroundColor ='rgb(30, 30, 30)';
            bollinger.style.color = '#8295B2';
            macd.style.backgroundColor ='rgb(30, 30, 30)';
            macd.style.color = '#8295B2';
            rsi.style.backgroundColor ='rgb(30, 30, 30)';
            rsi.style.color = '#8295B2';
            so.style.backgroundColor ='rgb(30, 30, 30)';
            so.style.color = '#8295B2';
            myewma();
          } else {
            ema.style.backgroundColor ='rgb(30, 30, 30)'
            ema.style.color = '#8295B2';
            if (cdl) {
              mycandle();
            } else {myplot();}
          }
        });
/////////////////////////////////////////////////////////////////////////////////

        function mybollinger() {
            if (cdl) {
                TESTER = document.getElementById('tester');
                Plotly.newPlot( TESTER, [{
                x: filteredDates,
                y: subbolup,
                name: 'Bollinger Up',
                line: {color:'rgb(52, 213, 69)'}
                },{
                x: filteredDates,
                y: subboldown,
                name: 'Bollinger Down',
                line: {color:'rgb(243, 58, 18)'}
                },{
                x: filteredDates,
                open: subopen,
                high: subhigh,
                close: subclose,
                low: sublow, type: 'candlestick'}], layout);
            } else {
                TESTER = document.getElementById('tester');
                Plotly.newPlot( TESTER, [{
                x: filteredDates,
                y: subbolup,
                name: 'Bollinger Up',
                line: {color:'rgb(52, 213, 69)'}
                },{
                x: filteredDates,
                y: subboldown,
                name: 'Bollinger Down',
                line: {color:'rgb(243, 58, 18)'}
                },{
                x: filteredDates,
                y: subordo,
                name: 'Stock Price',
                line: {color: 'rgb(52, 152, 219)'}}], layout);
            }
        } 

        bollinger.addEventListener('click', function() {
            if (bollinger.style.backgroundColor == 'rgb(30, 30, 30)') {
                bollinger.style.backgroundColor ='#546EE5'
                bollinger.style.color = 'white';
                ema.style.backgroundColor ='rgb(30, 30, 30)';
                ema.style.color = '#8295B2';
                macd.style.backgroundColor ='rgb(30, 30, 30)';
                macd.style.color = '#8295B2';
                rsi.style.backgroundColor ='rgb(30, 30, 30)';
                rsi.style.color = '#8295B2';
                so.style.backgroundColor ='rgb(30, 30, 30)';
                so.style.color = '#8295B2';
                mybollinger();
            } else {
                bollinger.style.backgroundColor ='rgb(30, 30, 30)'
                bollinger.style.color = '#8295B2';
                if (cdl) {
                mycandle();
                } else {myplot();}
            }
        });
/////////////////////////////////////////////////////////////////////////////////////
        function myrsi() {
          if (cdl) {
            TESTER = document.getElementById('tester');
            Plotly.newPlot( TESTER, [{
            x: filteredDates,
            y: subrsi,
            name: 'RSI',
            line: {color: 'rgb(243, 156, 18)'}
            },
            {
            x: filteredDates,
            open: subopen,
            high: subhigh,
            close: subclose,
            low: sublow, type: 'candlestick'}], layout);
          } else {
            TESTER = document.getElementById('tester');
            Plotly.newPlot( TESTER, [{
            x: filteredDates,
            y: subrsi,
            name: 'RSI',
            line: {color: 'rgb(243, 156, 18)'}
            },{
            x: filteredDates,
            y: subordo,
            name: 'Stock Price',
            line: {color: 'rgb(52, 152, 219)'} }], layout);
          }
        }

        rsi.addEventListener('click', function() {
          if (rsi.style.backgroundColor == 'rgb(30, 30, 30)') {
            rsi.style.backgroundColor ='#546EE5'
            rsi.style.color = 'white';
            bollinger.style.backgroundColor ='rgb(30, 30, 30)';
            bollinger.style.color = '#8295B2';
            macd.style.backgroundColor ='rgb(30, 30, 30)';
            macd.style.color = '#8295B2';
            ema.style.backgroundColor ='rgb(30, 30, 30)';
            ema.style.color = '#8295B2';
            so.style.backgroundColor ='rgb(30, 30, 30)';
            so.style.color = '#8295B2';
            myrsi();
          } else {
            rsi.style.backgroundColor ='rgb(30, 30, 30)'
            rsi.style.color = '#8295B2';
            if (cdl) {
              mycandle();
            } else {myplot();
            }
          }
        });
/////////////////////////////////////////////////////////////////////////
    function mymacd() {
          if (cdl) {
            TESTER = document.getElementById('tester');
            Plotly.newPlot( TESTER, [{
            x: filteredDates,
            y: submacd,
            name: 'MACD'
            },{
            x: filteredDates,
            y: subsignal,
            name: 'Signal'
            },{
              x: filteredDates,
              y: subhist,
              name: 'Difference',
              type:'bar'
            }], layout);
          } else {
            TESTER = document.getElementById('tester');
            Plotly.newPlot( TESTER, [{
            x: filteredDates,
            y: submacd,
            name: 'MACD',
            },{
            x: filteredDates,
            y: subsignal, 
            name: 'Signal'
            },{
            x: filteredDates,
            y: subhist,
            name: 'Difference',
            type:'bar'}], layout,{displayModeBar: false});
          }
        }


        macd.addEventListener('click', function() {
          if (macd.style.backgroundColor == 'rgb(30, 30, 30)') {
            macd.style.backgroundColor ='#546EE5'
            macd.style.color = 'white';
            bollinger.style.backgroundColor ='rgb(30, 30, 30)';
            bollinger.style.color = '#8295B2';
            ema.style.backgroundColor ='rgb(30, 30, 30)';
            ema.style.color = '#8295B2';
            rsi.style.backgroundColor ='rgb(30, 30, 30)';
            rsi.style.color = '#8295B2';
            so.style.backgroundColor ='rgb(30, 30, 30)';
            so.style.color = '#8295B2';
            mymacd();
          } else {
            macd.style.backgroundColor ='rgb(30, 30, 30)'
            macd.style.color = '#8295B2';
            if (cdl) {
              mycandle();
            } else {myplot();
            }
          }
        });

/////////////////////////////////////////////////////////////////////////////
        const list_20 = [];
        const list_80 = [];

          for (let i = 0; i < 2000; i++) {
            list_20.push(20);
            list_80.push(80);
          }

          function myso() {
          if (cdl) {
            TESTER = document.getElementById('tester');
            Plotly.newPlot( TESTER, [{
            x: filteredDates,
            y: subfastso,
            line:{
              color: 'rgb(142, 68, 173)'
            },
            name: 'Fast Stochastic Oscillator'
            },{
            x: filteredDates,
            y: subslowso,
            name: 'Slow Stochastic Oscillator'
            },{
            x: filteredDates,
            y: list_20,
            name: 'Oversold',
            mode: 'lines',
            line: {
              dash: 'dot',
              color: 'rgb(52, 213, 69)',
              width: 4
            }
            },{
            x: filteredDates,
            y: list_80,
            mode: 'lines',
            name: 'Overbought',
            line: {
              dash: 'dot',
              color: 'rgb(243, 58, 18)',
              width: 4
            }
            }], layout);
          } else {
            TESTER = document.getElementById('tester');
            Plotly.newPlot( TESTER, [{
            x: filteredDates,
            y: subfastso,
            name: 'Fast Stochastic Oscillator',
            line:{
              color: 'rgb(142, 68, 173)'
            }
            },{
            x: filteredDates,
            y: subslowso,
            name: 'Slow Stochastic Oscillator'
            },{
            x: filteredDates,
            y: list_20,
            name: 'Oversold',
            mode: 'lines',
            line: {
              dash: 'dot',
              color: 'rgb(52, 213, 69)',
              width: 4
            }
            },{
            x: filteredDates,
            y: list_80,
            mode: 'lines',
            name: 'Overbought',
            line: {
              dash: 'dot',
              color: 'rgb(243, 58, 18)',
              width: 4
            }
            }], layout);
          }
        }

        so.addEventListener('click', function() {
          if (so.style.backgroundColor == 'rgb(30, 30, 30)') {
            so.style.backgroundColor ='#546EE5'
            so.style.color = 'white';
            bollinger.style.backgroundColor ='rgb(30, 30, 30)';
            bollinger.style.color = '#8295B2';
            macd.style.backgroundColor ='rgb(30, 30, 30)';
            macd.style.color = '#8295B2';
            rsi.style.backgroundColor ='rgb(30, 30, 30)';
            rsi.style.color = '#8295B2';
            ema.style.backgroundColor ='rgb(30, 30, 30)';
            ema.style.color = '#8295B2';
            myso();
          } else {
            so.style.backgroundColor ='rgb(30, 30, 30)'
            so.style.color = '#8295B2';
            if (cdl) {
              mycandle();
            } else {myplot();
            }
          }
        });
////////////////////////////////////////////////////////////////:
        function mybrownian() {
            TESTER = document.getElementById('tester');
            Plotly.newPlot( TESTER, [{
            x: filteredDates,
            y: subbrownian,
            name: 'Brownian',
            line: {color: 'rgb(243, 156, 18)'}
            },{
            x: filteredDates,
            y: subordo,
            name: 'Stock Price',
            line: {color: 'rgb(52, 152, 219)'}
            }], layout);
        }

        sim1.addEventListener('click', function() {
          if (ema.style.backgroundColor == 'rgb(30, 30, 30)') {
            sim1.style.backgroundColor ='#546EE5'
            sim1.style.color = 'white';
            bollinger.style.backgroundColor ='rgb(30, 30, 30)';
            bollinger.style.color = '#8295B2';
            macd.style.backgroundColor ='rgb(30, 30, 30)';
            macd.style.color = '#8295B2';
            rsi.style.backgroundColor ='rgb(30, 30, 30)';
            rsi.style.color = '#8295B2';
            so.style.backgroundColor ='rgb(30, 30, 30)';
            so.style.color = '#8295B2';
            ema.style.backgroundColor ='rgb(30, 30, 30)';
            ema.style.color = '#8295B2';
            mybrownian();
          } else {
            sim1.style.backgroundColor ='rgb(30, 30, 30)'
            sim1.style.color = '#8295B2';
            if (cdl) {
              mycandle();
            } else {
              myplot();
            }
          }
        });

      myplot();
    </script>
  </body>
</html>
