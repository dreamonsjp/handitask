<?php
App::uses('AppController', 'Controller');
/**
 * TasksSkills Controller
 *
 * @property TasksSkill $TasksSkill
 * @property PaginatorComponent $Paginator
 */
class TasksSkillsController extends AppController {

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
		$this->TasksSkill->recursive = 0;
		$this->set('tasksSkills', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->TasksSkill->id = $id;
		if (!$this->TasksSkill->exists()) {
			throw new NotFoundException(__('Invalid %s', __('tasks skill')));
		}
		$this->set('tasksSkill', $this->TasksSkill->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->TasksSkill->create();
			if ($this->TasksSkill->save($this->request->data)) {
				$this->Session->setFlash(
					__('The %s has been saved', __('tasks skill')),
					'alert',
					array(
						'plugin' => 'TwitterBootstrap',
						'class' => 'alert-success'
					)
				);
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(
					__('The %s could not be saved. Please, try again.', __('tasks skill')),
					'alert',
					array(
						'plugin' => 'TwitterBootstrap',
						'class' => 'alert-error'
					)
				);
			}
		}
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->TasksSkill->id = $id;
		if (!$this->TasksSkill->exists()) {
			throw new NotFoundException(__('Invalid %s', __('tasks skill')));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->TasksSkill->save($this->request->data)) {
				$this->Session->setFlash(
					__('The %s has been saved', __('tasks skill')),
					'alert',
					array(
						'plugin' => 'TwitterBootstrap',
						'class' => 'alert-success'
					)
				);
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(
					__('The %s could not be saved. Please, try again.', __('tasks skill')),
					'alert',
					array(
						'plugin' => 'TwitterBootstrap',
						'class' => 'alert-error'
					)
				);
			}
		} else {
			$this->request->data = $this->TasksSkill->read(null, $id);
		}
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
		$this->TasksSkill->id = $id;
		if (!$this->TasksSkill->exists()) {
			throw new NotFoundException(__('Invalid %s', __('tasks skill')));
		}
		if ($this->TasksSkill->delete()) {
			$this->Session->setFlash(
				__('The %s deleted', __('tasks skill')),
				'alert',
				array(
					'plugin' => 'TwitterBootstrap',
					'class' => 'alert-success'
				)
			);
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(
			__('The %s was not deleted', __('tasks skill')),
			'alert',
			array(
				'plugin' => 'TwitterBootstrap',
				'class' => 'alert-error'
			)
		);
		$this->redirect(array('action' => 'index'));
	}

}
