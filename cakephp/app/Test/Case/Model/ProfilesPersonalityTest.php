<?php
App::uses('ProfilesPersonality', 'Model');

/**
 * ProfilesPersonality Test Case
 *
 */
class ProfilesPersonalityTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.profiles_personality',
		'app.profile',
		'app.personality',
		'app.task',
		'app.tasks_personality',
		'app.skill',
		'app.profiles_skill',
		'app.tasks_profile'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->ProfilesPersonality = ClassRegistry::init('ProfilesPersonality');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->ProfilesPersonality);

		parent::tearDown();
	}

}
