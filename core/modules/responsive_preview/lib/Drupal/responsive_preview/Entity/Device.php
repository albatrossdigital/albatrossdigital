<?php

/**
 * @file
 * Contains \Drupal\responsive_preview\Entity\Device.
 */

namespace Drupal\responsive_preview\Entity;

use Drupal\Core\Entity\Annotation\EntityType;
use Drupal\Core\Annotation\Translation;
use Drupal\Core\Config\Entity\ConfigEntityBase;

/**
 * Defines the responsive preview device entity class.
 *
 * @EntityType(
 *   id = "responsive_preview_device",
 *   label = @Translation("Responsive preview device"),
 *   module = "responsive_preview",
 *   controllers = {
 *     "access" = "Drupal\responsive_preview\DeviceAccessController",
 *     "storage" = "Drupal\Core\Config\Entity\ConfigStorageController",
 *     "list" = "Drupal\responsive_preview\DeviceListController",
 *     "form" = {
 *       "edit" = "Drupal\responsive_preview\DeviceFormController",
 *       "add" = "Drupal\responsive_preview\DeviceFormController",
 *       "delete" = "Drupal\responsive_preview\Form\DeviceDelete"
 *     }
 *   },
 *   config_prefix = "responsive_preview.device",
 *   entity_keys = {
 *     "id" = "id",
 *     "uuid" = "uuid",
 *     "label" = "label"
 *   }
 * )
 */
class Device extends ConfigEntityBase {

  /**
   * The machine name of this device.
   *
   * @var string
   */
  public $id;

  /**
   * The UUID of this device.
   *
   * @var string
   */
  public $uuid;

  /**
   * The human-readable label of this device.
   *
   * @var string
   */
  public $label;

  /**
   * The weight of this device in listings.
   *
   * @var int
   */
  public $weight;

  /**
   * Default orientation.
   *
   * @var string
   *   Either 'landscape' or 'portrait'.
   */
  public $orientation;

  /**
   * Dimension information.
   *
   * @var array
   *   Associative array with keys 'weight' (int), 'height' (int)
   *   and 'dppx' (int).
   */
  public $dimensions;

  /**
   * {@inheritdoc}
   */
  public function uri() {
    return array(
      'path' => 'admin/config/content/responsive-preview/manage/' . $this->id(),
      'options' => array(
        'entity_type' => $this->entityType,
        'entity' => $this,
      ),
    );
  }

}
