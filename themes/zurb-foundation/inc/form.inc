<?php

/**
 * Implements hook_form_alter().
 */
function zurb_foundation_form_alter(&$form, &$form_state, $form_id) {
  // Id's of forms that should be ignored
  // Make this configurable?
  $form_ids = array(
    'node_form',
    'system_site_information_settings',
    'user_profile_form',
    'node_delete_confirm',
  );

  // Only wrap in container for certain form
  if (isset($form['#form_id']) && !in_array($form['#form_id'], $form_ids) && !isset($form['#node_edit_form'])) {
    $form['actions']['#theme_wrappers'] = array();
  }

  // Sexy submit buttons
  if (!empty($form['actions']) && !empty($form['actions']['submit'])) {
    $form['actions']['submit']['#attributes'] = array('class' => array('success', 'button', 'radius'));
  }
}
/**
 * Implements theme_form_element_label()
 */
function zurb_foundation_form_element_label($variables) {
  if (!empty($variables['element']['#title'])) {
    $variables['element']['#title'] = '<label>' . $variables['element']['#title'] . '</label>';
  }
  if (!empty($variables['element']['#description'])) {
    $variables['element']['#description'] = ' <span data-tooltip class="has-tip tip-top" data-width="250" title="' . strip_tags($variables['element']['#description']) . '">' . t('More information?') . '</span>';
  }
  return theme_form_element_label($variables);
}

// /**
 // * Returns HTML for a button form element.
 // */
// function zurb_foundation_button($variables) {
  // $element = $variables['element'];
  // $label = check_plain($element['#value']);
  // element_set_attributes($element, array('id', 'name', 'value', 'type'));
//
  // $element['#attributes']['class'][] = 'form-' . $element['#button_type'];
  // if (!empty($element['#attributes']['disabled'])) {
    // $element['#attributes']['class'][] = 'form-button-disabled';
  // }
// }
