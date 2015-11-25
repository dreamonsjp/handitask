<div class="row-fluid">
	<div class="span9">
		<h2><?php  echo __('Skill');?></h2>
		<dl>
			<dt><?php echo __('Id'); ?></dt>
			<dd>
				<?php echo h($skill['Skill']['id']); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('Name'); ?></dt>
			<dd>
				<?php echo h($skill['Skill']['name']); ?>
				&nbsp;
			</dd>
		</dl>
	</div>
	<div class="span3">
		<div class="well" style="padding: 8px 0; margin-top:8px;">
		<ul class="nav nav-list">
			<li class="nav-header"><?php echo __('Actions'); ?></li>
			<li><?php echo $this->Html->link(__('Edit %s', __('Skill')), array('action' => 'edit', $skill['Skill']['id'])); ?> </li>
			<li><?php echo $this->Form->postLink(__('Delete %s', __('Skill')), array('action' => 'delete', $skill['Skill']['id']), null, __('Are you sure you want to delete # %s?', $skill['Skill']['id'])); ?> </li>
			<li><?php echo $this->Html->link(__('List %s', __('Skills')), array('action' => 'index')); ?> </li>
			<li><?php echo $this->Html->link(__('New %s', __('Skill')), array('action' => 'add')); ?> </li>
			<li><?php echo $this->Html->link(__('List %s', __('Profiles')), array('controller' => 'profiles', 'action' => 'index')); ?> </li>
			<li><?php echo $this->Html->link(__('New %s', __('Profile')), array('controller' => 'profiles', 'action' => 'add')); ?> </li>
			<li><?php echo $this->Html->link(__('List %s', __('Tasks')), array('controller' => 'tasks', 'action' => 'index')); ?> </li>
			<li><?php echo $this->Html->link(__('New %s', __('Task')), array('controller' => 'tasks', 'action' => 'add')); ?> </li>
		</ul>
		</div>
	</div>
</div>

<div class="row-fluid">
	<div class="span9">
		<h3><?php echo __('Related %s', __('Profiles')); ?></h3>
	<?php if (!empty($skill['Profile'])):?>
		<table class="table">
			<tr>
				<th><?php echo __('Id'); ?></th>
				<th><?php echo __('Belong Type'); ?></th>
				<th><?php echo __('Belong Name'); ?></th>
				<th><?php echo __('Name'); ?></th>
				<th><?php echo __('Sex'); ?></th>
				<th class="actions"><?php echo __('Actions');?></th>
			</tr>
		<?php foreach ($skill['Profile'] as $profile): ?>
			<tr>
				<td><?php echo $profile['id'];?></td>
				<td><?php echo $profile['belong_type'];?></td>
				<td><?php echo $profile['belong_name'];?></td>
				<td><?php echo $profile['name'];?></td>
				<td><?php echo $profile['sex'];?></td>
				<td class="actions">
					<?php echo $this->Html->link(__('View'), array('controller' => 'profiles', 'action' => 'view', $profile['id'])); ?>
					<?php echo $this->Html->link(__('Edit'), array('controller' => 'profiles', 'action' => 'edit', $profile['id'])); ?>
					<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'profiles', 'action' => 'delete', $profile['id']), null, __('Are you sure you want to delete # %s?', $profile['id'])); ?>
				</td>
			</tr>
		<?php endforeach; ?>
		</table>
	<?php endif; ?>

	</div>
	<div class="span3">
		<ul class="nav nav-list">
			<li><?php echo $this->Html->link(__('New %s', __('Profile')), array('controller' => 'profiles', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="row-fluid">
	<div class="span9">
		<h3><?php echo __('Related %s', __('Tasks')); ?></h3>
	<?php if (!empty($skill['Task'])):?>
		<table class="table">
			<tr>
				<th><?php echo __('Id'); ?></th>
				<th><?php echo __('Name'); ?></th>
				<th><?php echo __('Work Id'); ?></th>
				<th class="actions"><?php echo __('Actions');?></th>
			</tr>
		<?php foreach ($skill['Task'] as $task): ?>
			<tr>
				<td><?php echo $task['id'];?></td>
				<td><?php echo $task['name'];?></td>
				<td><?php echo $task['work_id'];?></td>
				<td class="actions">
					<?php echo $this->Html->link(__('View'), array('controller' => 'tasks', 'action' => 'view', $task['id'])); ?>
					<?php echo $this->Html->link(__('Edit'), array('controller' => 'tasks', 'action' => 'edit', $task['id'])); ?>
					<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'tasks', 'action' => 'delete', $task['id']), null, __('Are you sure you want to delete # %s?', $task['id'])); ?>
				</td>
			</tr>
		<?php endforeach; ?>
		</table>
	<?php endif; ?>

	</div>
	<div class="span3">
		<ul class="nav nav-list">
			<li><?php echo $this->Html->link(__('New %s', __('Task')), array('controller' => 'tasks', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
