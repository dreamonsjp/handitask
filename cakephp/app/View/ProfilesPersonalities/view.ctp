<div class="row-fluid">
	<div class="span9">
		<h2><?php  echo __('Profiles Personality');?></h2>
		<dl>
			<dt><?php echo __('Id'); ?></dt>
			<dd>
				<?php echo h($profilesPersonality['ProfilesPersonality']['id']); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('Profile'); ?></dt>
			<dd>
				<?php echo $this->Html->link($profilesPersonality['Profile']['name'], array('controller' => 'profiles', 'action' => 'view', $profilesPersonality['Profile']['id'])); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('Evaluator Name'); ?></dt>
			<dd>
				<?php echo h($profilesPersonality['ProfilesPersonality']['evaluator_name']); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('Personality Type'); ?></dt>
			<dd>
				<?php echo h($profilesPersonality['ProfilesPersonality']['personality_type']); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('Comment'); ?></dt>
			<dd>
				<?php echo h($profilesPersonality['ProfilesPersonality']['comment']); ?>
				&nbsp;
			</dd>
		</dl>
	</div>
	<div class="span3">
		<div class="well" style="padding: 8px 0; margin-top:8px;">
		<ul class="nav nav-list">
			<li class="nav-header"><?php echo __('Actions'); ?></li>
			<li><?php echo $this->Html->link(__('Edit %s', __('Profiles Personality')), array('action' => 'edit', $profilesPersonality['ProfilesPersonality']['id'])); ?> </li>
			<li><?php echo $this->Form->postLink(__('Delete %s', __('Profiles Personality')), array('action' => 'delete', $profilesPersonality['ProfilesPersonality']['id']), null, __('Are you sure you want to delete # %s?', $profilesPersonality['ProfilesPersonality']['id'])); ?> </li>
			<li><?php echo $this->Html->link(__('List %s', __('Profiles Personalities')), array('action' => 'index')); ?> </li>
			<li><?php echo $this->Html->link(__('New %s', __('Profiles Personality')), array('action' => 'add')); ?> </li>
			<li><?php echo $this->Html->link(__('List %s', __('Profiles')), array('controller' => 'profiles', 'action' => 'index')); ?> </li>
			<li><?php echo $this->Html->link(__('New %s', __('Profile')), array('controller' => 'profiles', 'action' => 'add')); ?> </li>
		</ul>
		</div>
	</div>
</div>

