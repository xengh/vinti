<?php
App::uses('Despacho', 'Model');

/**
 * Despacho Test Case
 *
 */
class DespachoTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.despacho',
		'app.venta'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Despacho = ClassRegistry::init('Despacho');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Despacho);

		parent::tearDown();
	}

}
