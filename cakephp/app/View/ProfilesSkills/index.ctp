<div class="row-fluid">
	<div class="span9">
		<h2><?php echo __('List %s', __('Profiles Skills'));?></h2>

		<p>
			<?php echo $this->BootstrapPaginator->counter(array('format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')));?>
		</p>

		<table class="table">
			<tr>
				<th><?php echo $this->BootstrapPaginator->sort('id');?></th>
				<th><?php echo $this->BootstrapPaginator->sort('profile_id');?></th>
				<th><?php echo $this->BootstrapPaginator->sort('skill_id');?></th>
				<th><?php echo $this->BootstrapPaginator->sort('learn_type');?></th>
				<th><?php echo $this->BootstrapPaginator->sort('learn_year');?></th>
				<th><?php echo $this->BootstrapPaginator->sort('comment');?></th>
				<th class="actions"><?php echo __('Actions');?></th>
			</tr>
		<?php foreach ($profilesSkills as $profilesSkill): ?>
			<tr>
				<td><?php echo h($profilesSkill['ProfilesSkill']['id']); ?>&nbsp;</td>
				<td>
					<?php echo $this->Html->link($profilesSkill['Profile']['name'], array('controller' => 'profiles', 'action' => 'view', $profilesSkill['Profile']['id'])); ?>
				</td>
				<td>
					<?php echo $this->Html->link($profilesSkill['Skill']['name'], array('controller' => 'skills', 'action' => 'view', $profilesSkill['Skill']['id'])); ?>
				</td>
				<td><?php echo h($profilesSkill['ProfilesSkill']['learn_type']); ?>&nbsp;</td>
				<td><?php echo h($profilesSkill['ProfilesSkill']['learn_year']); ?>&nbsp;</td>
				<td><?php echo h($profilesSkill['ProfilesSkill']['comment']); ?>&nbsp;</td>
				<td class="actions">
					<?php echo $this->Html->link(__('View'), array('action' => 'view', $profilesSkill['ProfilesSkill']['id'])); ?>
					<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $profilesSkill['ProfilesSkill']['id'])); ?>
					<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $profilesSkill['ProfilesSkill']['id']), null, __('Are you sure you want to delete # %s?', $profilesSkill['ProfilesSkill']['id'])); ?>
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
			<li><?php echo $this->Html->link(__('New %s', __('Profiles Skill')), array('action' => 'add')); ?></li>
			<li><?php echo $this->Html->link(__('List %s', __('Profiles')), array('controller' => 'profiles', 'action' => 'index')); ?> </li>
			<li><?php echo $this->Html->link(__('New %s', __('Profile')), array('controller' => 'profiles', 'action' => 'add')); ?> </li>
			<li><?php echo $this->Html->link(__('List %s', __('Skills')), array('controller' => 'skills', 'action' => 'index')); ?> </li>
			<li><?php echo $this->Html->link(__('New %s', __('Skill')), array('controller' => 'skills', 'action' => 'add')); ?> </li>
		</ul>
		</div>
	</div>
</div>