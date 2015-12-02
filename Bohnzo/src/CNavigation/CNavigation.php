<?php
/*
$menu = array(
  'home'  => array('text'=>'Home',  'url'=>'?p=home'),
  'away'  => array('text'=>'Away',  'url'=>'?p=away'),
  'about' => array('text'=>'About', 'url'=>'?p=about'),
);
*/


class CNavigation {
  public static function GenerateMenu($items, $class) {
   $html = "<nav class='$class'>\n";
    foreach($items as $key => $item) {
        $selected = basename($_SERVER['SCRIPT_FILENAME']) == $item['url'] ? 'selected' : null;
        $html .= "<a href='{$item['url']}' class='{$selected}'>{$item['text']}</a>\n";
    }
    $html .= "</nav>\n";
    return $html;
  }
};
