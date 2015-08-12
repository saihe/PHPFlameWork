<?php
App::uses('Settlement', 'Model');

/**
 * Settlement Test Case
 *
 */
class SettlementTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.settlement'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Settlement = ClassRegistry::init('Settlement');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Settlement);

		parent::tearDown();
	}

}
