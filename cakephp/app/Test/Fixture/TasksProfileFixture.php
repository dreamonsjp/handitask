<?php
/**
 * TasksProfileFixture
 *
 */
class TasksProfileFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'task_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'profile_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'status' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 4, 'unsigned' => false),
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
			'task_id' => 1,
			'profile_id' => 1,
			'status' => 1
		),
		array(
			'id' => 2,
			'task_id' => 2,
			'profile_id' => 2,
			'status' => 2
		),
		array(
			'id' => 3,
			'task_id' => 3,
			'profile_id' => 3,
			'status' => 3
		),
		array(
			'id' => 4,
			'task_id' => 4,
			'profile_id' => 4,
			'status' => 4
		),
		array(
			'id' => 5,
			'task_id' => 5,
			'profile_id' => 5,
			'status' => 5
		),
		array(
			'id' => 6,
			'task_id' => 6,
			'profile_id' => 6,
			'status' => 6
		),
		array(
			'id' => 7,
			'task_id' => 7,
			'profile_id' => 7,
			'status' => 7
		),
		array(
			'id' => 8,
			'task_id' => 8,
			'profile_id' => 8,
			'status' => 8
		),
		array(
			'id' => 9,
			'task_id' => 9,
			'profile_id' => 9,
			'status' => 9
		),
		array(
			'id' => 10,
			'task_id' => 10,
			'profile_id' => 10,
			'status' => 10
		),
	);

}
