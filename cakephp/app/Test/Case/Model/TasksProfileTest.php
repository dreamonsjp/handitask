<?php
App::uses('TasksProfile', 'Model');

/**
 * TasksProfile Test Case
 *
 */
class TasksProfileTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.tasks_profile',
		'app.task',
		'app.work',
		'app.personality',
		'app.profile',
		'app.profiles_personality',
		'app.skill',
		'app.profiles_skill',
		'app.tasks_skill',
		'app.tasks_personality'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->TasksProfile = ClassRegistry::init('TasksProfile');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->TasksProfile);

		parent::tearDown();
	}

}
