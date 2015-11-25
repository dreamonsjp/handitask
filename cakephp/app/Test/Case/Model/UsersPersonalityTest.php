<?php
App::uses('UsersPersonality', 'Model');

/**
 * UsersPersonality Test Case
 *
 */
class UsersPersonalityTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.users_personality',
		'app.user'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->UsersPersonality = ClassRegistry::init('UsersPersonality');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->UsersPersonality);

		parent::tearDown();
	}

}
