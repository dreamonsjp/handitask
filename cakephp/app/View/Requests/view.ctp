<div class="row-fluid">
	<div class="span9">
		<h2><?php  echo __('Request');?> <?php echo h($request['Request']['name']); ?></h2>
		<?php if (!empty($request['Work'])):?>
			<table class="table">
				<tr>
					<th><?php echo __('Id'); ?></th>
					<th><?php echo __('Request Id'); ?></th>
					<th><?php echo __('Name'); ?></th>
					<th class="actions"><?php echo __('Actions');?></th>
				</tr>
			<?php foreach ($request['Work'] as $work): ?>
				<tr>
					<td><?php echo $work['id'];?></td>
					<td><?php echo $work['request_id'];?></td>
					<td><?php echo $work['name'];?></td>
					<td class="actions">
						<?php echo $this->Html->link(__('View'), array('controller' => 'works', 'action' => 'view', $work['id'])); ?>
						<?php echo $this->Html->link(__('Edit'), array('controller' => 'works', 'action' => 'edit', $work['id'])); ?>
						<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'works', 'action' => 'delete', $work['id']), null, __('Are you sure you want to delete # %s?', $work['id'])); ?>
					</td>
				</tr>
			<?php endforeach; ?>
			</table>
		<?php endif; ?>
		<dl>
			<dt><?php echo __('Id'); ?></dt>
			<dd>
				<?php echo h($request['Request']['id']); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('Name'); ?></dt>
			<dd>
				<?php echo h($request['Request']['name']); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('Start'); ?></dt>
			<dd>
				<?php echo h($request['Request']['start']); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('End'); ?></dt>
			<dd>
				<?php echo h($request['Request']['end']); ?>
				&nbsp;
			</dd>
		</dl>
	</div>
	<div class="span3">
		<div class="well" style="padding: 8px 0; margin-top:8px;">
		<ul class="nav nav-list">
			<li class="nav-header"><?php echo __('Actions'); ?></li>
			<li><?php echo $this->Html->link(__('Edit %s', __('Request')), array('action' => 'edit', $request['Request']['id'])); ?> </li>
			<li><?php echo $this->Form->postLink(__('Delete %s', __('Request')), array('action' => 'delete', $request['Request']['id']), null, __('Are you sure you want to delete # %s?', $request['Request']['id'])); ?> </li>
			<li><?php echo $this->Html->link(__('List %s', __('Requests')), array('action' => 'index')); ?> </li>
			<li><?php echo $this->Html->link(__('New %s', __('Request')), array('action' => 'add')); ?> </li>
		</ul>
		</div>
	</div>
</div>
