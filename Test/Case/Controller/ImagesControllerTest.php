<?php
App::uses('ImagesController', 'Controller');

/**
 * ImagesController Test Case
 *
 */
class ImagesControllerTest extends ControllerTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.image',
		'app.producto',
		'app.categoria',
		'app.produccione',
		'app.fase',
		'app.suministro',
		'app.provisione',
		'app.tipo',
		'app.proveedores_provisione',
		'app.proveedore',
		'app.provisiones_suministro',
		'app.images',
		'app.venta',
		'app.despacho',
		'app.estado',
		'app.user',
		'app.productos_venta'
	);

}
