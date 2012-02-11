<?php
/* StoreSrc Test cases generated on: 2012-01-28 12:48:37 : 1327754917*/
App::uses('StoreSrc', 'Model');

/**
 * StoreSrc Test Case
 *
 */
class StoreSrcTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.store_src', 'app.store', 'app.market', 'app.product', 'app.category', 'app.product_detail', 'app.product_src', 'app.user', 'app.group', 'app.position');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();

		$this->StoreSrc = ClassRegistry::init('StoreSrc');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->StoreSrc);

		parent::tearDown();
	}

}
