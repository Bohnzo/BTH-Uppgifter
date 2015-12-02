<?php
/**
 * This is a Bohnzo pagecontroller.
 *
 */
// Include the essential config-file which also creates the $bohnzo variable with its defaults.
include(__DIR__.'/config.php');

// Add style for csource
$bohnzo['stylesheets'][] = 'css/source.css';

// Create the object to display sourcecode
//$source = new CSource();
$source = new CSource(array('secure_dir' => '..', 'base_dir' => '..'));

// Do it and store it all in variables in the Bohnzo container.
$bohnzo['title'] = "Visa källkod";
$bohnzo['main'] = "<h1>Kika på min källkod</h1>\n" . $source->View();




// Finally, leave it all to the rendering phase of Bohnzo.
include(BOHNZO_THEME_PATH);
