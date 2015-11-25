<div class="row-fluid">
	<div class="span9">
		<h2><?php echo __('List %s', __('Requests'));?></h2>

		<p>
			<?php echo $this->BootstrapPaginator->counter(array('format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')));?>
		</p>

		<table class="table">
			<tr>
				<th><?php echo $this->BootstrapPaginator->sort('name');?></th>
				<th><?php echo $this->BootstrapPaginator->sort('start');?></th>
				<th><?php echo $this->BootstrapPaginator->sort('end');?></th>
				<th><?php echo __('Works');?></th>
			</tr>
		<?php foreach ($requests as $request): ?>
			<tr>
				<td><?php echo $this->Html->link($request['Request']['name'], array('action' => 'view', $request['Request']['id'])); ?>&nbsp;</td>
				<td><?php echo h($request['Request']['start']); ?>&nbsp;</td>
				<td><?php echo h($request['Request']['end']); ?>&nbsp;</td>
				<td><?php if(!empty($works[$request['Request']['id']])): ?><ul> 
				<?php foreach($works[$request['Request']['id']] as $work): ?>
				<li><?php echo $this->Html->link($work['Work']['name'], '/works/view/'.$work['Work']['id']) ?></li>
				<?php endforeach;?>
				<?php endif;?></ul></td>
			</tr>
		<?php endforeach; ?>
		</table>

		<?php echo $this->BootstrapPaginator->pagination(); ?>
	</div>
	<div class="span3">
		<div class="well" style="padding: 8px 0; margin-top:8px;">
		<ul class="nav nav-list">
			<li class="nav-header"><?php echo __('Actions'); ?></li>
			<li><?php echo $this->Html->link(__('New %s', __('Request')), array('action' => 'add')); ?></li>
		</ul>
		</div>
	</div>
</div>