<div class="row-fluid">
	<div class="span9">
		<?php echo $this->BootstrapForm->create('TasksPersonality', array('class' => 'form-horizontal'));?>
			<fieldset>
				<legend><?php echo __('Add %s', __('Tasks Personality')); ?></legend>
				<?php
				echo $this->BootstrapForm->input('task_id', array(
					'required' => 'required',
					'helpInline' => '<span class="label label-important">' . __('Required') . '</span>&nbsp;')
				);
				echo $this->BootstrapForm->input('personality_id', array(
					'required' => 'required',
					'helpInline' => '<span class="label label-important">' . __('Required') . '</span>&nbsp;')
				);
				?>
				<?php echo $this->BootstrapForm->submit(__('Submit'));?>
			</fieldset>
		<?php echo $this->BootstrapForm->end();?>
	</div>
	<div class="span3">
		<div class="well" style="padding: 8px 0; margin-top:8px;">
		<ul class="nav nav-list">
			<li class="nav-header"><?php echo __('Actions'); ?></li>
			<li><?php echo $this->Html->link(__('List %s', __('Tasks Personalities')), array('action' => 'index'));?></li>
			<li><?php echo $this->Html->link(__('List %s', __('Tasks')), array('controller' => 'tasks', 'action' => 'index')); ?></li>
			<li><?php echo $this->Html->link(__('New %s', __('Task')), array('controller' => 'tasks', 'action' => 'add')); ?></li>
			<li><?php echo $this->Html->link(__('List %s', __('Personalities')), array('controller' => 'personalities', 'action' => 'index')); ?></li>
			<li><?php echo $this->Html->link(__('New %s', __('Personality')), array('controller' => 'personalities', 'action' => 'add')); ?></li>
		</ul>
		</div>
	</div>
</div>