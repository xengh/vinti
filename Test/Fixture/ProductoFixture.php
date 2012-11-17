<?php
/**
 * ProductoFixture
 *
 */
class ProductoFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'ID' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 20, 'key' => 'primary'),
		'CATEGORIA_ID' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 20, 'key' => 'index'),
		'PRODUCCIONE_ID' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 20, 'key' => 'index'),
		'NOMBRE' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 100, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'DESCRIPCION' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 100, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'PRECIO' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 20),
		'STOCK_PRODUCTO' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 20),
		'indexes' => array(
			'PRIMARY' => array('column' => 'ID', 'unique' => 1),
			'FK_REFERENCE_18' => array('column' => 'PRODUCCIONE_ID', 'unique' => 0),
			'FK_REFERENCE_19' => array('column' => 'CATEGORIA_ID', 'unique' => 0)
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
			'ID' => 1,
			'CATEGORIA_ID' => 1,
			'PRODUCCIONE_ID' => 1,
			'NOMBRE' => 'Lorem ipsum dolor sit amet',
			'DESCRIPCION' => 'Lorem ipsum dolor sit amet',
			'PRECIO' => 1,
			'STOCK_PRODUCTO' => 1
		),
	);

}
