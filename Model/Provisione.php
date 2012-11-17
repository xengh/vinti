<?php
App::uses('AppModel', 'Model');
/**
 * Provisione Model
 *
 * @property Tipo $Tipo
 * @property ProveedoresProvisione $ProveedoresProvisione
 * @property Suministro $Suministro
 */
class Provisione extends AppModel {

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
		'PROVISION' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => 'Ingrese el nombre de la provisión.',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'DESCRIPCION' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => 'Ingrese la descripcioón de la provisión.',
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
		'Tipo' => array(
			'className' => 'Tipo',
			'foreignKey' => 'TIPO_ID',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'ProveedoresProvisione' => array(
			'className' => 'ProveedoresProvisione',
			'foreignKey' => 'PROVISIONE_ID',
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


/**
 * hasAndBelongsToMany associations
 *
 * @var array
 */
	public $hasAndBelongsToMany = array(
		'Suministro' => array(
			'className' => 'Suministro',
			'joinTable' => 'provisiones_suministros',
			'foreignKey' => 'provisione_id',
			'associationForeignKey' => 'suministro_id',
			'unique' => 'keepExisting',
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
			'deleteQuery' => '',
			'insertQuery' => ''
		)
	);

}
