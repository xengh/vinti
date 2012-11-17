<?php
App::uses('Proveedore', 'Model');

/**
 * Proveedore Test Case
 *
 */
class ProveedoreTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.proveedore',
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
		'app.proveedores_provisione'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Proveedore = ClassRegistry::init('Proveedore');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Proveedore);

		parent::tearDown();
	}

}
