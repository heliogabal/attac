<?php
/*
  Preprocess
*/


function attac_preprocess_html(&$vars) {
  //  kpr($vars['content']);
}

function attac_preprocess_page(&$vars,$hook) {
  //typekit
  //drupal_add_js('http://use.typekit.com/XXX.js', 'external');
  //drupal_add_js('try{Typekit.load();}catch(e){}', array('type' => 'inline'));

  //webfont
  //drupal_add_css('http://cloud.webtype.com/css/CXXXX.css','external');

  //googlefont
  //  drupal_add_css('http://fonts.googleapis.com/css?family=Bree+Serif','external');

  // If this is a panel page, add template suggestions.
  // Must have Ctools Page Manager enabled. Uncomment to use.
  if (module_exists('page_manager')) {
    if($panel_page = page_manager_get_current_page()) {
      // add a generic suggestion for all panel pages
      $vars['theme_hook_suggestions'][] = 'page__panel';

      // add the panel page machine name to the template suggestions
      $vars['theme_hook_suggestions'][] = 'page__' . $panel_page['name'];

      //add a body class for good measure
      $body_classes[] = 'page-panel';
    }
  }
}

function attac_preprocess_region(&$vars,$hook) {
  //  kpr($vars['content']);
}

function attac_preprocess_block(&$vars, $hook) {
  //  kpr($vars['content']);

  //lets look for unique block in a region $region-$blockcreator-$delta
   $block =
   $vars['elements']['#block']->region .'-'.
   $vars['elements']['#block']->module .'-'.
   $vars['elements']['#block']->delta;

  // print $block .' ';
   switch ($block) {
     case 'header-menu_block-2':
       $vars['classes_array'][] = '';
       break;
     case 'sidebar-system-navigation':
       $vars['classes_array'][] = '';
       break;
    default:

    break;

   }


  switch ($vars['elements']['#block']->region) {
    case 'header':
      $vars['classes_array'][] = '';
      break;
    case 'sidebar':
      $vars['classes_array'][] = '';
      $vars['classes_array'][] = '';
      break;
    default:

      break;
  }

}

function attac_preprocess_node(&$vars,$hook) {
  //  kpr($vars['content']);
}

function attac_preprocess_comment(&$vars,$hook) {
  //  kpr($vars['content']);
}

function attac_preprocess_field(&$vars,$hook) {
  //  kpr($vars['content']);
  //add class to a specific field
  switch ($vars['element']['#field_name']) {
    case 'field_ROCK':
      $vars['classes_array'][] = 'classname1';
    case 'field_ROLL':
      $vars['classes_array'][] = 'classname1';
      $vars['classes_array'][] = 'classname2';
      $vars['classes_array'][] = 'classname1';
    case 'field_FOO':
      $vars['classes_array'][] = 'classname1';
    case 'field_BAR':
      $vars['classes_array'][] = 'classname1';
    default:
      break;
  }

}

function attac_preprocess_maintenance_page(){
  //  kpr($vars['content']);
}

/**
 * Alter a scald library item.
 *
 * Implements hook_scald_dnd_library_item_alter()
 *
 * @param $atom
 *   The atom object.
 * @param $item
 *   The scald library item.
 */
function attac_scald_dnd_library_item_alter($atom, &$item) {
  $item['meta']['legend'] = "
   <div class='meta'>
    <!--copyright={$atom->sid}-->{$atom->rendered->title}<!--END copyright={$atom->sid}-->
  </div>
 ";
}
function attac_theme_sdl_editor_legend($variables) {
  $atom = $variables['atom'];

  if (!empty($atom->rendered->authors)) {
    foreach ($atom->rendered->authors as $author) {
      $links[] = $author->link;
    }
    $by = implode(', ', $links);
  }
  else {
    $by = "";
  }
  $by = t('by !name', array('!name' => $by));
  return "
  <div class='meta'>
    <!--copyright={$atom->sid}-->{$atom->rendered->title}, {$by}<!--END copyright={$atom->sid}-->
  </div>
  ";
}