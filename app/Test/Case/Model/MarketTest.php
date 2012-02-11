<?php
/* Market Test cases generated on: 2012-01-28 12:48:02 : 1327754882*/
App::uses('Market', 'Model');

/**
 * Market Test Case
 *
 */
class MarketTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.market', 'app.store');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();

		$this->Market = ClassRegistry::init('Market');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Market);

		parent::tearDown();
	}

}
