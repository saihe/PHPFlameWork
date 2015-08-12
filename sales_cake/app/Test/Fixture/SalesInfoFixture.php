<?php
/**
 * SalesInfoFixture
 *
 */
class SalesInfoFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary', 'comment' => '売上ID'),
		'sales_date' => array('type' => 'date', 'null' => false, 'default' => null, 'comment' => '売上日'),
		'customer_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'comment' => '顧客ID'),
		'good_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'comment' => '商品ID'),
		'quantity' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'comment' => '数量'),
		'created' => array('type' => 'datetime', 'null' => false, 'default' => null, 'comment' => '作成日時'),
		'modified' => array('type' => 'datetime', 'null' => false, 'default' => null, 'comment' => '更新日時'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB', 'comment' => '売上情報')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'sales_date' => '2015-08-12',
			'customer_id' => 1,
			'good_id' => 1,
			'quantity' => 1,
			'created' => '2015-08-12 08:03:52',
			'modified' => '2015-08-12 08:03:52'
		),
	);

}
