<?php
/**
 * WorkFixture
 *
 */
class WorkFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'request_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'name' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
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
			'request_id' => 1,
			'name' => 'Lorem ipsum dolor sit amet'
		),
		array(
			'id' => 2,
			'request_id' => 2,
			'name' => 'Lorem ipsum dolor sit amet'
		),
		array(
			'id' => 3,
			'request_id' => 3,
			'name' => 'Lorem ipsum dolor sit amet'
		),
		array(
			'id' => 4,
			'request_id' => 4,
			'name' => 'Lorem ipsum dolor sit amet'
		),
		array(
			'id' => 5,
			'request_id' => 5,
			'name' => 'Lorem ipsum dolor sit amet'
		),
		array(
			'id' => 6,
			'request_id' => 6,
			'name' => 'Lorem ipsum dolor sit amet'
		),
		array(
			'id' => 7,
			'request_id' => 7,
			'name' => 'Lorem ipsum dolor sit amet'
		),
		array(
			'id' => 8,
			'request_id' => 8,
			'name' => 'Lorem ipsum dolor sit amet'
		),
		array(
			'id' => 9,
			'request_id' => 9,
			'name' => 'Lorem ipsum dolor sit amet'
		),
		array(
			'id' => 10,
			'request_id' => 10,
			'name' => 'Lorem ipsum dolor sit amet'
		),
	);

}
