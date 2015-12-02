<?php

include(__DIR__.'/config.php');

/**
* The Dice game
*
*/
$dice = new CDice100();

// Do it and store it all in variables in the Bohnzo container.
$bohnzo['title'] = "Tärningsspelet 100";
$bohnzo['main'] = "
<link rel='stylesheet' type='text/css' href='css/dice.css'/>

<h1 class='headers'>Tärningsspelet 100</h1>
<p><b> Här är resultatet: </b></p>

    <div>
        <ul><li><a href='?new'>Nytt Spel</a></li>
          <li><a href='?roll'>Kasta</a></li>
          <li><a href='?save'>Spara</a></li></ul>
          </div>
          <div>
</div>";

$bohnzo['main'] .= $dice->View();


// Finally, leave it all to the rendering phase of Bohnzo.
include(BOHNZO_THEME_PATH);
