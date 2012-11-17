<?php
/**
 * VentaFixture
 *
 */
class VentaFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'ID' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 20, 'key' => 'primary'),
		'DESPACHO_ID' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 20, 'key' => 'index'),
		'USER_ID' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 20, 'key' => 'index'),
		'ESTADO_ID' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 20, 'key' => 'index'),
		'FECHA_DIA' => array('type' => 'integer', 'null' => true, 'default' => null),
		'FECHA_MES' => array('type' => 'integer', 'null' => true, 'default' => null),
		'FECHA_ANO' => array('type' => 'integer', 'null' => true, 'default' => null),
		'TOTAL' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 20),
		'indexes' => array(
			'PRIMARY' => array('column' => 'ID', 'unique' => 1),
			'FK_REFERENCE_12' => array('column' => 'DESPACHO_ID', 'unique' => 0),
			'FK_REFERENCE_17' => array('column' => 'USER_ID', 'unique' => 0),
			'FK_REFERENCE_20' => array('column' => 'ESTADO_ID', 'unique' => 0)
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
			'DESPACHO_ID' => 1,
			'USER_ID' => 1,
			'ESTADO_ID' => 1,
			'FECHA_DIA' => 1,
			'FECHA_MES' => 1,
			'FECHA_ANO' => 1,
			'TOTAL' => 1
		),
	);

}
