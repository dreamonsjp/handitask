<div class="row-fluid">
	<div class="span9">
		<h2><?php  echo __('Profile');?></h2>
		<dl>
			<dt><?php echo __('Id'); ?></dt>
			<dd>
				<?php echo h($profile['Profile']['id']); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('Belong Type'); ?></dt>
			<dd>
				<?php echo h($profile['Profile']['belong_type']); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('Belong Name'); ?></dt>
			<dd>
				<?php echo h($profile['Profile']['belong_name']); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('Name'); ?></dt>
			<dd>
				<?php echo h($profile['Profile']['name']); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('Sex'); ?></dt>
			<dd>
				<?php echo h($profile['Profile']['sex']); ?>
				&nbsp;
			</dd>
		</dl>
	</div>
	<div class="span3">
		<div class="well" style="padding: 8px 0; margin-top:8px;">
		<ul class="nav nav-list">
			<li class="nav-header"><?php echo __('Actions'); ?></li>
			<li><?php echo $this->Html->link(__('Edit %s', __('Profile')), array('action' => 'edit', $profile['Profile']['id'])); ?> </li>
			<li><?php echo $this->Form->postLink(__('Delete %s', __('Profile')), array('action' => 'delete', $profile['Profile']['id']), null, __('Are you sure you want to delete # %s?', $profile['Profile']['id'])); ?> </li>
			<li><?php echo $this->Html->link(__('List %s', __('Profiles')), array('action' => 'index')); ?> </li>
			<li><?php echo $this->Html->link(__('New %s', __('Profile')), array('action' => 'add')); ?> </li>
			<li><?php echo $this->Html->link(__('List %s', __('Personalities')), array('controller' => 'personalities', 'action' => 'index')); ?> </li>
			<li><?php echo $this->Html->link(__('New %s', __('Personality')), array('controller' => 'personalities', 'action' => 'add')); ?> </li>
			<li><?php echo $this->Html->link(__('List %s', __('Skills')), array('controller' => 'skills', 'action' => 'index')); ?> </li>
			<li><?php echo $this->Html->link(__('New %s', __('Skill')), array('controller' => 'skills', 'action' => 'add')); ?> </li>
			<li><?php echo $this->Html->link(__('List %s', __('Tasks')), array('controller' => 'tasks', 'action' => 'index')); ?> </li>
			<li><?php echo $this->Html->link(__('New %s', __('Task')), array('controller' => 'tasks', 'action' => 'add')); ?> </li>
		</ul>
		</div>
	</div>
</div>

<div class="row-fluid">
	<div class="span9">
		<h3><?php echo __('Related %s', __('Personalities')); ?></h3>
	<?php if (!empty($profile['Personality'])):?>
		<table class="table">
			<tr>
				<th><?php echo __('Id'); ?></th>
				<th><?php echo __('Name'); ?></th>
				<th class="actions"><?php echo __('Actions');?></th>
			</tr>
		<?php foreach ($profile['Personality'] as $personality): ?>
			<tr>
				<td><?php echo $personality['id'];?></td>
				<td><?php echo $personality['name'];?></td>
				<td class="actions">
					<?php echo $this->Html->link(__('View'), array('controller' => 'personalities', 'action' => 'view', $personality['id'])); ?>
					<?php echo $this->Html->link(__('Edit'), array('controller' => 'personalities', 'action' => 'edit', $personality['id'])); ?>
					<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'personalities', 'action' => 'delete', $personality['id']), null, __('Are you sure you want to delete # %s?', $personality['id'])); ?>
				</td>
			</tr>
		<?php endforeach; ?>
		</table>
	<?php endif; ?>

	</div>
	<div class="span3">
		<ul class="nav nav-list">
			<li><?php echo $this->Html->link(__('New %s', __('Personality')), array('controller' => 'personalities', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="row-fluid">
	<div class="span9">
		<h3><?php echo __('Related %s', __('Skills')); ?></h3>
	<?php if (!empty($profile['Skill'])):?>
		<table class="table">
			<tr>
				<th><?php echo __('Id'); ?></th>
				<th><?php echo __('Name'); ?></th>
				<th class="actions"><?php echo __('Actions');?></th>
			</tr>
		<?php foreach ($profile['Skill'] as $skill): ?>
			<tr>
				<td><?php echo $skill['id'];?></td>
				<td><?php echo $skill['name'];?></td>
				<td class="actions">
					<?php echo $this->Html->link(__('View'), array('controller' => 'skills', 'action' => 'view', $skill['id'])); ?>
					<?php echo $this->Html->link(__('Edit'), array('controller' => 'skills', 'action' => 'edit', $skill['id'])); ?>
					<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'skills', 'action' => 'delete', $skill['id']), null, __('Are you sure you want to delete # %s?', $skill['id'])); ?>
				</td>
			</tr>
		<?php endforeach; ?>
		</table>
	<?php endif; ?>

	</div>
	<div class="span3">
		<ul class="nav nav-list">
			<li><?php echo $this->Html->link(__('New %s', __('Skill')), array('controller' => 'skills', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="row-fluid">
	<div class="span9">
		<h3><?php echo __('Related %s', __('Tasks')); ?></h3>
	<?php if (!empty($profile['Task'])):?>
		<table class="table">
			<tr>
				<th><?php echo __('Id'); ?></th>
				<th><?php echo __('Name'); ?></th>
				<th><?php echo __('Work Id'); ?></th>
				<th class="actions"><?php echo __('Actions');?></th>
			</tr>
		<?php foreach ($profile['Task'] as $task): ?>
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
