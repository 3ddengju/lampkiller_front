<?php
App::uses('AppController', 'Controller');
/**
 * Details Controller
 *
 * @property Detail $Detail
 */
class DetailsController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Detail->recursive = 0;
		$this->set('details', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Detail->id = $id;
		if (!$this->Detail->exists()) {
			throw new NotFoundException(__('Invalid detail'));
		}
		$this->set('detail', $this->Detail->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Detail->create();
			if ($this->Detail->save($this->request->data)) {
				$this->Session->setFlash(__('The detail has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The detail could not be saved. Please, try again.'));
			}
		}
		$classifications = $this->Detail->Classification->find('list');
		$products = $this->Detail->Product->find('list');
		$this->set(compact('classifications', 'products'));
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Detail->id = $id;
		if (!$this->Detail->exists()) {
			throw new NotFoundException(__('Invalid detail'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Detail->save($this->request->data)) {
				$this->Session->setFlash(__('The detail has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The detail could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Detail->read(null, $id);
		}
		$classifications = $this->Detail->Classification->find('list');
		$products = $this->Detail->Product->find('list');
		$this->set(compact('classifications', 'products'));
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
		$this->Detail->id = $id;
		if (!$this->Detail->exists()) {
			throw new NotFoundException(__('Invalid detail'));
		}
		if ($this->Detail->delete()) {
			$this->Session->setFlash(__('Detail deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Detail was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
	public function lists()
	{
	   $options=Array();
	   $i=1;
	   for($i=1;$i<6;$i++)
     	$options[$i]=$this->Detail->find('list',array('conditions'=>array('Detail.classification_id'=>$i)));
	  return   $options; 
	
	}
	
}
