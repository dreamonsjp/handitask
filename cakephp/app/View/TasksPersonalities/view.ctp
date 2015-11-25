<div class="row-fluid">
	<div class="span9">
		<h2><?php  echo __('Tasks Personality');?></h2>
		<dl>
			<dt><?php echo __('Id'); ?></dt>
			<dd>
				<?php echo h($tasksPersonality['TasksPersonality']['id']); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('Task'); ?></dt>
			<dd>
				<?php echo $this->Html->link($tasksPersonality['Task']['name'], array('controller' => 'tasks', 'action' => 'view', $tasksPersonality['Task']['id'])); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('Personality'); ?></dt>
			<dd>
				<?php echo $this->Html->link($tasksPersonality['Personality']['name'], array('controller' => 'personalities', 'action' => 'view', $tasksPersonality['Personality']['id'])); ?>
				&nbsp;
			</dd>
		</dl>
	</div>
	<div class="span3">
		<div class="well" style="padding: 8px 0; margin-top:8px;">
		<ul class="nav nav-list">
			<li class="nav-header"><?php echo __('Actions'); ?></li>
			<li><?php echo $this->Html->link(__('Edit %s', __('Tasks Personality')), array('action' => 'edit', $tasksPersonality['TasksPersonality']['id'])); ?> </li>
			<li><?php echo $this->Form->postLink(__('Delete %s', __('Tasks Personality')), array('action' => 'delete', $tasksPersonality['TasksPersonality']['id']), null, __('Are you sure you want to delete # %s?', $tasksPersonality['TasksPersonality']['id'])); ?> </li>
			<li><?php echo $this->Html->link(__('List %s', __('Tasks Personalities')), array('action' => 'index')); ?> </li>
			<li><?php echo $this->Html->link(__('New %s', __('Tasks Personality')), array('action' => 'add')); ?> </li>
			<li><?php echo $this->Html->link(__('List %s', __('Tasks')), array('controller' => 'tasks', 'action' => 'index')); ?> </li>
			<li><?php echo $this->Html->link(__('New %s', __('Task')), array('controller' => 'tasks', 'action' => 'add')); ?> </li>
			<li><?php echo $this->Html->link(__('List %s', __('Personalities')), array('controller' => 'personalities', 'action' => 'index')); ?> </li>
			<li><?php echo $this->Html->link(__('New %s', __('Personality')), array('controller' => 'personalities', 'action' => 'add')); ?> </li>
		</ul>
		</div>
	</div>
</div>

