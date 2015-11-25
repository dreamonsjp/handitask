<div class="row-fluid">
	<div class="span9">
		<h2><?php  echo __('Personality');?></h2>
		<dl>
			<dt><?php echo __('Id'); ?></dt>
			<dd>
				<?php echo h($personality['Personality']['id']); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('Name'); ?></dt>
			<dd>
				<?php echo h($personality['Personality']['name']); ?>
				&nbsp;
			</dd>
		</dl>
	</div>
	<div class="span3">
		<div class="well" style="padding: 8px 0; margin-top:8px;">
		<ul class="nav nav-list">
			<li class="nav-header"><?php echo __('Actions'); ?></li>
			<li><?php echo $this->Html->link(__('Edit %s', __('Personality')), array('action' => 'edit', $personality['Personality']['id'])); ?> </li>
			<li><?php echo $this->Form->postLink(__('Delete %s', __('Personality')), array('action' => 'delete', $personality['Personality']['id']), null, __('Are you sure you want to delete # %s?', $personality['Personality']['id'])); ?> </li>
			<li><?php echo $this->Html->link(__('List %s', __('Personalities')), array('action' => 'index')); ?> </li>
			<li><?php echo $this->Html->link(__('New %s', __('Personality')), array('action' => 'add')); ?> </li>
		</ul>
		</div>
	</div>
</div>

