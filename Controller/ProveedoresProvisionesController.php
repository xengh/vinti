<?php
App::uses('AppController', 'Controller');
App::import('Model', 'Tipo');
App::import('Model', 'Provisione');
App::import('Model', 'Proveedore');
/**
 * ProveedoresProvisiones Controller
 *
 * @property ProveedoresProvisione $ProveedoresProvisione
 */
class ProveedoresProvisionesController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->ProveedoresProvisione->recursive = 0;
		$this->set('proveedoresProvisiones', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->ProveedoresProvisione->id = $id;
		if (!$this->ProveedoresProvisione->exists()) {
			throw new NotFoundException(__('Invalid proveedores provisione'));
		}
		$this->set('proveedoresProvisione', $this->ProveedoresProvisione->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->ProveedoresProvisione->create();
			if ($this->ProveedoresProvisione->saveAll($this->data)) {
				$this->Session->setFlash('Provisión valorada con éxito', 'default', array('class' => 'alert alert-success'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('No se pudo valorar la provisión, por favor intentelo denuevo.', 'default', array('class' => 'alert alert-error'));
			}
		}
		$tipos = $this->ProveedoresProvisione->Provisione->Tipo->find('all');
		$provisiones = $this->ProveedoresProvisione->Provisione->find('all', array('order' => 'Provisione.PROVISION'));
		$proveedores = $this->ProveedoresProvisione->Proveedore->find('all');
		$this->set(compact('provisiones', 'proveedores', 'tipos'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->ProveedoresProvisione->id = $id;
		if (!$this->ProveedoresProvisione->exists()) {
			throw new NotFoundException(__('Invalid proveedores provisione'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->ProveedoresProvisione->save($this->request->data)) {
				$this->Session->setFlash('Provision editada con éxito', 'default', array('class' => 'alert alert-success'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('No se pudo actualizar la provisión valorada, por favor inténtelo denuevo.', 'default', array('class' => 'alert alert-error'));
			}
		} else {
			$this->request->data = $this->ProveedoresProvisione->read(null, $id);
		}
		$provisiones = $this->ProveedoresProvisione->Provisione->find('all');
		$proveedores = $this->ProveedoresProvisione->Proveedore->find('all');
		$this->set(compact('provisiones', 'proveedores'));
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
		$this->ProveedoresProvisione->id = $id;
		if (!$this->ProveedoresProvisione->exists()) {
			throw new NotFoundException(__('Invalid proveedores provisione'));
		}
		if ($this->ProveedoresProvisione->delete()) {
			$this->Session->setFlash('Provisión eliminada con éxito', 'default', array('class' => 'alert alert-info'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash('No se pudo eliminar la provisón', 'default', array('class' => 'alert alert-error'));
		$this->redirect(array('action' => 'index'));
	}
}
