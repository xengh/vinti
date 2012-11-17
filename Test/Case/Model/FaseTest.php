<?php
App::uses('Fase', 'Model');

/**
 * Fase Test Case
 *
 */
class FaseTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.fase',
		'app.produccione'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Fase = ClassRegistry::init('Fase');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Fase);

		parent::tearDown();
	}

}
