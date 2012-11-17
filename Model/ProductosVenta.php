<?php
App::uses('AppModel', 'Model');
/**
 * ProductosVenta Model
 *
 * @property Venta $Venta
 * @property Producto $Producto
 */
class ProductosVenta extends AppModel {

/**
 * Primary key field
 *
 * @var string
 */


/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'CANTIDAD' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Venta' => array(
			'className' => 'Venta',
			'foreignKey' => 'VENTA_ID',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Producto' => array(
			'className' => 'Producto',
			'foreignKey' => 'PRODUCTO_ID',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
