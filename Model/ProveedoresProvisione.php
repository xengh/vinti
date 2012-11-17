<?php
App::uses('AppModel', 'Model');
/**
 * ProveedoresProvisione Model
 *
 * @property Provisione $Provisione
 * @property Proveedore $Proveedore
 */
class ProveedoresProvisione extends AppModel {

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
		'VALOR_PROVISION' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				'message' => 'Ingrese un monto válido',
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
		'Provisione' => array(
			'className' => 'Provisione',
			'foreignKey' => 'PROVISIONE_ID',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Proveedore' => array(
			'className' => 'Proveedore',
			'foreignKey' => 'PROVEEDORE_ID',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
