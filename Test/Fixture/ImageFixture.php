<?php
/**
 * ImageFixture
 *
 */
class ImageFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'ID' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 20, 'key' => 'primary'),
		'PRODUCTO_ID' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 20, 'key' => 'index'),
		'FILENAME' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'DIR' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'MIMETYPE' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'FILESIZE' => array('type' => 'integer', 'null' => true, 'default' => null),
		'CREATED' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'MODIFIED' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'ID', 'unique' => 1),
			'FK_REFERENCE_2' => array('column' => 'PRODUCTO_ID', 'unique' => 0)
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
			'PRODUCTO_ID' => 1,
			'FILENAME' => 'Lorem ipsum dolor sit amet',
			'DIR' => 'Lorem ipsum dolor sit amet',
			'MIMETYPE' => 'Lorem ipsum dolor sit amet',
			'FILESIZE' => 1,
			'CREATED' => '2012-11-05 03:02:48',
			'MODIFIED' => '2012-11-05 03:02:48'
		),
	);

}
