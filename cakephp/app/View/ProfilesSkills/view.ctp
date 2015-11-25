<div class="row-fluid">
	<div class="span9">
		<h2><?php  echo __('Profiles Skill');?></h2>
		<dl>
			<dt><?php echo __('Id'); ?></dt>
			<dd>
				<?php echo h($profilesSkill['ProfilesSkill']['id']); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('Profile'); ?></dt>
			<dd>
				<?php echo $this->Html->link($profilesSkill['Profile']['name'], array('controller' => 'profiles', 'action' => 'view', $profilesSkill['Profile']['id'])); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('Skill'); ?></dt>
			<dd>
				<?php echo $this->Html->link($profilesSkill['Skill']['name'], array('controller' => 'skills', 'action' => 'view', $profilesSkill['Skill']['id'])); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('Learn Type'); ?></dt>
			<dd>
				<?php echo h($profilesSkill['ProfilesSkill']['learn_type']); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('Learn Year'); ?></dt>
			<dd>
				<?php echo h($profilesSkill['ProfilesSkill']['learn_year']); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('Comment'); ?></dt>
			<dd>
				<?php echo h($profilesSkill['ProfilesSkill']['comment']); ?>
				&nbsp;
			</dd>
		</dl>
	</div>
	<div class="span3">
		<div class="well" style="padding: 8px 0; margin-top:8px;">
		<ul class="nav nav-list">
			<li class="nav-header"><?php echo __('Actions'); ?></li>
			<li><?php echo $this->Html->link(__('Edit %s', __('Profiles Skill')), array('action' => 'edit', $profilesSkill['ProfilesSkill']['id'])); ?> </li>
			<li><?php echo $this->Form->postLink(__('Delete %s', __('Profiles Skill')), array('action' => 'delete', $profilesSkill['ProfilesSkill']['id']), null, __('Are you sure you want to delete # %s?', $profilesSkill['ProfilesSkill']['id'])); ?> </li>
			<li><?php echo $this->Html->link(__('List %s', __('Profiles Skills')), array('action' => 'index')); ?> </li>
			<li><?php echo $this->Html->link(__('New %s', __('Profiles Skill')), array('action' => 'add')); ?> </li>
			<li><?php echo $this->Html->link(__('List %s', __('Profiles')), array('controller' => 'profiles', 'action' => 'index')); ?> </li>
			<li><?php echo $this->Html->link(__('New %s', __('Profile')), array('controller' => 'profiles', 'action' => 'add')); ?> </li>
			<li><?php echo $this->Html->link(__('List %s', __('Skills')), array('controller' => 'skills', 'action' => 'index')); ?> </li>
			<li><?php echo $this->Html->link(__('New %s', __('Skill')), array('controller' => 'skills', 'action' => 'add')); ?> </li>
		</ul>
		</div>
	</div>
</div>

