<?php
/* ProductSrc Test cases generated on: 2012-01-28 12:48:50 : 1327754930*/
App::uses('ProductSrc', 'Model');

/**
 * ProductSrc Test Case
 *
 */
class ProductSrcTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.product_src', 'app.product', 'app.store', 'app.market', 'app.store_src', 'app.position', 'app.user', 'app.group', 'app.category', 'app.product_detail');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();

		$this->ProductSrc = ClassRegistry::init('ProductSrc');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->ProductSrc);

		parent::tearDown();
	}

}
