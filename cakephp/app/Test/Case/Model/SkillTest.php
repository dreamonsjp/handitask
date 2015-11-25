<?php
App::uses('Skill', 'Model');

/**
 * Skill Test Case
 *
 */
class SkillTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.skill',
		'app.profile',
		'app.personality',
		'app.profiles_personality',
		'app.task',
		'app.tasks_personality',
		'app.profiles_skill',
		'app.tasks_profile',
		'app.tasks_skill'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Skill = ClassRegistry::init('Skill');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Skill);

		parent::tearDown();
	}

}
