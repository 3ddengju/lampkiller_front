<?php
/* Position Test cases generated on: 2012-01-28 12:48:07 : 1327754887*/
App::uses('Position', 'Model');

/**
 * Position Test Case
 *
 */
class PositionTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.position', 'app.product_src', 'app.store_src');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();

		$this->Position = ClassRegistry::init('Position');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Position);

		parent::tearDown();
	}

}
