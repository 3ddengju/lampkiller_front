<?php
/* Classification Test cases generated on: 2012-01-28 12:46:17 : 1327754777*/
App::uses('Classification', 'Model');

/**
 * Classification Test Case
 *
 */
class ClassificationTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.classification');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();

		$this->Classification = ClassRegistry::init('Classification');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Classification);

		parent::tearDown();
	}

}
