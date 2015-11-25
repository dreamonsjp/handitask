<div class="row-fluid">
	<div class="span9">
		<h2><?php  echo __('Task');?></h2>
		<dl>
			<dt><?php echo __('Id'); ?></dt>
			<dd>
				<?php echo h($task['Task']['id']); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('Name'); ?></dt>
			<dd>
				<?php echo h($task['Task']['name']); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('Work'); ?></dt>
			<dd>
				<?php echo $this->Html->link($task['Work']['name'], array('controller' => 'works', 'action' => 'view', $task['Work']['id'])); ?>
				&nbsp;
			</dd>
		</dl>
	</div>
	<div class="span3">
		<div class="well" style="padding: 8px 0; margin-top:8px;">
		<ul class="nav nav-list">
			<li class="nav-header"><?php echo __('Actions'); ?></li>
			<li><?php echo $this->Html->link(__('Edit %s', __('Task')), array('action' => 'edit', $task['Task']['id'])); ?> </li>
			<li><?php echo $this->Form->postLink(__('Delete %s', __('Task')), array('action' => 'delete', $task['Task']['id']), null, __('Are you sure you want to delete # %s?', $task['Task']['id'])); ?> </li>
			<li><?php echo $this->Html->link(__('List %s', __('Tasks')), array('action' => 'index')); ?> </li>
			<li><?php echo $this->Html->link(__('New %s', __('Task')), array('action' => 'add')); ?> </li>
		</ul>
		</div>
	</div>
</div>

<div class="row-fluid">
	<div class="span9">
		<h3><?php echo __('Related %s', __('Personalities')); ?></h3>
	<?php if (!empty($task['Personality'])):?>
		<table class="table">
			<tr>
				<th><?php echo __('Id'); ?></th>
				<th><?php echo __('Name'); ?></th>
				<th class="actions"><?php echo __('Actions');?></th>
			</tr>
		<?php foreach ($task['Personality'] as $personality): ?>
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
		<h3><?php echo __('Related %s', __('Profiles')); ?></h3>
	<?php if (!empty($task['Profile'])):?>
		<table class="table">
			<tr>
				<th><?php echo __('Id'); ?></th>
				<th><?php echo __('Belong Type'); ?></th>
				<th><?php echo __('Belong Name'); ?></th>
				<th><?php echo __('Name'); ?></th>
				<th><?php echo __('Sex'); ?></th>
				<th class="actions"><?php echo __('Actions');?></th>
			</tr>
		<?php foreach ($task['Profile'] as $profile): ?>
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
		<h3><?php echo __('Related %s', __('Skills')); ?></h3>
	<?php if (!empty($task['Skill'])):?>
		<table class="table">
			<tr>
				<th><?php echo __('Id'); ?></th>
				<th><?php echo __('Name'); ?></th>
				<th class="actions"><?php echo __('Actions');?></th>
			</tr>
		<?php foreach ($task['Skill'] as $skill): ?>
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
