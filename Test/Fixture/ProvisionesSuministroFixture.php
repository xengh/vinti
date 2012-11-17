<?php
/**
 * ProvisionesSuministroFixture
 *
 */
class ProvisionesSuministroFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'PROVISIONE_ID' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 20, 'key' => 'index'),
		'SUMINISTRO_ID' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 20, 'key' => 'index'),
		'indexes' => array(
			'FK_REFERENCE_23' => array('column' => 'PROVISIONE_ID', 'unique' => 0),
			'FK_REFERENCE_25' => array('column' => 'SUMINISTRO_ID', 'unique' => 0)
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
			'PROVISIONE_ID' => 1,
			'SUMINISTRO_ID' => 1
		),
	);

}
