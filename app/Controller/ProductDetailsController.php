<?php
App::uses('AppController', 'Controller');
/**
 * ProductDetails Controller
 *
 * @property ProductDetail $ProductDetail
 */
class ProductDetailsController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->ProductDetail->recursive = 0;
		$this->set('productDetails', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->ProductDetail->id = $id;
		if (!$this->ProductDetail->exists()) {
			throw new NotFoundException(__('Invalid product detail'));
		}
		$this->set('productDetail', $this->ProductDetail->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->ProductDetail->create();
			if ($this->ProductDetail->save($this->request->data)) {
				$this->Session->setFlash(__('The product detail has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The product detail could not be saved. Please, try again.'));
			}
		}
		$products = $this->ProductDetail->Product->find('list');
		$details = $this->ProductDetail->Detail->find('list');
		$this->set(compact('products', 'details'));
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->ProductDetail->id = $id;
		if (!$this->ProductDetail->exists()) {
			throw new NotFoundException(__('Invalid product detail'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->ProductDetail->save($this->request->data)) {
				$this->Session->setFlash(__('The product detail has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The product detail could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->ProductDetail->read(null, $id);
		}
		$products = $this->ProductDetail->Product->find('list');
		$details = $this->ProductDetail->Detail->find('list');
		$this->set(compact('products', 'details'));
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
		$this->ProductDetail->id = $id;
		if (!$this->ProductDetail->exists()) {
			throw new NotFoundException(__('Invalid product detail'));
		}
		if ($this->ProductDetail->delete()) {
			$this->Session->setFlash(__('Product detail deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Product detail was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
	public function adddetail($id=null)
	{ 
	if($id&&empty($this->data))
   {
    $this->set('productid',$id); 
   }	
	if(!empty($this->data))
    {
	 echo "success";
	 print_r($this->data);
	 $id=$this->data['ProductDetail']['product_id'];
     $i=1;
     for(;$i<=8;$i++)
	if(!empty($this->data['ProductDetail']['classification_'.$i]))
	{
	   echo $this->data['ProductDetail']['classification_'.$i];
		foreach($this->data['ProductDetail']['classification_'.$i] as $result)
		{$this->ProductDetail->create();
		$pcd=array('ProductDetail'=>array('product_id'=> $id,
		'detail_id'=>$result));
		$this->ProductDetail->save($pcd);
		}
		}				
                
	    $this->redirect(array('controller'=>'productsrcs','action'=>'addnew',$id));
	   
	   		
		
	
	}
	}       
	
	
}
