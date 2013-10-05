<?php

/**
 * @file
 * Contains \Drupal\responsive_preview\DeviceListController.
 */

namespace Drupal\responsive_preview;

use Drupal\Core\Config\Entity\ConfigEntityListController;
use Drupal\Core\Entity\EntityInterface;
use Drupal\Core\Form\FormInterface;

/**
 * Provides a listing of responsive preview devices.
 */
class DeviceListController extends ConfigEntityListController implements FormInterface {

  /**
   * {@inheritdoc}
   */
  public function getFormID() {
    return 'responsive_preview_admin_devices_form';
  }

  /**
   * {@inheritdoc}
   */
  public function buildHeader() {
    $row = parent::buildHeader();
    unset($row['operations']);
    $row['label'] = t('Name');
    $row['status'] = t('Show in list');
    $row['dimensions'] = t('Dimensions');
    unset($row['id']);
    $row['weight'] = t('Weight');
    $row['operations'] = t('Operations');
    return $row;
  }

  /**
   * {@inheritdoc}
   */
  public function buildRow(EntityInterface $entity) {
    $row = parent::buildRow($entity);
    $operations = $row['operations'];
    unset($row['operations']);

    // Override default values to markup elements.
    $row['#attributes']['class'][] = 'draggable';
    unset($row['id']);

    $row['label'] = array(
      '#markup' => check_plain($entity->label()),
    );
    $row['status'] = array(
      '#type' => 'checkbox',
      '#title' => t('Show %title in list', array('%title' => $entity->label())),
      '#title_display' => 'invisible',
      '#default_value' => $entity->get('status'),
    );
    $dimensions = $entity->get('dimensions');
    $row['dimensions'] = array(
      '#markup' => check_plain($dimensions['width'] . 'x' . $dimensions['height'] . ' (' . $dimensions['dppx'] . ' dppx)'),
    );
    $row['#weight'] = $entity->get('weight');
    // Add weight column.
    $row['weight'] = array(
      '#type' => 'weight',
      '#title' => t('Weight for @title', array('@title' => $entity->label())),
      '#title_display' => 'invisible',
      '#default_value' => $entity->get('weight'),
      '#attributes' => array('class' => array('weight')),
    );
    $row['operations'] = $operations;
    return $row;
  }

  /**
   * {@inheritdoc}
   */
  public function render() {
    return drupal_get_form($this);
  }

  /**
   * {@inheritdoc}
   */
  public function buildForm(array $form, array &$form_state) {
    $form['entities'] = array(
      '#type' => 'table',
      '#header' => $this->buildHeader(),
      '#empty' => t('There is no @label yet.', array('@label' => $this->entityInfo['label'])),
      '#tabledrag' => array(
        array('order', 'sibling', 'weight'),
      ),
    );

    foreach ($this->load() as $entity) {
      $form['entities'][$entity->id()] = $this->buildRow($entity);
    }

    $form['actions']['#type'] = 'actions';
    $form['actions']['submit'] = array(
      '#type' => 'submit',
      '#value' => t('Save'),
      '#button_type' => 'primary',
    );

    return $form;
  }

  /**
   * {@inheritdoc}
   */
  public function validateForm(array &$form, array &$form_state) {
    // No validation.
  }

  /**
   * {@inheritdoc}
   */
  public function submitForm(array &$form, array &$form_state) {
    $values = $form_state['values']['entities'];

    $entities = entity_load_multiple($this->entityType, array_keys($values));
    foreach ($values as $id => $value) {
      if (isset($entities[$id]) && (($value['weight'] != $entities[$id]->get('weight')) || ($value['status'] != $entities[$id]->get('status')))) {
        // Update changed weight.
        $entities[$id]->set('weight', $value['weight']);
        $entities[$id]->set('status', $value['status']);
        $entities[$id]->save();
      }
    }

    drupal_set_message(t('The device settings have been updated.'));
  }
}
