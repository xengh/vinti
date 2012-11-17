<?php
App::uses('AppModel', 'Model');
/**
 * Image Model
 *
 * @property Producto $Producto
 */
class Image extends AppModel {


	var $name = 'Image';
    var $actsAs = array(
        'MeioUpload.MeioUpload' => array('filename')
    );





/**
 * Primary key field
 *
 * @var string
 */
	public $primaryKey = 'ID';


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */

	public $belongsTo = array(
		'Producto' => array(
			'className' => 'Producto',
			'foreignKey' => 'PRODUCTO_ID',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
