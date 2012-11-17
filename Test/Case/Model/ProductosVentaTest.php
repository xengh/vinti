<?php
App::uses('ProductosVenta', 'Model');

/**
 * ProductosVenta Test Case
 *
 */
class ProductosVentaTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.productos_venta',
		'app.venta',
		'app.user',
		'app.despacho',
		'app.estado',
		'app.producto'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->ProductosVenta = ClassRegistry::init('ProductosVenta');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->ProductosVenta);

		parent::tearDown();
	}

}
