<?php
/* ProductDetail Test cases generated on: 2012-01-28 12:49:37 : 1327754977*/
App::uses('ProductDetail', 'Model');

/**
 * ProductDetail Test Case
 *
 */
class ProductDetailTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.product_detail', 'app.product', 'app.store', 'app.market', 'app.store_src', 'app.position', 'app.product_src', 'app.user', 'app.group', 'app.category', 'app.detail', 'app.classification');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();

		$this->ProductDetail = ClassRegistry::init('ProductDetail');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->ProductDetail);

		parent::tearDown();
	}

}
