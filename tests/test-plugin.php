<?php
/**
 * Tests for plugin.php.
 *
 * @package debug_secrets_inheritance
 */

use Yoast\WPTestUtils\WPIntegration\TestCase;

/**
 * Tests for plugin.php.
 */
class Test_Plugin extends TestCase {

	/**
	 * Test bootstrap.
	 */
	public function test_bootstrap() {
		$this->assertTrue( defined( 'debug_secrets_inheritance_VERSION' ) );
		$this->assertTrue( defined( 'debug_secrets_inheritance_PLUGIN_FILE' ) );
		$this->assertTrue( defined( 'debug_secrets_inheritance_PLUGIN_DIR' ) );

		// $this->assertTrue( class_exists( 'WP_Web_App_Manifest' ) );
		// $this->assertTrue( class_exists( 'WP_Service_Workers' ) );
	}
}
