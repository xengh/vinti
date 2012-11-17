<?php
App::uses('AppController', 'Controller');
/**
 * Provisiones Controller
 *
 * @property Provisione $Provisione
 */
class ProvisionesController extends AppController {

	 public function beforeFilter() {
        $this->Auth->allow('index');

    }

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Provisione->recursive = 0;
		$this->set('provisiones', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Provisione->id = $id;
		if (!$this->Provisione->exists()) {
			throw new NotFoundException(__('Invalid provisione'));
		}
		$this->set('provisione', $this->Provisione->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Provisione->create();
			if ($this->Provisione->saveAll($this->request->data)) {
				$this->Session->setFlash('Provisión añadida con éxito.', 'default', array('class' => 'alert alert-success'));
				$this->redirect(array('controller' => 'ProveedoresProvisiones', 'action' => 'add'));
			} else {
				$this->Session->setFlash('No se pudo añadir la provisión por favor inténtelo denuevo.', 'default', array('class' => 'alert alert-error'));
			}
		}


		$tipos = $this->Provisione->Tipo->find('all');
		$suministros = $this->Provisione->Suministro->find('list');
		$proveedores = $this->Provisione->ProveedoresProvisione->Proveedore->find('all');
		$this->set(compact('tipos', 'suministros', 'proveedores'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Provisione->id = $id;
		if (!$this->Provisione->exists()) {
			throw new NotFoundException(__('Invalid provisione'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Provisione->save($this->request->data)) {
				$this->Session->setFlash('Provisión editada con éxto', 'default', array('class' => 'alert alert-success'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('La provisión no se guardo correctamente, porfavor prueba denuevo.', 'default', array('class' => 'alert alert-error'));
			}
		} else {
			$this->request->data = $this->Provisione->read(null, $id);
		}
		$tipos = $this->Provisione->Tipo->find('all');
		$suministros = $this->Provisione->Suministro->find('list');		
		$this->set(compact('tipos', 'suministros'));
	}

/**
 * delete method
 *
 * @throws MethodNotAllowedException
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		if (!$this->request->is('post')) {
			throw new MethodNotAllowedException();
		}
		$this->Provisione->id = $id;
		if (!$this->Provisione->exists()) {
			throw new NotFoundException(__('Invalid provisione'));
		}
		if ($this->Provisione->delete()) {
			$this->Session->setFlash('Provisión eliminada con éxito', 'default', array('class' => 'alert alert-info'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Provisione was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
