<?php
/**
 * This is a Bohnzo pagecontroller.
 *
 */
// Include the essential config-file which also creates the $bohnzo variable with its defaults.
include(__DIR__.'/config.php');


// Do it and store it all in variables in the Bohnzo container.
$bohnzo['title'] = "404";
$bohnzo['header'] = "";
$bohnzo['main'] = "This is a Bohnzo 404. Document is not here.";
$bohnzo['footer'] = "";

// Send the 404 header
header("HTTP/1.0 404 Not Found");


// Finally, leave it all to the rendering phase of Bohnzo.
include(BOHNZO_THEME_PATH);
