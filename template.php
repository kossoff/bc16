<?php

/**
 * Implements template_preprocess_html().
 */
function bc16_preprocess_html(&$variables) {
}

/**
 * Implements template_preprocess_page.
 */
function bc16_preprocess_page(&$variables) {
}

/**
 * Implements template_preprocess_node.
 */
function bc16_preprocess_node(&$variables) {
}


function bc16_links__topbar_main_menu($variables) {
  // We need to fetch the links ourselves because we need the entire tree.
  $links = menu_tree_output(menu_tree_all_data(variable_get('menu_main_links_source', 'main-menu')));
  $output = _zurb_foundation_links($links);
  $variables['attributes']['class'][] = 'right';

  // return '<ul' . drupal_attributes($variables['attributes']) . '><li><a href="/"><i class="fa fa-home"></i></a></li>' . $output . '<li class="has-form"><a href="#" class="button radius">Заказать кейтеринг</a></li></ul>';
  return '<ul' . drupal_attributes($variables['attributes']) . '><li><a href="/"><i class="fa fa-home"></i></a></li>' . $output . '</ul>';
}
