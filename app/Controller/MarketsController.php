<?php
App::uses('AppController', 'Controller');
/**
 * Markets Controller
 *
 * @property Market $Market
 */
class MarketsController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Market->recursive = 0;
		$this->set('markets', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Market->id = $id;
		if (!$this->Market->exists()) {
			throw new NotFoundException(__('Invalid market'));
		}
		$this->set('market', $this->Market->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Market->create();
			if ($this->Market->save($this->request->data)) {
				$this->Session->setFlash(__('The market has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The market could not be saved. Please, try again.'));
			}
		}
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Market->id = $id;
		if (!$this->Market->exists()) {
			throw new NotFoundException(__('Invalid market'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Market->save($this->request->data)) {
				$this->Session->setFlash(__('The market has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The market could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Market->read(null, $id);
		}
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
		$this->Market->id = $id;
		if (!$this->Market->exists()) {
			throw new NotFoundException(__('Invalid market'));
		}
		if ($this->Market->delete()) {
			$this->Session->setFlash(__('Market deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Market was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
