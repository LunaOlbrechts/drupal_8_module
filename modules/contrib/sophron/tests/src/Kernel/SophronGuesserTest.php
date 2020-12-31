<?php

namespace Drupal\Tests\sophron\Kernel;

use Drupal\KernelTests\KernelTestBase;

/**
 * Tests for Sophron guesser.
 *
 * @coversDefaultClass \Drupal\sophron_guesser\SophronMimeTypeGuesser
 *
 * @group sophron
 */
class SophronGuesserTest extends KernelTestBase {

  /**
   * {@inheritdoc}
   */
  protected static $modules = ['sophron', 'system'];

  /**
   * {@inheritdoc}
   */
  public function setUp() {
    parent::setUp();
    $this->installConfig(['sophron', 'system']);
  }

  /**
   * @covers ::guess
   */
  public function testGuesserNotInstalled() {
    $guesser = \Drupal::service('file.mime_type.guesser.extension');
    $this->assertEquals('application/octet-stream', $guesser->guess('fake.jp2'));
  }

  /**
   * @covers ::guess
   */
  public function testGuesserInstalled() {
    \Drupal::service('module_installer')->install(['sophron_guesser']);
    $guesser = \Drupal::service('file.mime_type.guesser.extension');
    $this->assertEquals('image/jp2', $guesser->guess('fake.jp2'));
  }

  /**
   * @covers ::guess
   */
  public function testGuesserInstallUninstall() {
    $guesser = \Drupal::service('file.mime_type.guesser.extension');
    $this->assertEquals('application/octet-stream', $guesser->guess('fake.jp2'));
    \Drupal::service('module_installer')->install(['sophron_guesser']);
    $guesser = \Drupal::service('file.mime_type.guesser.extension');
    $this->assertEquals('image/jp2', $guesser->guess('fake.jp2'));
    \Drupal::service('module_installer')->uninstall(['sophron_guesser']);
    $guesser = \Drupal::service('file.mime_type.guesser.extension');
    $this->assertEquals('application/octet-stream', $guesser->guess('fake.jp2'));
  }

  /**
   * Test mapping of mimetypes from filenames.
   *
   * Mostly a copy of the equivalent method at
   * \Drupal\KernelTests\Core\File\MimeTypeTest::testFileMimeTypeDetection.
   */
  public function testFileMimeTypeDetection() {
    $prefixes = ['public://', 'private://', 'temporary://', 'dummy-remote://'];

    $test_case = [
      'test.jar' => 'application/java-archive',
      'test.jpeg' => 'image/jpeg',
      'test.JPEG' => 'image/jpeg',
      'test.jpg' => 'image/jpeg',
      'test.jar.jpg' => 'image/jpeg',
      'test.jpg.jar' => 'application/java-archive',
      'test.pcf.Z' => 'application/x-font',
      'pcf.z' => 'application/octet-stream',
      'jar' => 'application/octet-stream',
      'some.junk' => 'application/octet-stream',
    ];

    $guesser = $this->container->get('file.mime_type.guesser');
    // Test using default mappings.
    foreach ($test_case as $input => $expected) {
      // Test stream [URI].
      foreach ($prefixes as $prefix) {
        $output = $guesser->guess($prefix . $input);
        $this->assertIdentical($output, $expected, sprintf("Mimetype for '%s' is '%s' (expected: '%s').", $prefix . $input, $output, $expected));
      }

      // Test normal path equivalent.
      $output = $guesser->guess($input);
      $this->assertIdentical($output, $expected, sprintf("Mimetype (using default mappings) for '%s' is '%s' (expected: '%s').", $input, $output, $expected));
    }
  }

}
