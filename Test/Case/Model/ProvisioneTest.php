<?php
App::uses('Provisione', 'Model');

/**
 * Provisione Test Case
 *
 */
class ProvisioneTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.provisione',
		'app.tipo',
		'app.compra',
		'app.user',
		'app.venta',
		'app.despacho',
		'app.estado',
		'app.producto',
		'app.categoria',
		'app.produccione',
		'app.fase',
		'app.suministro',
		'app.provisiones_suministro',
		'app.images',
		'app.productos_venta',
		'app.proveedore',
		'app.proveedores_provisione'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Provisione = ClassRegistry::init('Provisione');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Provisione);

		parent::tearDown();
	}

}
