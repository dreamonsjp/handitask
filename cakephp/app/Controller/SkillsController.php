<?php
App::uses('AppController', 'Controller');
/**
 * Skills Controller
 *
 * @property Skill $Skill
 * @property PaginatorComponent $Paginator
 */
class SkillsController extends AppController {

/**
 *  Layout
 *
 * @var string
 */
	public $layout = 'bootstrap';

/**
 * Helpers
 *
 * @var array
 */
	public $helpers = array('TwitterBootstrap.BootstrapHtml', 'TwitterBootstrap.BootstrapForm', 'TwitterBootstrap.BootstrapPaginator');
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
		$this->Skill->recursive = 0;
		$this->set('skills', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Skill->id = $id;
		if (!$this->Skill->exists()) {
			throw new NotFoundException(__('Invalid %s', __('skill')));
		}
		$this->set('skill', $this->Skill->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Skill->create();
			if ($this->Skill->save($this->request->data)) {
				$this->Session->setFlash(
					__('The %s has been saved', __('skill')),
					'alert',
					array(
						'plugin' => 'TwitterBootstrap',
						'class' => 'alert-success'
					)
				);
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(
					__('The %s could not be saved. Please, try again.', __('skill')),
					'alert',
					array(
						'plugin' => 'TwitterBootstrap',
						'class' => 'alert-error'
					)
				);
			}
		}
		$profiles = $this->Skill->Profile->find('list');
		$tasks = $this->Skill->Task->find('list');
		$this->set(compact('profiles', 'tasks'));
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Skill->id = $id;
		if (!$this->Skill->exists()) {
			throw new NotFoundException(__('Invalid %s', __('skill')));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Skill->save($this->request->data)) {
				$this->Session->setFlash(
					__('The %s has been saved', __('skill')),
					'alert',
					array(
						'plugin' => 'TwitterBootstrap',
						'class' => 'alert-success'
					)
				);
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(
					__('The %s could not be saved. Please, try again.', __('skill')),
					'alert',
					array(
						'plugin' => 'TwitterBootstrap',
						'class' => 'alert-error'
					)
				);
			}
		} else {
			$this->request->data = $this->Skill->read(null, $id);
		}
		$profiles = $this->Skill->Profile->find('list');
		$tasks = $this->Skill->Task->find('list');
		$this->set(compact('profiles', 'tasks'));
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
		$this->Skill->id = $id;
		if (!$this->Skill->exists()) {
			throw new NotFoundException(__('Invalid %s', __('skill')));
		}
		if ($this->Skill->delete()) {
			$this->Session->setFlash(
				__('The %s deleted', __('skill')),
				'alert',
				array(
					'plugin' => 'TwitterBootstrap',
					'class' => 'alert-success'
				)
			);
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(
			__('The %s was not deleted', __('skill')),
			'alert',
			array(
				'plugin' => 'TwitterBootstrap',
				'class' => 'alert-error'
			)
		);
		$this->redirect(array('action' => 'index'));
	}

}
