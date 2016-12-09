<?php

/**
 * Implements hook_panels_layouts()
 */

function bc16_foundation_1col_wide_panels_layouts() {
  $items['foundation_1col_wide'] = array(
    'title' => t('Foundation: 1 column WIDE row'),
    'category' => t('Foundation: 1'),
    'icon' => 'foundation_1col.png',
    'theme' => 'foundation_1col_wide',
    //'admin css' => '../foundation_panels_admin.css',
    'regions' => array('middle' => t('Main column')),
  );
  return $items;
}
