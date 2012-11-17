<?php
App::uses('AppModel', 'Model');
/**
 * Despacho Model
 *
 * @property Venta $Venta
 */
class Despacho extends AppModel {

/**
 * Primary key field
 *
 * @var string
 */
	public $primaryKey = 'ID';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'DIRECCION_DESPACHO' => array(
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
 * hasOne associations
 *
 * @var array
 */
	public $hasOne = array(
		'Venta' => array(
			'className' => 'Venta',
			'foreignKey' => 'DESPACHO_ID',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
