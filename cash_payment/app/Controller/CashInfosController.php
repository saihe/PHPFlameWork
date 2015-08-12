<?php
App::uses('AppController', 'Controller');
/**
 * CashInfos Controller
 *
 * @property CashInfo $CashInfo
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class CashInfosController extends AppController {

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
		$this->CashInfo->recursive = 0;
		$this->set('cashInfos', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->CashInfo->exists($id)) {
			throw new NotFoundException(__('Invalid cash info'));
		}
		$options = array('conditions' => array('CashInfo.' . $this->CashInfo->primaryKey => $id));
		$this->set('cashInfo', $this->CashInfo->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->CashInfo->create();
			if ($this->CashInfo->save($this->request->data)) {
				$this->Session->setFlash(__('The cash info has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The cash info could not be saved. Please, try again.'));
			}
		}
		$cashers = $this->CashInfo->Casher->find('list');
		$settlements = $this->CashInfo->Settlement->find('list');
		$this->set(compact('cashers', 'settlements'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->CashInfo->exists($id)) {
			throw new NotFoundException(__('Invalid cash info'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->CashInfo->save($this->request->data)) {
				$this->Session->setFlash(__('The cash info has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The cash info could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('CashInfo.' . $this->CashInfo->primaryKey => $id));
			$this->request->data = $this->CashInfo->find('first', $options);
		}
		$cashers = $this->CashInfo->Casher->find('list');
		$settlements = $this->CashInfo->Settlement->find('list');
		$this->set(compact('cashers', 'settlements'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->CashInfo->id = $id;
		if (!$this->CashInfo->exists()) {
			throw new NotFoundException(__('Invalid cash info'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->CashInfo->delete()) {
			$this->Session->setFlash(__('The cash info has been deleted.'));
		} else {
			$this->Session->setFlash(__('The cash info could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
