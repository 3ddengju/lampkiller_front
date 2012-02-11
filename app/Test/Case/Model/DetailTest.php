<?php
/* Detail Test cases generated on: 2012-01-28 12:47:48 : 1327754868*/
App::uses('Detail', 'Model');

/**
 * Detail Test Case
 *
 */
class DetailTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.detail', 'app.classification', 'app.product', 'app.product_detail');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();

		$this->Detail = ClassRegistry::init('Detail');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Detail);

		parent::tearDown();
	}

}
