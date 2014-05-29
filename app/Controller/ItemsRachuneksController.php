<?php
App::uses('AppController', 'Controller');
/**
 * ItemsRachuneks Controller
 *
 * @property ItemsRachunek $ItemsRachunek
 * @property PaginatorComponent $Paginator
 */
class ItemsRachuneksController extends AppController {

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
		$this->ItemsRachunek->recursive = 0;
		$this->set('itemsRachuneks', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->ItemsRachunek->exists($id)) {
			throw new NotFoundException(__('Invalid items rachunek'));
		}
		$options = array('conditions' => array('ItemsRachunek.' . $this->ItemsRachunek->primaryKey => $id));
		$this->set('itemsRachunek', $this->ItemsRachunek->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->ItemsRachunek->create();
			if ($this->ItemsRachunek->save($this->request->data)) {
				$this->Session->setFlash(__('The items rachunek has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The items rachunek could not be saved. Please, try again.'));
			}
		}
		$rachuneks = $this->ItemsRachunek->Rachunek->find('list');
		$items = $this->ItemsRachunek->Item->find('list');
		$this->set(compact('rachuneks', 'items'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->ItemsRachunek->exists($id)) {
			throw new NotFoundException(__('Invalid items rachunek'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->ItemsRachunek->save($this->request->data)) {
				$this->Session->setFlash(__('The items rachunek has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The items rachunek could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('ItemsRachunek.' . $this->ItemsRachunek->primaryKey => $id));
			$this->request->data = $this->ItemsRachunek->find('first', $options);
		}
		$rachuneks = $this->ItemsRachunek->Rachunek->find('list');
		$items = $this->ItemsRachunek->Item->find('list');
		$this->set(compact('rachuneks', 'items'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->ItemsRachunek->id = $id;
		if (!$this->ItemsRachunek->exists()) {
			throw new NotFoundException(__('Invalid items rachunek'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->ItemsRachunek->delete()) {
			$this->Session->setFlash(__('The items rachunek has been deleted.'));
		} else {
			$this->Session->setFlash(__('The items rachunek could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
