<?php


/**
 * Implements template_preprocess_page().
 */
function chardugtheme_preprocess_page(&$vars) {
  $vars['skyline'] = base_path() . path_to_theme() . '/img/charlotte-image.jpg';

}

/**
 * Impliments theme_link().
 */
function chardugtheme_link($vars) {
  $def = get_defined_vars();
  return '<a href="' . check_plain(url($vars['path'], $vars['options'])) . '"' . drupal_attributes($vars['options']['attributes']) . '>' . ($vars['options']['html'] ? $vars['text'] : check_plain($vars['text'])) . '</a>';
  
}
