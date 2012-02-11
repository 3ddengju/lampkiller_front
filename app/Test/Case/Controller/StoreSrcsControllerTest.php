<?php
/* StoreSrcs Test cases generated on: 2012-01-28 12:48:38 : 1327754918*/
App::uses('StoreSrcsController', 'Controller');

/**
 * TestStoreSrcsController *
 */
class TestStoreSrcsController extends StoreSrcsController {
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
 * StoreSrcsController Test Case
 *
 */
class StoreSrcsControllerTestCase extends CakeTestCase {
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

		$this->StoreSrcs = new TestStoreSrcsController();
		$this->StoreSrcs->constructClasses();
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->StoreSrcs);

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
