<?php

/**
 * @file
 * Contains \Drupal\responsive_preview\Plugin\Menu\LocalAction\AddDeviceLocalAction.
 */

namespace Drupal\responsive_preview\Plugin\Menu\LocalAction;

use Drupal\Core\Annotation\Translation;
use Drupal\Core\Menu\LocalActionBase;
use Drupal\Core\Annotation\Menu\LocalAction;

/**
 * @LocalAction(
 *   id = "device_add_local_action",
 *   route_name = "responsive_preview_device_add",
 *   title = @Translation("Add device"),
 *   appears_on = {"responsive_preview_device_list"}
 * )
 */
class AddDeviceLocalAction extends LocalActionBase {

}
