<?php
App::uses('AppController', 'Controller');
/**
 * PersonalDatas Controller
 *
 * @property PersonalData $PersonalData
 * @property PaginatorComponent $Paginator
 */
class PersonalDatasController extends AppController {

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
		$this->PersonalData->recursive = 0;
		$this->set('personalDatas', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->PersonalData->exists($id)) {
			throw new NotFoundException(__('Invalid personal data'));
		}
		$options = array('conditions' => array('PersonalData.' . $this->PersonalData->primaryKey => $id));
		$this->set('personalData', $this->PersonalData->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->PersonalData->create();
			if ($this->PersonalData->save($this->request->data)) {
				$this->Session->setFlash(__('The personal data has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The personal data could not be saved. Please, try again.'));
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
		if (!$this->PersonalData->exists($id)) {
			throw new NotFoundException(__('Invalid personal data'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->PersonalData->save($this->request->data)) {
				$this->Session->setFlash(__('The personal data has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The personal data could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('PersonalData.' . $this->PersonalData->primaryKey => $id));
			$this->request->data = $this->PersonalData->find('first', $options);
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
		$this->PersonalData->id = $id;
		if (!$this->PersonalData->exists()) {
			throw new NotFoundException(__('Invalid personal data'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->PersonalData->delete()) {
			$this->Session->setFlash(__('The personal data has been deleted.'));
		} else {
			$this->Session->setFlash(__('The personal data could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
