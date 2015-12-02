<?php
/**
 * Theme related functions.
 *
 */

/**
 * Get title for the webpage by concatenating page specific title with site-wide title.
 *
 * @param string $title for this page.
 * @return string/null wether the title is defined or not.
 */
function get_title($title) {
  global $bohnzo;
  return $title . (isset($bohnzo['title_append']) ? $bohnzo['title_append'] : null);
}
