<?php
App::uses('AppController', 'Controller');
/**
 * TasksPersonalities Controller
 *
 * @property TasksPersonality $TasksPersonality
 * @property PaginatorComponent $Paginator
 */
class TasksPersonalitiesController extends AppController {

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
		$this->TasksPersonality->recursive = 0;
		$this->set('tasksPersonalities', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->TasksPersonality->id = $id;
		if (!$this->TasksPersonality->exists()) {
			throw new NotFoundException(__('Invalid %s', __('tasks personality')));
		}
		$this->set('tasksPersonality', $this->TasksPersonality->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->TasksPersonality->create();
			if ($this->TasksPersonality->save($this->request->data)) {
				$this->Session->setFlash(
					__('The %s has been saved', __('tasks personality')),
					'alert',
					array(
						'plugin' => 'TwitterBootstrap',
						'class' => 'alert-success'
					)
				);
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(
					__('The %s could not be saved. Please, try again.', __('tasks personality')),
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
		$this->TasksPersonality->id = $id;
		if (!$this->TasksPersonality->exists()) {
			throw new NotFoundException(__('Invalid %s', __('tasks personality')));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->TasksPersonality->save($this->request->data)) {
				$this->Session->setFlash(
					__('The %s has been saved', __('tasks personality')),
					'alert',
					array(
						'plugin' => 'TwitterBootstrap',
						'class' => 'alert-success'
					)
				);
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(
					__('The %s could not be saved. Please, try again.', __('tasks personality')),
					'alert',
					array(
						'plugin' => 'TwitterBootstrap',
						'class' => 'alert-error'
					)
				);
			}
		} else {
			$this->request->data = $this->TasksPersonality->read(null, $id);
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
		$this->TasksPersonality->id = $id;
		if (!$this->TasksPersonality->exists()) {
			throw new NotFoundException(__('Invalid %s', __('tasks personality')));
		}
		if ($this->TasksPersonality->delete()) {
			$this->Session->setFlash(
				__('The %s deleted', __('tasks personality')),
				'alert',
				array(
					'plugin' => 'TwitterBootstrap',
					'class' => 'alert-success'
				)
			);
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(
			__('The %s was not deleted', __('tasks personality')),
			'alert',
			array(
				'plugin' => 'TwitterBootstrap',
				'class' => 'alert-error'
			)
		);
		$this->redirect(array('action' => 'index'));
	}

}
