<?php
App::uses('AppModel', 'Model');
/**
 * ProvisionesSuministro Model
 *
 * @property Provisione $Provisione
 * @property Suministro $Suministro
 */
class ProvisionesSuministro extends AppModel {

/**
 * Primary key field
 *
 * @var string
 */
	


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
		'Suministro' => array(
			'className' => 'Suministro',
			'foreignKey' => 'SUMINISTRO_ID',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
