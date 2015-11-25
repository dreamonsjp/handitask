<?php
App::uses('AppController', 'Controller');
/**
 * ProfilesPersonalities Controller
 *
 * @property ProfilesPersonality $ProfilesPersonality
 * @property PaginatorComponent $Paginator
 */
class ProfilesPersonalitiesController extends AppController {

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
		$this->ProfilesPersonality->recursive = 0;
		$this->set('profilesPersonalities', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->ProfilesPersonality->id = $id;
		if (!$this->ProfilesPersonality->exists()) {
			throw new NotFoundException(__('Invalid %s', __('profiles personality')));
		}
		$this->set('profilesPersonality', $this->ProfilesPersonality->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->ProfilesPersonality->create();
			if ($this->ProfilesPersonality->save($this->request->data)) {
				$this->Session->setFlash(
					__('The %s has been saved', __('profiles personality')),
					'alert',
					array(
						'plugin' => 'TwitterBootstrap',
						'class' => 'alert-success'
					)
				);
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(
					__('The %s could not be saved. Please, try again.', __('profiles personality')),
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
		$this->ProfilesPersonality->id = $id;
		if (!$this->ProfilesPersonality->exists()) {
			throw new NotFoundException(__('Invalid %s', __('profiles personality')));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->ProfilesPersonality->save($this->request->data)) {
				$this->Session->setFlash(
					__('The %s has been saved', __('profiles personality')),
					'alert',
					array(
						'plugin' => 'TwitterBootstrap',
						'class' => 'alert-success'
					)
				);
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(
					__('The %s could not be saved. Please, try again.', __('profiles personality')),
					'alert',
					array(
						'plugin' => 'TwitterBootstrap',
						'class' => 'alert-error'
					)
				);
			}
		} else {
			$this->request->data = $this->ProfilesPersonality->read(null, $id);
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
		$this->ProfilesPersonality->id = $id;
		if (!$this->ProfilesPersonality->exists()) {
			throw new NotFoundException(__('Invalid %s', __('profiles personality')));
		}
		if ($this->ProfilesPersonality->delete()) {
			$this->Session->setFlash(
				__('The %s deleted', __('profiles personality')),
				'alert',
				array(
					'plugin' => 'TwitterBootstrap',
					'class' => 'alert-success'
				)
			);
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(
			__('The %s was not deleted', __('profiles personality')),
			'alert',
			array(
				'plugin' => 'TwitterBootstrap',
				'class' => 'alert-error'
			)
		);
		$this->redirect(array('action' => 'index'));
	}

}
