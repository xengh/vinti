<?php
/**
 * ProductosVentaFixture
 *
 */
class ProductosVentaFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'PRODUCTO_ID' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 20, 'key' => 'index'),
		'VENTA_ID' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 20, 'key' => 'index'),
		'CANTIDAD' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 20),
		'indexes' => array(
			'FK_REFERENCE_5' => array('column' => 'PRODUCTO_ID', 'unique' => 0),
			'FK_REFERENCE_6' => array('column' => 'VENTA_ID', 'unique' => 0)
		),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'PRODUCTO_ID' => 1,
			'VENTA_ID' => 1,
			'CANTIDAD' => 1
		),
	);

}
