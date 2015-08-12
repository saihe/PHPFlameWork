<?php
App::uses('CashInfo', 'Model');

/**
 * CashInfo Test Case
 *
 */
class CashInfoTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.cash_info',
		'app.casher',
		'app.settlement'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->CashInfo = ClassRegistry::init('CashInfo');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->CashInfo);

		parent::tearDown();
	}

}
