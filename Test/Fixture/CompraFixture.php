<?php
/**
 * CompraFixture
 *
 */
class CompraFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'ID' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 20, 'key' => 'primary'),
		'PROVISIONE_ID' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 20, 'key' => 'index'),
		'USER_ID' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 20, 'key' => 'index'),
		'CANTIDAD' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 20),
		'FECHA_DIA' => array('type' => 'integer', 'null' => true, 'default' => null),
		'FECHA_MES' => array('type' => 'integer', 'null' => true, 'default' => null),
		'FECHA_ANO' => array('type' => 'integer', 'null' => true, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'ID', 'unique' => 1),
			'FK_REFERENCE_21' => array('column' => 'USER_ID', 'unique' => 0),
			'FK_REFERENCE_22' => array('column' => 'PROVISIONE_ID', 'unique' => 0)
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
			'PROVISIONE_ID' => 1,
			'USER_ID' => 1,
			'CANTIDAD' => 1,
			'FECHA_DIA' => 1,
			'FECHA_MES' => 1,
			'FECHA_ANO' => 1
		),
	);

}
