<?php //var_dump($work);?>
<div class="row-fluid">
	<div class="span9">
		<h3><?php echo __('Related %s', __('Tasks')); ?></h3>
	<?php if (!empty($work['Task'])):?>
		<table class="table">
			<tr>
				<th><?php echo __('Id'); ?></th>
				<th><?php echo __('Name'); ?></th>
				<th><?php echo __('Skill'); ?></th>
				<th><?php echo __('Personaliy'); ?></th>
				<th><?php echo __('Recommends');?></th>
			</tr>
		<?php foreach ($work['Task'] as $task): ?>
			<tr>
				<td><?php echo $task['id'];?></td>
				<td><?php echo $this->Html->link($task['name'], array('controller' => 'tasks', 'action' => 'view', $task['id'])); ?></td>
				<td><?php if(!empty($task['Skill'])): ?><ul>
					<?php foreach($task['Skill'] as $skill): ?>
					<li><?php echo $this->Html->link($skill['name'], '/skills/view/'.$skill['id']) ?></li>
					<?php endforeach;?>
					<?php endif;?></ul>
				</td>
				<td><?php if(!empty($task['Personality'])): ?><ul>
					<?php foreach($task['Personality'] as $personality): ?>
					<li><?php echo $this->Html->link($personality['name'], '/personalities/view/'.$personality['id']) ?></li>
					<?php endforeach;?>
					<?php endif;?></ul>
				</td>
				<td><?php if(!empty($task['Profile'])): ?><ul>
					<?php foreach($task['Profile'] as $profile): ?>
					<li><?php echo $this->Html->link($profile['name'], '/profiles/view/'.$profile['id']) ?></li>
					<?php endforeach;?>
					<?php endif;?></ul>
				</td>
			</tr>
		<?php endforeach; ?>
		</table>
	<?php endif; ?>

	</div>

	<div class="span3">
		<div class="well" style="padding: 8px 0; margin-top:8px;">
		<ul class="nav nav-list">
			<li class="nav-header"><?php echo __('Actions'); ?></li>
			<li><?php echo $this->Html->link(__('Edit %s', __('Work')), array('action' => 'edit', $work['Work']['id'])); ?> </li>
			<li><?php echo $this->Form->postLink(__('Delete %s', __('Work')), array('action' => 'delete', $work['Work']['id']), null, __('Are you sure you want to delete # %s?', $work['Work']['id'])); ?> </li>
		</ul>
		</div>
	</div>
</div>