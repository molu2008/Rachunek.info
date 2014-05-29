<?php
App::uses('AppController', 'Controller');
/**
 * Kontrachents Controller
 *
 * @property Kontrachent $Kontrachent
 * @property PaginatorComponent $Paginator
 */
class KontrachentsController extends AppController {

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
		$this->Kontrachent->recursive = 0;
		$this->set('kontrachents', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Kontrachent->exists($id)) {
			throw new NotFoundException(__('Invalid kontrachent'));
		}
		$options = array('conditions' => array('Kontrachent.' . $this->Kontrachent->primaryKey => $id));
		$this->set('kontrachent', $this->Kontrachent->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Kontrachent->create();
			if ($this->Kontrachent->save($this->request->data)) {
				$this->Session->setFlash(__('The kontrachent has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The kontrachent could not be saved. Please, try again.'));
			}
		}
		$kontrachents = $this->Kontrachent->find('list');
		$this->set(compact('kontrachents'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Kontrachent->exists($id)) {
			throw new NotFoundException(__('Invalid kontrachent'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Kontrachent->save($this->request->data)) {
				$this->Session->setFlash(__('The kontrachent has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The kontrachent could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Kontrachent.' . $this->Kontrachent->primaryKey => $id));
			$this->request->data = $this->Kontrachent->find('first', $options);
		}
		$kontrachents = $this->Kontrachent->Kontrachent->find('list');
		$this->set(compact('kontrachents'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Kontrachent->id = $id;
		if (!$this->Kontrachent->exists()) {
			throw new NotFoundException(__('Invalid kontrachent'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Kontrachent->delete()) {
			$this->Session->setFlash(__('The kontrachent has been deleted.'));
		} else {
			$this->Session->setFlash(__('The kontrachent could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
