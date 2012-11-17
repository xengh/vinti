<?php
App::uses('Suministro', 'Model');

/**
 * Suministro Test Case
 *
 */
class SuministroTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.suministro',
		'app.produccione',
		'app.fase',
		'app.producto',
		'app.categoria',
		'app.images',
		'app.venta',
		'app.user',
		'app.despacho',
		'app.estado',
		'app.productos_venta',
		'app.provisione',
		'app.provisiones_suministro'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Suministro = ClassRegistry::init('Suministro');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Suministro);

		parent::tearDown();
	}

}
