<?php
/**
 * This is a Bohnzo pagecontroller.
 *
 */
// Include the essential config-file which also creates the $bohnzo variable with its defaults.
include(__DIR__.'/config.php');


// Do it and store it all in variables in the Bohnzo container.
$bohnzo['title'] = "It's-a Me, Bohnzo";



$bohnzo['main'] = <<<EOD
<h1>Hej kära besökare!</h1>
<p>Mitt namn är John Werner och det här är min sida. Den bygger på funktionaliteten
i det lilla ramverket Bohnzo, baserat på Anax.</p>
EOD;

// dump($_SESSION);


// Finally, leave it all to the rendering phase of Bohnzo.
include(BOHNZO_THEME_PATH);
