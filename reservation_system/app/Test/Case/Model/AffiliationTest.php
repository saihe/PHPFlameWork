<?php
App::uses('Affiliation', 'Model');

/**
 * Affiliation Test Case
 *
 */
class AffiliationTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.affiliation',
		'app.customer'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Affiliation = ClassRegistry::init('Affiliation');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Affiliation);

		parent::tearDown();
	}

}
