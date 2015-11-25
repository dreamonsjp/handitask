<?php
App::uses('TasksSkill', 'Model');

/**
 * TasksSkill Test Case
 *
 */
class TasksSkillTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.tasks_skill',
		'app.task',
		'app.work',
		'app.personality',
		'app.profile',
		'app.profiles_personality',
		'app.skill',
		'app.profiles_skill',
		'app.tasks_profile',
		'app.tasks_personality'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->TasksSkill = ClassRegistry::init('TasksSkill');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->TasksSkill);

		parent::tearDown();
	}

}
