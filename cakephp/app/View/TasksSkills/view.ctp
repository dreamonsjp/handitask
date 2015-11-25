<div class="row-fluid">
	<div class="span9">
		<h2><?php  echo __('Tasks Skill');?></h2>
		<dl>
			<dt><?php echo __('Id'); ?></dt>
			<dd>
				<?php echo h($tasksSkill['TasksSkill']['id']); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('Task'); ?></dt>
			<dd>
				<?php echo $this->Html->link($tasksSkill['Task']['name'], array('controller' => 'tasks', 'action' => 'view', $tasksSkill['Task']['id'])); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('Skill'); ?></dt>
			<dd>
				<?php echo $this->Html->link($tasksSkill['Skill']['name'], array('controller' => 'skills', 'action' => 'view', $tasksSkill['Skill']['id'])); ?>
				&nbsp;
			</dd>
		</dl>
	</div>
	<div class="span3">
		<div class="well" style="padding: 8px 0; margin-top:8px;">
		<ul class="nav nav-list">
			<li class="nav-header"><?php echo __('Actions'); ?></li>
			<li><?php echo $this->Html->link(__('Edit %s', __('Tasks Skill')), array('action' => 'edit', $tasksSkill['TasksSkill']['id'])); ?> </li>
			<li><?php echo $this->Form->postLink(__('Delete %s', __('Tasks Skill')), array('action' => 'delete', $tasksSkill['TasksSkill']['id']), null, __('Are you sure you want to delete # %s?', $tasksSkill['TasksSkill']['id'])); ?> </li>
			<li><?php echo $this->Html->link(__('List %s', __('Tasks Skills')), array('action' => 'index')); ?> </li>
			<li><?php echo $this->Html->link(__('New %s', __('Tasks Skill')), array('action' => 'add')); ?> </li>
			<li><?php echo $this->Html->link(__('List %s', __('Tasks')), array('controller' => 'tasks', 'action' => 'index')); ?> </li>
			<li><?php echo $this->Html->link(__('New %s', __('Task')), array('controller' => 'tasks', 'action' => 'add')); ?> </li>
			<li><?php echo $this->Html->link(__('List %s', __('Skills')), array('controller' => 'skills', 'action' => 'index')); ?> </li>
			<li><?php echo $this->Html->link(__('New %s', __('Skill')), array('controller' => 'skills', 'action' => 'add')); ?> </li>
		</ul>
		</div>
	</div>
</div>

