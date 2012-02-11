<?php
/* ProductDetails Test cases generated on: 2012-01-28 12:49:37 : 1327754977*/
App::uses('ProductDetailsController', 'Controller');

/**
 * TestProductDetailsController *
 */
class TestProductDetailsController extends ProductDetailsController {
/**
 * Auto render
 *
 * @var boolean
 */
	public $autoRender = false;

/**
 * Redirect action
 *
 * @param mixed $url
 * @param mixed $status
 * @param boolean $exit
 * @return void
 */
	public function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

/**
 * ProductDetailsController Test Case
 *
 */
class ProductDetailsControllerTestCase extends CakeTestCase {
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

		$this->ProductDetails = new TestProductDetailsController();
		$this->ProductDetails->constructClasses();
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->ProductDetails);

		parent::tearDown();
	}

/**
 * testIndex method
 *
 * @return void
 */
	public function testIndex() {

	}

/**
 * testView method
 *
 * @return void
 */
	public function testView() {

	}

/**
 * testAdd method
 *
 * @return void
 */
	public function testAdd() {

	}

/**
 * testEdit method
 *
 * @return void
 */
	public function testEdit() {

	}

/**
 * testDelete method
 *
 * @return void
 */
	public function testDelete() {

	}

}
