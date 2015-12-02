<?php
/**
 * This is a Bohnzo pagecontroller.
 *
 */
// Include the essential config-file which also creates the $bohnzo variable with its defaults.
include(__DIR__.'/config.php');


// Do it and store it all in variables in the Bohnzo container.
$bohnzo['title'] = "Redovisningar";



$bohnzo['main'] = <<<EOD
<h1>Redovisnignar OOPHP</h1>
<h2>Kmom01</h2>
<p><b>Vilken utvecklingsmiljö använder du?</b> <br/>
Jag använder Atom som textredigerare, XAMMP som lokal webbserver, och testar
alla hemsidor i både Chrome och Firefox. Använder som standard Safari som
webbläsare.</p>

<p><b>Berätta hur det gick att jobba igenom guiden “20 steg för att komma
igång PHP”, var något nytt eller kan du det?</b> <br/>
Då jag precis kört htmlphp-kursen (inte klar med den dock), så var jag redan
bekant med guiden. Väldigt bra att ha tillgänglig dock, för det är fortfarande
lite för många saker som jag inte kan utantill.</p>

<p><b>Vad döpte du din webbmall Anax till?</b> <br/>
Den fick heta Bohnzo, då jag är ett gammalt Led Zeppelin-fan.</p>

<p><b>Vad anser du om strukturen i Anax,
gjorde du några egna förbättringar eller något du hoppade över?</b> <br/>
Jag har inte gjort några förbättringar ännu. Fortfarande fullt upp med att
greppa saker och ting. Så tyvärr hoppade jag för tillfället över javascripten.
Försökte implementera den, men då slutade allt funka och jag hittade inte felet.
Så fick börja om från början igen. Gjorde hela momentet nästa tre gånger, för jag
snurrar bort mig så mycket.</p>

<p><b>Gick det bra att inkludera source.php? </b> <br/>
Att bara kopiera över hela source.php gick utan problem. Att koppla den via modul
tog lite längre tid, men funkade relativt enkelt. Dock fick jag strul med CSS:en,
men efter att ha prövat mig fram lite så löste jag det också.</p>

<p><b>Gjorde du det som en modul i ditt Anax?</b> <br/>
Just så gjorde jag. Som sagt lite struligt med CCS:en och förstod inte exakt
hur jag löste det, men funkar behjälpligt nu i alla fall.</p>

<p><b>Gjorde du extrauppgiften med GitHub?</b> <br/>
Jag började kika lite på den, men satte mig inte in i den riktigt. Jag läser
parallellt med denna kurs en annan kurs på halvfart, och jag har under hösten lagt
i princip dubbelt så mycket tid på mina distansstudier via BTH, än på mina andra kurser. Ändå har jag inte hunnit
klart med alla kursmoment i htmlphp tyvärr. Så det känns tråkigt, och gör att jag
tills vidare inte kommer kunna göra några extrauppgifter, utan får fokusera på att
försöka överleva istället. <br/><b>Tack för mig!</p>

<h2>Kmom02</h2>
<h2>Kmom03</h2>
<h2>Kmom04</h2>


EOD;




// Finally, leave it all to the rendering phase of Bohnzo.
include(BOHNZO_THEME_PATH);
