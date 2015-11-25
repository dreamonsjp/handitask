<?php
App::uses('AppController', 'Controller');
/**
 * ProfilesSkills Controller
 *
 * @property ProfilesSkill $ProfilesSkill
 * @property PaginatorComponent $Paginator
 */
class ProfilesSkillsController extends AppController {

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
		$this->ProfilesSkill->recursive = 0;
		$this->set('profilesSkills', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->ProfilesSkill->id = $id;
		if (!$this->ProfilesSkill->exists()) {
			throw new NotFoundException(__('Invalid %s', __('profiles skill')));
		}
		$this->set('profilesSkill', $this->ProfilesSkill->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->ProfilesSkill->create();
			if ($this->ProfilesSkill->save($this->request->data)) {
				$this->Session->setFlash(
					__('The %s has been saved', __('profiles skill')),
					'alert',
					array(
						'plugin' => 'TwitterBootstrap',
						'class' => 'alert-success'
					)
				);
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(
					__('The %s could not be saved. Please, try again.', __('profiles skill')),
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
		$this->ProfilesSkill->id = $id;
		if (!$this->ProfilesSkill->exists()) {
			throw new NotFoundException(__('Invalid %s', __('profiles skill')));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->ProfilesSkill->save($this->request->data)) {
				$this->Session->setFlash(
					__('The %s has been saved', __('profiles skill')),
					'alert',
					array(
						'plugin' => 'TwitterBootstrap',
						'class' => 'alert-success'
					)
				);
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(
					__('The %s could not be saved. Please, try again.', __('profiles skill')),
					'alert',
					array(
						'plugin' => 'TwitterBootstrap',
						'class' => 'alert-error'
					)
				);
			}
		} else {
			$this->request->data = $this->ProfilesSkill->read(null, $id);
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
		$this->ProfilesSkill->id = $id;
		if (!$this->ProfilesSkill->exists()) {
			throw new NotFoundException(__('Invalid %s', __('profiles skill')));
		}
		if ($this->ProfilesSkill->delete()) {
			$this->Session->setFlash(
				__('The %s deleted', __('profiles skill')),
				'alert',
				array(
					'plugin' => 'TwitterBootstrap',
					'class' => 'alert-success'
				)
			);
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(
			__('The %s was not deleted', __('profiles skill')),
			'alert',
			array(
				'plugin' => 'TwitterBootstrap',
				'class' => 'alert-error'
			)
		);
		$this->redirect(array('action' => 'index'));
	}

}
