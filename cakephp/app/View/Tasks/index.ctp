<div class="row-fluid">
	<div class="span9">
		<h2><?php echo __('List %s', __('Tasks'));?></h2>

		<p>
			<?php echo $this->BootstrapPaginator->counter(array('format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')));?>
		</p>

		<table class="table">
			<tr>
				<th><?php echo $this->BootstrapPaginator->sort('id');?></th>
				<th><?php echo $this->BootstrapPaginator->sort('name');?></th>
				<th><?php echo $this->BootstrapPaginator->sort('work_id');?></th>
				<th class="actions"><?php echo __('Actions');?></th>
			</tr>
		<?php foreach ($tasks as $task): ?>
			<tr>
				<td><?php echo h($task['Task']['id']); ?>&nbsp;</td>
				<td><?php echo h($task['Task']['name']); ?>&nbsp;</td>
				<td><?php echo $this->Html->link($task['Work']['name'], array('controller' => 'works', 'action' => 'view', $task['Work']['id'])); ?></td>
				<td class="actions">
					<?php echo $this->Html->link(__('View'), array('action' => 'view', $task['Task']['id'])); ?>
					<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $task['Task']['id'])); ?>
					<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $task['Task']['id']), null, __('Are you sure you want to delete # %s?', $task['Task']['id'])); ?>
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
			<li><?php echo $this->Html->link(__('New %s', __('Task')), array('action' => 'add')); ?></li>
		</ul>
		</div>
	</div>
</div>