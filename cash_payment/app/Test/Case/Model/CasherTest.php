<?php
App::uses('Casher', 'Model');

/**
 * Casher Test Case
 *
 */
class CasherTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.casher',
		'app.cash_info',
		'app.settlement'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Casher = ClassRegistry::init('Casher');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Casher);

		parent::tearDown();
	}

}
