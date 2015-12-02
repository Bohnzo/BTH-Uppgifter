<?php
/**
 * Config-file for Bohnzo. Change settings here to affect installation.
 *
 */

/**
 * Set the error reporting.
 *
 */
error_reporting(-1);              // Report all type of errors
ini_set('display_errors', 1);     // Display all errors
ini_set('output_buffering', 0);   // Do not buffer outputs, write directly


/**
 * Define Bohnzo paths.
 *
 */
define('BOHNZO_INSTALL_PATH', __DIR__ . '/..');
define('BOHNZO_THEME_PATH', BOHNZO_INSTALL_PATH . '/theme/render.php');


/**
 * Include bootstrapping functions.
 *
 */
include(BOHNZO_INSTALL_PATH . '/src/bootstrap.php');


/**
 * Start the session.
 *
 */
session_name(preg_replace('/[^a-z\d]/i', '', __DIR__));
session_start();


/**
 * Create the Bohnzo variable.
 *
 */
$bohnzo = array();

/**
* Session for the dice-game.
*
*/
$_SESSION['dicehand'] = null;

/**
 * Site wide settings.
 *
 */
$bohnzo['lang']         = 'sv';
$bohnzo['title_append'] = ' | Bohnzo en webbtemplate';

// PÅ TEST!
$bohnzo['header'] = <<<EOD
<img class='sitelogo' src='img/B.png' alt='Bohnzo Logo'/>
<span class='sitetitle'>Bohnzo webbtemplate</span>
<span class='siteslogan'>Återanvändbara moduler för webbutveckling med PHP</span>
EOD;

$bohnzo['navbar'] = array(
  'Me'  => array('text'=>'Om mig',  'url'=>'me.php'),
  'away'  => array('text'=>'Redovisningar',  'url'=>'report.php'),
  'about' => array('text'=>'Källkod', 'url'=>'source.php'),
  'dice' => array('text'=>'Tärningsspel', 'url'=>'dice.php'),
);

$bohnzo['footer'] = <<<EOD
<footer><span class='sitefooter'>Copyright (c) John Werner  |
<a href='https://github.com/bohnzo'>Bohnzo på GitHub</a> |
<a href='http://validator.w3.org/unicorn/check?ucn_uri=referer&amp;ucn_task=conformance'>
Unicorn</a></span></footer>
EOD;

/**
 * Theme related settings.
 *
 */
$bohnzo['stylesheets'] = array('css/style.css');
$bohnzo['favicon']    = 'img/favicon.ico';
