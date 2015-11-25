<?php
App::uses('ProfilesSkill', 'Model');

/**
 * ProfilesSkill Test Case
 *
 */
class ProfilesSkillTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.profiles_skill',
		'app.profile',
		'app.personality',
		'app.profiles_personality',
		'app.task',
		'app.tasks_personality',
		'app.skill',
		'app.tasks_profile'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->ProfilesSkill = ClassRegistry::init('ProfilesSkill');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->ProfilesSkill);

		parent::tearDown();
	}

}
