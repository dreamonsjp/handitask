<?php
/**
 * TasksPersonalityFixture
 *
 */
class TasksPersonalityFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'task_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'personality_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
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
			'personality_id' => 1
		),
		array(
			'id' => 2,
			'task_id' => 2,
			'personality_id' => 2
		),
		array(
			'id' => 3,
			'task_id' => 3,
			'personality_id' => 3
		),
		array(
			'id' => 4,
			'task_id' => 4,
			'personality_id' => 4
		),
		array(
			'id' => 5,
			'task_id' => 5,
			'personality_id' => 5
		),
		array(
			'id' => 6,
			'task_id' => 6,
			'personality_id' => 6
		),
		array(
			'id' => 7,
			'task_id' => 7,
			'personality_id' => 7
		),
		array(
			'id' => 8,
			'task_id' => 8,
			'personality_id' => 8
		),
		array(
			'id' => 9,
			'task_id' => 9,
			'personality_id' => 9
		),
		array(
			'id' => 10,
			'task_id' => 10,
			'personality_id' => 10
		),
	);

}
