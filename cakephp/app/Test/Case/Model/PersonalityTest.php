<?php
App::uses('Personality', 'Model');

/**
 * Personality Test Case
 *
 */
class PersonalityTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.personality',
		'app.profile',
		'app.profiles_personality',
		'app.task',
		'app.tasks_personality'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Personality = ClassRegistry::init('Personality');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Personality);

		parent::tearDown();
	}

}
