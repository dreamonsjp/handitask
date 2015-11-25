<?php
App::uses('TasksPersonality', 'Model');

/**
 * TasksPersonality Test Case
 *
 */
class TasksPersonalityTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.tasks_personality',
		'app.task',
		'app.work',
		'app.personality',
		'app.profile',
		'app.profiles_personality',
		'app.skill',
		'app.profiles_skill',
		'app.tasks_skill',
		'app.tasks_profile'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->TasksPersonality = ClassRegistry::init('TasksPersonality');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->TasksPersonality);

		parent::tearDown();
	}

}
