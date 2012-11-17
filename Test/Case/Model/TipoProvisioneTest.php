<?php
App::uses('TipoProvisione', 'Model');

/**
 * TipoProvisione Test Case
 *
 */
class TipoProvisioneTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.tipo_provisione'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->TipoProvisione = ClassRegistry::init('TipoProvisione');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->TipoProvisione);

		parent::tearDown();
	}

}
