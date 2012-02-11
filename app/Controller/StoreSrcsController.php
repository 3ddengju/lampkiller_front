<?php
App::uses('AppController', 'Controller');
/**
 * StoreSrcs Controller
 *
 * @property StoreSrc $StoreSrc
 */
class StoreSrcsController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->StoreSrc->recursive = 0;
		$this->set('storeSrcs', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->StoreSrc->id = $id;
		if (!$this->StoreSrc->exists()) {
			throw new NotFoundException(__('Invalid store src'));
		}
		$this->set('storeSrc', $this->StoreSrc->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->StoreSrc->create();
			if ($this->StoreSrc->save($this->request->data)) {
				$this->Session->setFlash(__('The store src has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The store src could not be saved. Please, try again.'));
			}
		}
		$stores = $this->StoreSrc->Store->find('list');
		$positions = $this->StoreSrc->Position->find('list');
		$this->set(compact('stores', 'positions'));
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->StoreSrc->id = $id;
		if (!$this->StoreSrc->exists()) {
			throw new NotFoundException(__('Invalid store src'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->StoreSrc->save($this->request->data)) {
				$this->Session->setFlash(__('The store src has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The store src could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->StoreSrc->read(null, $id);
		}
		$stores = $this->StoreSrc->Store->find('list');
		$positions = $this->StoreSrc->Position->find('list');
		$this->set(compact('stores', 'positions'));
	}

/**
 * delete method
 *
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		if (!$this->request->is('post')) {
			throw new MethodNotAllowedException();
		}
		$this->StoreSrc->id = $id;
		if (!$this->StoreSrc->exists()) {
			throw new NotFoundException(__('Invalid store src'));
		}
		if ($this->StoreSrc->delete()) {
			$this->Session->setFlash(__('Store src deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Store src was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
