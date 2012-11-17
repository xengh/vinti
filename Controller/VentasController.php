<?php
App::uses('AppController', 'Controller');
/**
 * Ventas Controller
 *
 * @property Venta $Venta
 */
class VentasController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Venta->recursive = 0;
		$this->set('ventas', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Venta->id = $id;
		if (!$this->Venta->exists()) {
			throw new NotFoundException(__('Invalid venta'));
		}
		$this->set('venta', $this->Venta->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Venta->create();
			if ($this->Venta->save($this->request->data)) {
				$this->Session->setFlash(__('The venta has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The venta could not be saved. Please, try again.'));
			}
		}
		$despachos = $this->Venta->Despacho->find('list');
		$estados = $this->Venta->Estado->find('list');
		$users = $this->Venta->User->find('list');
		$productos = $this->Venta->Producto->find('list');
		$this->set(compact('despachos', 'estados', 'users', 'productos'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Venta->id = $id;
		if (!$this->Venta->exists()) {
			throw new NotFoundException(__('Invalid venta'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Venta->save($this->request->data)) {
				$this->Session->setFlash(__('The venta has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The venta could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Venta->read(null, $id);
		}
		$despachos = $this->Venta->Despacho->find('list');
		$estados = $this->Venta->Estado->find('list');
		$users = $this->Venta->User->find('list');
		$productos = $this->Venta->Producto->find('list');
		$this->set(compact('despachos', 'estados', 'users', 'productos'));
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
		$this->Venta->id = $id;
		if (!$this->Venta->exists()) {
			throw new NotFoundException(__('Invalid venta'));
		}
		if ($this->Venta->delete()) {
			$this->Session->setFlash(__('Venta deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Venta was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
