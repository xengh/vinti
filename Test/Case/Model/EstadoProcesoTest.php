<?php
App::uses('EstadoProceso', 'Model');

/**
 * EstadoProceso Test Case
 *
 */
class EstadoProcesoTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.estado_proceso'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->EstadoProceso = ClassRegistry::init('EstadoProceso');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->EstadoProceso);

		parent::tearDown();
	}

}
