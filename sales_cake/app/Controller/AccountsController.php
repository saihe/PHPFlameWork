<?php
App::uses('AppController', 'Controller');
/**
 * Accounts Controller
 *
 * @property Account $Account
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class AccountsController extends AppController {

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
		$this->Account->recursive = 0;
		$this->set('accounts', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Account->exists($id)) {
			throw new NotFoundException(__('Invalid account'));
		}
		$options = array('conditions' => array('Account.' . $this->Account->primaryKey => $id));
		$this->set('account', $this->Account->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Account->create();
			if ($this->Account->save($this->request->data)) {
				$this->Session->setFlash(__('The account has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The account could not be saved. Please, try again.'));
			}
		}
		$customers = $this->Account->Customer->find('list');
		$accountTypes = $this->Account->AccountType->find('list');
		$this->set(compact('customers', 'accountTypes'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Account->exists($id)) {
			throw new NotFoundException(__('Invalid account'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Account->save($this->request->data)) {
				$this->Session->setFlash(__('The account has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The account could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Account.' . $this->Account->primaryKey => $id));
			$this->request->data = $this->Account->find('first', $options);
		}
		$customers = $this->Account->Customer->find('list');
		$accountTypes = $this->Account->AccountType->find('list');
		$this->set(compact('customers', 'accountTypes'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Account->id = $id;
		if (!$this->Account->exists()) {
			throw new NotFoundException(__('Invalid account'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Account->delete()) {
			$this->Session->setFlash(__('The account has been deleted.'));
		} else {
			$this->Session->setFlash(__('The account could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
