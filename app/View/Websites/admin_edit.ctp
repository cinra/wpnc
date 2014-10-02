<div class="websites form">
<?php echo $this->Form->create('Website'); ?>
	<fieldset>
		<legend><?php echo __('Admin Edit Website'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name');
		echo $this->Form->input('url');
		echo $this->Form->input('api_key');
		echo $this->Form->input('email');
		echo $this->Form->input('descrption');
		echo $this->Form->input('create_date');
		echo $this->Form->input('modify_date');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Website.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Website.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Websites'), array('action' => 'index')); ?></li>
	</ul>
</div>
