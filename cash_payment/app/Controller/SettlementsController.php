<?php
App::uses('AppController', 'Controller');
/**
 * Settlements Controller
 *
 * @property Settlement $Settlement
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class SettlementsController extends AppController {

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
		$this->Settlement->recursive = 0;
		$this->set('settlements', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Settlement->exists($id)) {
			throw new NotFoundException(__('Invalid settlement'));
		}
		$options = array('conditions' => array('Settlement.' . $this->Settlement->primaryKey => $id));
		$this->set('settlement', $this->Settlement->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Settlement->create();
			if ($this->Settlement->save($this->request->data)) {
				$this->Session->setFlash(__('The settlement has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The settlement could not be saved. Please, try again.'));
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
		if (!$this->Settlement->exists($id)) {
			throw new NotFoundException(__('Invalid settlement'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Settlement->save($this->request->data)) {
				$this->Session->setFlash(__('The settlement has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The settlement could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Settlement.' . $this->Settlement->primaryKey => $id));
			$this->request->data = $this->Settlement->find('first', $options);
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
		$this->Settlement->id = $id;
		if (!$this->Settlement->exists()) {
			throw new NotFoundException(__('Invalid settlement'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Settlement->delete()) {
			$this->Session->setFlash(__('The settlement has been deleted.'));
		} else {
			$this->Session->setFlash(__('The settlement could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
