<?php

/**
 * @file
 * Contains \Drupal\responsive_preview\DeviceFormController.
 */

namespace Drupal\responsive_preview;

use Drupal\Core\Entity\EntityInterface;
use Drupal\Core\Entity\EntityFormController;

/**
 * Form controller for the device entity edit forms.
 */
class DeviceFormController extends EntityFormController {

  /**
   * {@inheritdoc}
   */
  public function form(array $form, array &$form_state, EntityInterface $responsive_preview_device = NULL) {
    switch ($form_state['controller']->getOperation()) {
      case 'add':
        drupal_set_title(t('Add device'));
        break;
      case 'edit':
        drupal_set_title(t('Edit device'));
        break;
      default:
        break;
    }
    $entity = $this->entity;
    $form['label'] = array(
      '#type' => 'textfield',
      '#title' => t('Device name'),
      '#default_value' => $entity->label(),
      '#size' => 30,
      '#required' => TRUE,
      '#maxlength' => 64,
    );
    $form['id'] = array(
      '#type' => 'machine_name',
      '#default_value' => $entity->id(),
      '#required' => TRUE,
      '#disabled' => !$entity->isNew(),
      '#size' => 30,
      '#maxlength' => 64,
      '#machine_name' => array(
        'exists' => 'responsive_preview_device_load',
      ),
    );
    $dimensions = $entity->get('dimensions');
    $form['dimensions'] = array(
      '#type' => 'container',
      '#tree' => TRUE,
    );
    $form['dimensions']['width'] = array(
      '#type' => 'textfield',
      '#title' => t('Width'),
      '#default_value' => $dimensions['width'],
      '#field_suffix' => 'px',
      '#size' => 6,
      '#required' => TRUE,
    );
    $form['dimensions']['height'] = array(
      '#type' => 'textfield',
      '#title' => t('Height'),
      '#default_value' => $dimensions['height'],
      '#field_suffix' => 'px',
      '#size' => 6,
      '#required' => TRUE,
    );
    $form['dimensions']['dppx'] = array(
      '#type' => 'textfield',
      '#title' => t('Dots per pixel (dppx)'),
      '#description' => t('Size of a single dot in graphical representation. Classic desktop displays have 1dppx, typical modern smartphones and laptops have 2dppx or higher. For example Google Nexus 4 and iPhone 5 has 2dppx, while Google Nexus 7 has 1.325dppx and Samsung Galaxy S4 has 3dppx.'),
      '#default_value' => $dimensions['dppx'],
      '#size' => 4,
      '#required' => TRUE,
    );
    $form['orientation'] = array(
      '#type' => 'select',
      '#title' => t('Default orientation'),
      '#default_value' => $entity->get('orientation'),
      '#options' => array('portrait' => t('Portrait'), 'landscape' => t('Landscape')),
    );
    $form['status'] = array(
      '#type' => 'value',
      '#value' => $entity->get('status'),
    );
    $form['weight'] = array(
      '#type' => 'value',
      '#value' => $entity->get('weight'),
    );

    return parent::form($form, $form_state, $entity);
  }

  /**
   * {@inheritdoc}
   */
  public function save(array $form, array &$form_state) {
    $entity = $this->entity;

    // Prevent leading and trailing spaces in device names.
    $entity->set('label', trim($entity->label()));
    $uri = $entity->uri();
    if ($entity->save() == SAVED_UPDATED) {
      drupal_set_message(t('Device %label has been updated.', array('%label' => $entity->label())));
      watchdog('responsive_preview', 'Device %label has been updated.', array('%label' => $entity->label()), WATCHDOG_NOTICE, l(t('Edit'), $uri['path']));
    }
    else {
      drupal_set_message(t('Device %label has been added.', array('%label' => $entity->label())));
      watchdog('responsive_preview', 'Device %label has been added.', array('%label' => $entity->label()), WATCHDOG_NOTICE, l(t('Edit'), $uri['path']));
    }
    $form_state['redirect'] = 'admin/config/content/responsive-preview';
  }

  /**
   * {@inheritdoc}
   */
  public function delete(array $form, array &$form_state) {
    $form_state['redirect'] = 'admin/config/content/responsive-preview/manage/' . $this->entity->id() . '/delete';
  }

}
