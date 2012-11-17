<?php
/**
 * ProveedoresProvisioneFixture
 *
 */
class ProveedoresProvisioneFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'ID' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 20, 'key' => 'primary'),
		'PROVISIONE_ID' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 20, 'key' => 'index'),
		'PROVEEDORE_ID' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 20, 'key' => 'index'),
		'VALOR_PROVISION' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 20),
		'indexes' => array(
			'PRIMARY' => array('column' => 'ID', 'unique' => 1),
			'FK_REFERENCE_10' => array('column' => 'PROVISIONE_ID', 'unique' => 0),
			'FK_REFERENCE_11' => array('column' => 'PROVEEDORE_ID', 'unique' => 0)
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
			'PROVEEDORE_ID' => 1,
			'VALOR_PROVISION' => 1
		),
	);

}
