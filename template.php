<?php

function d7base_preprocess_html(&$vars) {
  drupal_add_html_head(array(
    '#type' => 'html_tag',
    '#tag' => 'meta',
    '#attributes' => array(
      'name' => 'viewport',
      'content' => 'width=device-width, initial-scale=1.0',
    )
  ), 'meta_viewport');
}

function d7base_preprocess_page(&$vars) {
  if (!empty($vars['node']) && !empty($vars['node']->type)) {
    $vars['theme_hook_suggestions'][] = 'page__node__' . $vars['node']->type;
  }
}
