<div class="row-fluid">
	<div class="span9">
		<h2><?php echo __('List %s', __('Skills'));?></h2>

		<p>
			<?php echo $this->BootstrapPaginator->counter(array('format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')));?>
		</p>

		<table class="table">
			<tr>
				<th><?php echo $this->BootstrapPaginator->sort('id');?></th>
				<th><?php echo $this->BootstrapPaginator->sort('name');?></th>
				<th class="actions"><?php echo __('Actions');?></th>
			</tr>
		<?php foreach ($skills as $skill): ?>
			<tr>
				<td><?php echo h($skill['Skill']['id']); ?>&nbsp;</td>
				<td><?php echo h($skill['Skill']['name']); ?>&nbsp;</td>
				<td class="actions">
					<?php echo $this->Html->link(__('View'), array('action' => 'view', $skill['Skill']['id'])); ?>
					<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $skill['Skill']['id'])); ?>
					<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $skill['Skill']['id']), null, __('Are you sure you want to delete # %s?', $skill['Skill']['id'])); ?>
				</td>
			</tr>
		<?php endforeach; ?>
		</table>

		<?php echo $this->BootstrapPaginator->pagination(); ?>
	</div>
	<div class="span3">
		<div class="well" style="padding: 8px 0; margin-top:8px;">
		<ul class="nav nav-list">
			<li class="nav-header"><?php echo __('Actions'); ?></li>
			<li><?php echo $this->Html->link(__('New %s', __('Skill')), array('action' => 'add')); ?></li>
			<li><?php echo $this->Html->link(__('List %s', __('Profiles')), array('controller' => 'profiles', 'action' => 'index')); ?> </li>
			<li><?php echo $this->Html->link(__('New %s', __('Profile')), array('controller' => 'profiles', 'action' => 'add')); ?> </li>
			<li><?php echo $this->Html->link(__('List %s', __('Tasks')), array('controller' => 'tasks', 'action' => 'index')); ?> </li>
			<li><?php echo $this->Html->link(__('New %s', __('Task')), array('controller' => 'tasks', 'action' => 'add')); ?> </li>
		</ul>
		</div>
	</div>
</div>