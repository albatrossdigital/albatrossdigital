<?php

/**
 * @file
 * Definition of Drupal\responsive_preview\Tests\DeviceCRUDTest.
 */

namespace Drupal\responsive_preview\Tests;

use Drupal\simpletest\WebTestBase;

/**
 * Tests the device listing.
 */
class DeviceCRUDTest extends WebTestBase {

  /**
   * Modules to enable.
   *
   * @var array
   */
  public static $modules = array('toolbar', 'responsive_preview');

  public static function getInfo() {
    return array(
      'name' => 'Responsive preview',
      'description' => 'Tests device management functionality.',
      'group' => 'Responsive preview',
    );
  }

  /**
   * Tests configuring devices.
   */
  function testDeviceConfiguration() {
    // Create and login administrative user.
    $admin_user = $this->drupalCreateUser(array(
      'administer site configuration',
      'access toolbar',
    ));
    $this->drupalLogin($admin_user);

    $this->drupalGet('admin/config/content/responsive-preview');

    // Some default devices exist.
    $this->assertLinkByHref('admin/config/content/responsive-preview/manage/large/delete');
    $this->assertLinkByHref('admin/config/content/responsive-preview/manage/ipad/delete');

    // Some devices are shown by default.
    $this->drupalGet('');
    $this->checkDevices(array('iphone5', 'ipad', 'nexus4', 'nexus7'));

    // Delete one of the predefined devices.
    $this->drupalPost('admin/config/content/responsive-preview/manage/iphone5/delete', array(), t('Delete'));
    $this->assertRaw(t('Device %name has been deleted.', array('%name' => 'iPhone 5')));

    // Make generic tablet appear in the list.
    $this->drupalPost('admin/config/content/responsive-preview', array('entities[medium][status]' => 1), t('Save'));
    $this->assertRaw(t('The device settings have been updated.'));

    // Add a new device as well.
    $edit = array(
      'label' => 'Smartwatch',
      'id' => 'smartwatch',
      'dimensions[width]' => '200',
      'dimensions[height]' => '350',
      'dimensions[dppx]' => '3',
    );
    $this->drupalPost('admin/config/content/responsive-preview/add', $edit, t('Save'));
    $this->assertRaw(t('Device %name has been added.', array('%name' => 'Smartwatch')));

    // Check updated device list. New devices are shown in the list by default.
    $this->drupalGet('');
    $this->checkDevices(array('smartwatch', 'ipad', 'medium', 'nexus4', 'nexus7'));
  }

  /**
   * Tests exposed devices in the responsive preview list.
   */
  private function checkDevices(array $devices) {
    foreach ($devices as $name) {
      $device_button = $this->xpath('//button[@data-responsive-preview-name=:name]', array(
        ':name' => $name
      ));
      $this->assertTrue(!empty($device_button), format_string('%name device shown by default', array('%name' => $name)));
    }
  }

}
