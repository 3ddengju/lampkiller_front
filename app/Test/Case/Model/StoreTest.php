<?php
/* Store Test cases generated on: 2012-01-28 12:48:32 : 1327754912*/
App::uses('Store', 'Model');

/**
 * Store Test Case
 *
 */
class StoreTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.store', 'app.market', 'app.product', 'app.category', 'app.product_detail', 'app.product_src', 'app.store_src', 'app.user', 'app.group');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();

		$this->Store = ClassRegistry::init('Store');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Store);

		parent::tearDown();
	}

}
