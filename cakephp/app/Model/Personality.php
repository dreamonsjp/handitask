<?php
App::uses('AppModel', 'Model');
/**
 * Personality Model
 *
 * @property Profile $Profile
 * @property Task $Task
 */
class Personality extends AppModel {

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'name' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasAndBelongsToMany associations
 *
 * @var array
 */
	public $hasAndBelongsToMany = array(
		'Profile' => array(
			'className' => 'Profile',
			'joinTable' => 'profiles_personalities',
			'foreignKey' => 'personality_id',
			'associationForeignKey' => 'profile_id',
			'unique' => 'keepExisting',
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
		),
		'Task' => array(
			'className' => 'Task',
			'joinTable' => 'tasks_personalities',
			'foreignKey' => 'personality_id',
			'associationForeignKey' => 'task_id',
			'unique' => 'keepExisting',
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
		)
	);

}
