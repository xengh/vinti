<?php
App::uses('ProvisionesSuministro', 'Model');

/**
 * ProvisionesSuministro Test Case
 *
 */
class ProvisionesSuministroTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.provisiones_suministro',
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
		$this->ProvisionesSuministro = ClassRegistry::init('ProvisionesSuministro');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->ProvisionesSuministro);

		parent::tearDown();
	}

}
