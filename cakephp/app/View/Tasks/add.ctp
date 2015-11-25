<div class="row-fluid">
	<div class="span9">
		<?php echo $this->BootstrapForm->create('Task', array('class' => 'form-horizontal'));?>
			<fieldset>
				<legend><?php echo __('Add %s', __('Task')); ?></legend>
				<?php
				echo $this->BootstrapForm->input('name', array(
					'required' => 'required',
					'helpInline' => '<span class="label label-important">' . __('Required') . '</span>&nbsp;')
				);
				echo $this->BootstrapForm->input('work_id', array(
					'required' => 'required',
					'helpInline' => '<span class="label label-important">' . __('Required') . '</span>&nbsp;')
				);
				echo $this->BootstrapForm->input('Personality');
				echo $this->BootstrapForm->input('Profile');
				echo $this->BootstrapForm->input('Skill');
				?>
				<?php echo $this->BootstrapForm->submit(__('Submit'));?>
			</fieldset>
		<?php echo $this->BootstrapForm->end();?>
	</div>
	<div class="span3">
		<div class="well" style="padding: 8px 0; margin-top:8px;">
		<ul class="nav nav-list">
			<li class="nav-header"><?php echo __('Actions'); ?></li>
			<li><?php echo $this->Html->link(__('List %s', __('Tasks')), array('action' => 'index'));?></li>
			<li><?php echo $this->Html->link(__('List %s', __('Works')), array('controller' => 'works', 'action' => 'index')); ?></li>
			<li><?php echo $this->Html->link(__('New %s', __('Work')), array('controller' => 'works', 'action' => 'add')); ?></li>
			<li><?php echo $this->Html->link(__('List %s', __('Personalities')), array('controller' => 'personalities', 'action' => 'index')); ?></li>
			<li><?php echo $this->Html->link(__('New %s', __('Personality')), array('controller' => 'personalities', 'action' => 'add')); ?></li>
			<li><?php echo $this->Html->link(__('List %s', __('Profiles')), array('controller' => 'profiles', 'action' => 'index')); ?></li>
			<li><?php echo $this->Html->link(__('New %s', __('Profile')), array('controller' => 'profiles', 'action' => 'add')); ?></li>
			<li><?php echo $this->Html->link(__('List %s', __('Skills')), array('controller' => 'skills', 'action' => 'index')); ?></li>
			<li><?php echo $this->Html->link(__('New %s', __('Skill')), array('controller' => 'skills', 'action' => 'add')); ?></li>
		</ul>
		</div>
	</div>
</div>