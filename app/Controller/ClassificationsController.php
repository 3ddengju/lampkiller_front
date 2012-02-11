<?php
App::uses('AppController', 'Controller');
/**
 * Classifications Controller
 *
 * @property Classification $Classification
 */
class ClassificationsController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Classification->recursive = 0;
		$this->set('classifications', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Classification->id = $id;
		if (!$this->Classification->exists()) {
			throw new NotFoundException(__('Invalid classification'));
		}
		$this->set('classification', $this->Classification->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Classification->create();
			if ($this->Classification->save($this->request->data)) {
				$this->Session->setFlash(__('The classification has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The classification could not be saved. Please, try again.'));
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
		$this->Classification->id = $id;
		if (!$this->Classification->exists()) {
			throw new NotFoundException(__('Invalid classification'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Classification->save($this->request->data)) {
				$this->Session->setFlash(__('The classification has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The classification could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Classification->read(null, $id);
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
		$this->Classification->id = $id;
		if (!$this->Classification->exists()) {
			throw new NotFoundException(__('Invalid classification'));
		}
		if ($this->Classification->delete()) {
			$this->Session->setFlash(__('Classification deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Classification was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
	public function getname()
	{
	  return $this->Classification->find('list');
	}
	public function getnumber()
	{
	return $this->Classification->find('count');
	}
	
	
}
