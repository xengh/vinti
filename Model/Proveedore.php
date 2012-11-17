<?php
App::uses('AppModel', 'Model');
/**
 * Proveedore Model
 *
 * @property ProveedoresProvisione $ProveedoresProvisione
 */
class Proveedore extends AppModel {

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
		'EMPRESA' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => 'Por favor ingrese el nombre de la empresa proveedora.',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'EMAIL' => array(
			'email' => array(
				'rule' => array('email'),
				'message' => 'Por favor ingrese un correo electrónico válido.',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => 'Por favor ingrese un correo electrónico',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'DIRECCION' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => 'Por favor ingrese la dirección del proveedor',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'TELEFONO' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				'message' => 'Por favor ingrese un número telefónico válido ej: 7654321',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => 'Por favor ingrese un número telefónico.',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'ProveedoresProvisione' => array(
			'className' => 'ProveedoresProvisione',
			'foreignKey' => 'PROVEEDORE_ID',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		)
	);

}
