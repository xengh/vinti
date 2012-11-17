<?php
App::uses('Compra', 'Model');

/**
 * Compra Test Case
 *
 */
class CompraTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.compra',
		'app.provisione',
		'app.tipo',
		'app.proveedore',
		'app.proveedores_provisione',
		'app.suministro',
		'app.produccione',
		'app.fase',
		'app.producto',
		'app.categoria',
		'app.images',
		'app.venta',
		'app.productos_venta',
		'app.provisiones_suministro',
		'app.user'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Compra = ClassRegistry::init('Compra');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Compra);

		parent::tearDown();
	}

}
