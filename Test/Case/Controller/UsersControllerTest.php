<?php
App::uses('UsersController', 'Controller');

/**
 * UsersController Test Case
 *
 */
class UsersControllerTest extends ControllerTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.user',
		'app.venta',
		'app.despacho',
		'app.estado',
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
