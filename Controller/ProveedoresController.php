<?php
App::uses('AppController', 'Controller');
/**
 * Proveedores Controller
 *
 * @property Proveedore $Proveedore
 */
class ProveedoresController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Proveedore->recursive = 0;
		$this->set('proveedores', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Proveedore->id = $id;
		if (!$this->Proveedore->exists()) {
			throw new NotFoundException(__('Invalid proveedore'));
		}
		$this->set('proveedore', $this->Proveedore->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Proveedore->create();
			if ($this->Proveedore->save($this->request->data)) {
				$this->Session->setFlash('Proveedor ingresado con éxito', 'default', array('class' => 'alert alert-success'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('El proveedor no se pudo ingresar con éxito, porfavor intentalo denuevo.', 'default', array('class' => 'alert alert-error'));
			}
		}
		$provisiones = $this->Proveedore->ProveedoresProvisione->Provisione->find('list', array('fields' => 'PROVISION'));
		$this->set(compact('provisiones'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Proveedore->id = $id;
		if (!$this->Proveedore->exists()) {
			throw new NotFoundException(__('Invalid proveedore'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Proveedore->save($this->request->data)) {
				$this->Session->setFlash('Proveedor actualizado.', 'default', array('class' => 'alert alert-success'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('No se pudo actualizar el proveedor, por favor inténtelo denuevo.', 'default', array('class' => 'alert alert-error'));
			}
		} else {
			$this->request->data = $this->Proveedore->read(null, $id);
		}
		
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
		$this->Proveedore->id = $id;
		if (!$this->Proveedore->exists()) {
			throw new NotFoundException(__('Invalid proveedore'));
		}
		if ($this->Proveedore->delete()) {
			$this->Session->setFlash('Proveedor eliminado con éxito.', 'default', array('class' => 'alert alert-info'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash('No se pudo eliminar el proveedor, porfavor inténtelo denuevo.', 'default', array('class' => 'alert alert-error'));
		$this->redirect(array('action' => 'index'));
	}
}
