<?php
App::uses('AppController', 'Controller');
/**
 * Cashers Controller
 *
 * @property Casher $Casher
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class CashersController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator', 'Session');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Casher->recursive = 0;
		$this->set('cashers', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Casher->exists($id)) {
			throw new NotFoundException(__('Invalid casher'));
		}
		$options = array('conditions' => array('Casher.' . $this->Casher->primaryKey => $id));
		$this->set('casher', $this->Casher->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Casher->create();
			if ($this->Casher->save($this->request->data)) {
				$this->Session->setFlash(__('The casher has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The casher could not be saved. Please, try again.'));
			}
		}
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Casher->exists($id)) {
			throw new NotFoundException(__('Invalid casher'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Casher->save($this->request->data)) {
				$this->Session->setFlash(__('The casher has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The casher could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Casher.' . $this->Casher->primaryKey => $id));
			$this->request->data = $this->Casher->find('first', $options);
		}
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Casher->id = $id;
		if (!$this->Casher->exists()) {
			throw new NotFoundException(__('Invalid casher'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Casher->delete()) {
			$this->Session->setFlash(__('The casher has been deleted.'));
		} else {
			$this->Session->setFlash(__('The casher could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
