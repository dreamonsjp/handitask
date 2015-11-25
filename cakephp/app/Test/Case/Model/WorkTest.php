<?php
App::uses('Work', 'Model');

/**
 * Work Test Case
 *
 */
class WorkTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.work',
		'app.request',
		'app.task',
		'app.personality',
		'app.profile',
		'app.profiles_personality',
		'app.skill',
		'app.profiles_skill',
		'app.tasks_skill',
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
		$this->Work = ClassRegistry::init('Work');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Work);

		parent::tearDown();
	}

}
