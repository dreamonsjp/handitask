<?php
App::uses('AppController', 'Controller');
/**
 * TasksProfiles Controller
 *
 * @property TasksProfile $TasksProfile
 * @property PaginatorComponent $Paginator
 */
class TasksProfilesController extends AppController {

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
		$this->TasksProfile->recursive = 0;
		$this->set('tasksProfiles', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->TasksProfile->id = $id;
		if (!$this->TasksProfile->exists()) {
			throw new NotFoundException(__('Invalid %s', __('tasks profile')));
		}
		$this->set('tasksProfile', $this->TasksProfile->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->TasksProfile->create();
			if ($this->TasksProfile->save($this->request->data)) {
				$this->Session->setFlash(
					__('The %s has been saved', __('tasks profile')),
					'alert',
					array(
						'plugin' => 'TwitterBootstrap',
						'class' => 'alert-success'
					)
				);
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(
					__('The %s could not be saved. Please, try again.', __('tasks profile')),
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
		$this->TasksProfile->id = $id;
		if (!$this->TasksProfile->exists()) {
			throw new NotFoundException(__('Invalid %s', __('tasks profile')));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->TasksProfile->save($this->request->data)) {
				$this->Session->setFlash(
					__('The %s has been saved', __('tasks profile')),
					'alert',
					array(
						'plugin' => 'TwitterBootstrap',
						'class' => 'alert-success'
					)
				);
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(
					__('The %s could not be saved. Please, try again.', __('tasks profile')),
					'alert',
					array(
						'plugin' => 'TwitterBootstrap',
						'class' => 'alert-error'
					)
				);
			}
		} else {
			$this->request->data = $this->TasksProfile->read(null, $id);
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
		$this->TasksProfile->id = $id;
		if (!$this->TasksProfile->exists()) {
			throw new NotFoundException(__('Invalid %s', __('tasks profile')));
		}
		if ($this->TasksProfile->delete()) {
			$this->Session->setFlash(
				__('The %s deleted', __('tasks profile')),
				'alert',
				array(
					'plugin' => 'TwitterBootstrap',
					'class' => 'alert-success'
				)
			);
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(
			__('The %s was not deleted', __('tasks profile')),
			'alert',
			array(
				'plugin' => 'TwitterBootstrap',
				'class' => 'alert-error'
			)
		);
		$this->redirect(array('action' => 'index'));
	}

}
