<?php
/**
 * ProfileFixture
 *
 */
class ProfileFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'belong_type' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 4, 'unsigned' => false),
		'belong_name' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'name' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'sex' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 2, 'unsigned' => false),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'belong_type' => 1,
			'belong_name' => 'Lorem ipsum dolor sit amet',
			'name' => 'Lorem ipsum dolor sit amet',
			'sex' => 1
		),
		array(
			'id' => 2,
			'belong_type' => 2,
			'belong_name' => 'Lorem ipsum dolor sit amet',
			'name' => 'Lorem ipsum dolor sit amet',
			'sex' => 2
		),
		array(
			'id' => 3,
			'belong_type' => 3,
			'belong_name' => 'Lorem ipsum dolor sit amet',
			'name' => 'Lorem ipsum dolor sit amet',
			'sex' => 3
		),
		array(
			'id' => 4,
			'belong_type' => 4,
			'belong_name' => 'Lorem ipsum dolor sit amet',
			'name' => 'Lorem ipsum dolor sit amet',
			'sex' => 4
		),
		array(
			'id' => 5,
			'belong_type' => 5,
			'belong_name' => 'Lorem ipsum dolor sit amet',
			'name' => 'Lorem ipsum dolor sit amet',
			'sex' => 5
		),
		array(
			'id' => 6,
			'belong_type' => 6,
			'belong_name' => 'Lorem ipsum dolor sit amet',
			'name' => 'Lorem ipsum dolor sit amet',
			'sex' => 6
		),
		array(
			'id' => 7,
			'belong_type' => 7,
			'belong_name' => 'Lorem ipsum dolor sit amet',
			'name' => 'Lorem ipsum dolor sit amet',
			'sex' => 7
		),
		array(
			'id' => 8,
			'belong_type' => 8,
			'belong_name' => 'Lorem ipsum dolor sit amet',
			'name' => 'Lorem ipsum dolor sit amet',
			'sex' => 8
		),
		array(
			'id' => 9,
			'belong_type' => 9,
			'belong_name' => 'Lorem ipsum dolor sit amet',
			'name' => 'Lorem ipsum dolor sit amet',
			'sex' => 9
		),
		array(
			'id' => 10,
			'belong_type' => 10,
			'belong_name' => 'Lorem ipsum dolor sit amet',
			'name' => 'Lorem ipsum dolor sit amet',
			'sex' => 10
		),
	);

}
