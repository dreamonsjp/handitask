<div class="row-fluid">
	<div class="span9">
		<h2><?php  echo __('Tasks Profile');?></h2>
		<dl>
			<dt><?php echo __('Id'); ?></dt>
			<dd>
				<?php echo h($tasksProfile['TasksProfile']['id']); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('Task'); ?></dt>
			<dd>
				<?php echo $this->Html->link($tasksProfile['Task']['name'], array('controller' => 'tasks', 'action' => 'view', $tasksProfile['Task']['id'])); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('Profile'); ?></dt>
			<dd>
				<?php echo $this->Html->link($tasksProfile['Profile']['name'], array('controller' => 'profiles', 'action' => 'view', $tasksProfile['Profile']['id'])); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('Status'); ?></dt>
			<dd>
				<?php echo h($tasksProfile['TasksProfile']['status']); ?>
				&nbsp;
			</dd>
		</dl>
	</div>
	<div class="span3">
		<div class="well" style="padding: 8px 0; margin-top:8px;">
		<ul class="nav nav-list">
			<li class="nav-header"><?php echo __('Actions'); ?></li>
			<li><?php echo $this->Html->link(__('Edit %s', __('Tasks Profile')), array('action' => 'edit', $tasksProfile['TasksProfile']['id'])); ?> </li>
			<li><?php echo $this->Form->postLink(__('Delete %s', __('Tasks Profile')), array('action' => 'delete', $tasksProfile['TasksProfile']['id']), null, __('Are you sure you want to delete # %s?', $tasksProfile['TasksProfile']['id'])); ?> </li>
			<li><?php echo $this->Html->link(__('List %s', __('Tasks Profiles')), array('action' => 'index')); ?> </li>
			<li><?php echo $this->Html->link(__('New %s', __('Tasks Profile')), array('action' => 'add')); ?> </li>
			<li><?php echo $this->Html->link(__('List %s', __('Tasks')), array('controller' => 'tasks', 'action' => 'index')); ?> </li>
			<li><?php echo $this->Html->link(__('New %s', __('Task')), array('controller' => 'tasks', 'action' => 'add')); ?> </li>
			<li><?php echo $this->Html->link(__('List %s', __('Profiles')), array('controller' => 'profiles', 'action' => 'index')); ?> </li>
			<li><?php echo $this->Html->link(__('New %s', __('Profile')), array('controller' => 'profiles', 'action' => 'add')); ?> </li>
		</ul>
		</div>
	</div>
</div>

