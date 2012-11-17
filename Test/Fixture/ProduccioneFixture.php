<?php
/**
 * ProduccioneFixture
 *
 */
class ProduccioneFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'ID' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 20, 'key' => 'primary'),
		'FASE_ID' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 20, 'key' => 'index'),
		'SUMINISTRO_ID' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 20, 'key' => 'index'),
		'FECHA_MODIFICACION' => array('type' => 'date', 'null' => true, 'default' => null),
		'STOCK_PRODUCCION' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 20),
		'indexes' => array(
			'PRIMARY' => array('column' => 'ID', 'unique' => 1),
			'FK_REFERENCE_15' => array('column' => 'FASE_ID', 'unique' => 0),
			'FK_REFERENCE_24' => array('column' => 'SUMINISTRO_ID', 'unique' => 0)
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
			'FASE_ID' => 1,
			'SUMINISTRO_ID' => 1,
			'FECHA_MODIFICACION' => '2012-11-05',
			'STOCK_PRODUCCION' => 1
		),
	);

}
