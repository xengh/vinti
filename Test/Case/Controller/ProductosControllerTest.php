<?php
App::uses('ProductosController', 'Controller');

/**
 * ProductosController Test Case
 *
 */
class ProductosControllerTest extends ControllerTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.producto',
		'app.categoria',
		'app.produccione',
		'app.fase',
		'app.suministro',
		'app.provisione',
		'app.tipo',
		'app.proveedores_provisione',
		'app.proveedore',
		'app.provisiones_suministro',
		'app.images',
		'app.venta',
		'app.despacho',
		'app.estado',
		'app.user',
		'app.productos_venta'
	);

/**
 * testIndex method
 *
 * @return void
 */
	public function testIndex() {
	}

/**
 * testView method
 *
 * @return void
 */
	public function testView() {
	}

/**
 * testAdd method
 *
 * @return void
 */
	public function testAdd() {
	}

/**
 * testEdit method
 *
 * @return void
 */
	public function testEdit() {
	}

/**
 * testDelete method
 *
 * @return void
 */
	public function testDelete() {
	}

}
