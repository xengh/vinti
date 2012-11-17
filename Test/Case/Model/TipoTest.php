<?php
App::uses('Tipo', 'Model');

/**
 * Tipo Test Case
 *
 */
class TipoTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.tipo',
		'app.provisione',
		'app.proveedores_provisione',
		'app.proveedore',
		'app.suministro',
		'app.produccione',
		'app.fase',
		'app.producto',
		'app.categoria',
		'app.images',
		'app.venta',
		'app.despacho',
		'app.estado',
		'app.user',
		'app.productos_venta',
		'app.provisiones_suministro'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Tipo = ClassRegistry::init('Tipo');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Tipo);

		parent::tearDown();
	}

}
