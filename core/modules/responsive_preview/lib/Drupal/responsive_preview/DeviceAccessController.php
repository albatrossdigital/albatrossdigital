<?php

/**
 * @file
 * Contains \Drupal\responsive_preview\CommentAccessController
 */

namespace Drupal\responsive_preview;

use Drupal\Core\Entity\EntityAccessController;
use Drupal\Core\Entity\EntityInterface;
use Drupal\Core\Session\AccountInterface;

/**
 * Access controller for the Device entity.
 *
 * @see \Drupal\responsive_preview\Plugin\Core\Entity\Device.
 */
class DeviceAccessController extends EntityAccessController {

  /**
   * {@inheritdoc}
   */
  protected function checkAccess(EntityInterface $entity, $operation, $langcode, AccountInterface $account) {
    switch ($operation) {
      case 'update':
        return user_access('administer site configuration', $account);
        break;
      case 'delete':
        return user_access('administer site configuration', $account);
        break;
    }
  }

}
