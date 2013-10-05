<?php

/**
 * @file
 * Contains \Drupal\responsive_preview\Form\DeviceDelete.
 */

namespace Drupal\responsive_preview\Form;

use Drupal\Core\Entity\EntityConfirmFormBase;
use Drupal\responsive_preview\DeviceInterface;

/**
 * Provides a deletion confirmation form for a device entity.
 */
class DeviceDelete extends EntityConfirmFormBase {

  /**
   * {@inheritdoc}
   */
  public function getQuestion() {
    return t('Are you sure you want to delete the device %name?', array('%name' => $this->entity->label()));
  }

  /**
   * {@inheritdoc}
   */
  public function getCancelPath() {
    return 'admin/config/content/responsive-preview';
  }

  /**
   * {@inheritdoc}
   */
  public function getConfirmText() {
    return t('Delete');
  }

  /**
   * {@inheritdoc}
   */
  public function submit(array $form, array &$form_state) {
    $this->entity->delete();
    watchdog('responsive_preview', 'Device %name has been deleted.', array('%name' => $this->entity->label()));
    drupal_set_message(t('Device %name has been deleted.', array('%name' => $this->entity->label())));
    $form_state['redirect'] = 'admin/config/content/responsive-preview';
  }

}
