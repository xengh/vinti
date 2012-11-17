<?php
App::uses('Venta', 'Model');

/**
 * Venta Test Case
 *
 */
class VentaTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.venta',
		'app.despacho',
		'app.estado',
		'app.user',
		'app.producto',
		'app.categoria',
		'app.produccione',
		'app.fase',
		'app.suministro',
		'app.provisione',
		'app.tipo',
		'app.compra',
		'app.proveedore',
		'app.proveedores_provisione',
		'app.provisiones_suministro',
		'app.images',
		'app.productos_venta'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Venta = ClassRegistry::init('Venta');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Venta);

		parent::tearDown();
	}

}
