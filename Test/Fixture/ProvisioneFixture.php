<?php
/**
 * ProvisioneFixture
 *
 */
class ProvisioneFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'ID' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 20, 'key' => 'primary'),
		'TIPO_ID' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 20, 'key' => 'index'),
		'PROVISION' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 50, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'DESCRIPCION' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 300, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'ID', 'unique' => 1),
			'FK_REFERENCE_16' => array('column' => 'TIPO_ID', 'unique' => 0)
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
			'TIPO_ID' => 1,
			'PROVISION' => 'Lorem ipsum dolor sit amet',
			'DESCRIPCION' => 'Lorem ipsum dolor sit amet'
		),
	);

}
