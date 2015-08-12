<?php
/**
 * CashInfoFixture
 *
 */
class CashInfoFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'settlement_date' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 11, 'collate' => 'utf8mb4_general_ci', 'charset' => 'utf8mb4'),
		'pay_date' => array('type' => 'date', 'null' => false, 'default' => null),
		'person' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 64, 'collate' => 'utf8mb4_general_ci', 'charset' => 'utf8mb4'),
		'item' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 64, 'collate' => 'utf8mb4_general_ci', 'charset' => 'utf8mb4'),
		'payment' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'casher_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'created' => array('type' => 'date', 'null' => false, 'default' => null),
		'modified' => array('type' => 'date', 'null' => false, 'default' => null),
		'settlement_id' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 64, 'collate' => 'utf8mb4_general_ci', 'charset' => 'utf8mb4'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'utf8mb4', 'collate' => 'utf8mb4_general_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'settlement_date' => 'Lorem ips',
			'pay_date' => '2015-08-12',
			'person' => 'Lorem ipsum dolor sit amet',
			'item' => 'Lorem ipsum dolor sit amet',
			'payment' => 1,
			'casher_id' => 1,
			'created' => '2015-08-12',
			'modified' => '2015-08-12',
			'settlement_id' => 'Lorem ipsum dolor sit amet'
		),
	);

}
