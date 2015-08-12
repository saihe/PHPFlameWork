<?php
/**
 * GoodFixture
 *
 */
class GoodFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary', 'comment' => '商品ID'),
		'good_name' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 20, 'collate' => 'utf8_general_ci', 'comment' => '商品名', 'charset' => 'utf8'),
		'price' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'comment' => '単価'),
		'created' => array('type' => 'datetime', 'null' => false, 'default' => null, 'comment' => '作成日時'),
		'modified' => array('type' => 'datetime', 'null' => false, 'default' => null, 'comment' => '更新日時'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB', 'comment' => '商品マスタ')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'good_name' => 'Lorem ipsum dolor ',
			'price' => 1,
			'created' => '2015-08-12 08:01:11',
			'modified' => '2015-08-12 08:01:11'
		),
	);

}
