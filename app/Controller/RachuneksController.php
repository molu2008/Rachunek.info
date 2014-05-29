<?php
App::uses('AppController', 'Controller');
/**
 * Rachuneks Controller
 *
 * @property Rachunek $Rachunek
 * @property PaginatorComponent $Paginator
 */
class RachuneksController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Rachunek->recursive = 0;
		$this->set('rachuneks', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Rachunek->exists($id)) {
			throw new NotFoundException(__('Invalid rachunek'));
		}
		$options = array('conditions' => array('Rachunek.' . $this->Rachunek->primaryKey => $id));
		$this->set('rachunek', $this->Rachunek->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Rachunek->create();
			if ($this->Rachunek->save($this->request->data)) {
				$this->Session->setFlash(__('The rachunek has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The rachunek could not be saved. Please, try again.'));
			}
		}
		$users = $this->Rachunek->User->find('list');
		$this->set(compact('users'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Rachunek->exists($id)) {
			throw new NotFoundException(__('Invalid rachunek'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Rachunek->save($this->request->data)) {
				$this->Session->setFlash(__('The rachunek has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The rachunek could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Rachunek.' . $this->Rachunek->primaryKey => $id));
			$this->request->data = $this->Rachunek->find('first', $options);
		}
		$users = $this->Rachunek->User->find('list');
		$this->set(compact('users'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Rachunek->id = $id;
		if (!$this->Rachunek->exists()) {
			throw new NotFoundException(__('Invalid rachunek'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Rachunek->delete()) {
			$this->Session->setFlash(__('The rachunek has been deleted.'));
		} else {
			$this->Session->setFlash(__('The rachunek could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
