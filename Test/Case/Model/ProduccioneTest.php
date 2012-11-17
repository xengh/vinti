<?php
App::uses('Produccione', 'Model');

/**
 * Produccione Test Case
 *
 */
class ProduccioneTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.produccione',
		'app.fase',
		'app.suministro',
		'app.provisione',
		'app.tipo',
		'app.compra',
		'app.user',
		'app.venta',
		'app.despacho',
		'app.estado',
		'app.producto',
		'app.categoria',
		'app.images',
		'app.productos_venta',
		'app.proveedore',
		'app.proveedores_provisione',
		'app.suministros_provisione'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Produccione = ClassRegistry::init('Produccione');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Produccione);

		parent::tearDown();
	}

}
