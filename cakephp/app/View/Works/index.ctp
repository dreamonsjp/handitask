<div class="row-fluid">
	<div class="span9">
		<h2><?php echo __('List %s', __('Works'));?></h2>

		<p>
			<?php echo $this->BootstrapPaginator->counter(array('format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')));?>
		</p>

		<table class="table">
			<tr>
				<th><?php echo $this->BootstrapPaginator->sort('id');?></th>
				<th><?php echo $this->BootstrapPaginator->sort('request_id');?></th>
				<th><?php echo $this->BootstrapPaginator->sort('name');?></th>
				<th class="actions"><?php echo __('Actions');?></th>
			</tr>
		<?php foreach ($works as $work): ?>
			<tr>
				<td><?php echo h($work['Work']['id']); ?>&nbsp;</td>
				<td>
					<?php echo $this->Html->link($work['Request']['name'], array('controller' => 'requests', 'action' => 'view', $work['Request']['id'])); ?>
				</td>
				<td><?php echo h($work['Work']['name']); ?>&nbsp;</td>
				<td class="actions">
					<?php echo $this->Html->link(__('View'), array('action' => 'view', $work['Work']['id'])); ?>
					<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $work['Work']['id'])); ?>
					<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $work['Work']['id']), null, __('Are you sure you want to delete # %s?', $work['Work']['id'])); ?>
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
			<li><?php echo $this->Html->link(__('New %s', __('Work')), array('action' => 'add')); ?></li>
		</ul>
		</div>
	</div>
</div>