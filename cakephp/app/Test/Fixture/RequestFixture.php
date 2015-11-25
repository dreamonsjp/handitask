<?php
/**
 * RequestFixture
 *
 */
class RequestFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'name' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'start' => array('type' => 'date', 'null' => true, 'default' => null),
		'end' => array('type' => 'date', 'null' => false, 'default' => null),
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
			'name' => 'Lorem ipsum dolor sit amet',
			'start' => '2015-11-25',
			'end' => '2015-11-25'
		),
		array(
			'id' => 2,
			'name' => 'Lorem ipsum dolor sit amet',
			'start' => '2015-11-25',
			'end' => '2015-11-25'
		),
		array(
			'id' => 3,
			'name' => 'Lorem ipsum dolor sit amet',
			'start' => '2015-11-25',
			'end' => '2015-11-25'
		),
		array(
			'id' => 4,
			'name' => 'Lorem ipsum dolor sit amet',
			'start' => '2015-11-25',
			'end' => '2015-11-25'
		),
		array(
			'id' => 5,
			'name' => 'Lorem ipsum dolor sit amet',
			'start' => '2015-11-25',
			'end' => '2015-11-25'
		),
		array(
			'id' => 6,
			'name' => 'Lorem ipsum dolor sit amet',
			'start' => '2015-11-25',
			'end' => '2015-11-25'
		),
		array(
			'id' => 7,
			'name' => 'Lorem ipsum dolor sit amet',
			'start' => '2015-11-25',
			'end' => '2015-11-25'
		),
		array(
			'id' => 8,
			'name' => 'Lorem ipsum dolor sit amet',
			'start' => '2015-11-25',
			'end' => '2015-11-25'
		),
		array(
			'id' => 9,
			'name' => 'Lorem ipsum dolor sit amet',
			'start' => '2015-11-25',
			'end' => '2015-11-25'
		),
		array(
			'id' => 10,
			'name' => 'Lorem ipsum dolor sit amet',
			'start' => '2015-11-25',
			'end' => '2015-11-25'
		),
	);

}
