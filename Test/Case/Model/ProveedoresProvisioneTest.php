<?php
App::uses('ProveedoresProvisione', 'Model');

/**
 * ProveedoresProvisione Test Case
 *
 */
class ProveedoresProvisioneTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.proveedores_provisione',
		'app.provisione',
		'app.tipo',
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
		'app.provisiones_suministro',
		'app.proveedore'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->ProveedoresProvisione = ClassRegistry::init('ProveedoresProvisione');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->ProveedoresProvisione);

		parent::tearDown();
	}

}
