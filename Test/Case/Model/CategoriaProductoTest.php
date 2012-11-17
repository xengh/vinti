<?php
App::uses('CategoriaProducto', 'Model');

/**
 * CategoriaProducto Test Case
 *
 */
class CategoriaProductoTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.categoria_producto'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->CategoriaProducto = ClassRegistry::init('CategoriaProducto');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->CategoriaProducto);

		parent::tearDown();
	}

}
