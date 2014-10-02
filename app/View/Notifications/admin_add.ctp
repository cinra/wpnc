<div class="notifications form">
<?php echo $this->Form->create('Notification'); ?>
	<fieldset>
		<legend><?php echo __('Admin Add Notification'); ?></legend>
	<?php
		echo $this->Form->input('website_id');
		echo $this->Form->input('wp_postid');
		echo $this->Form->input('wp_post_title');
		echo $this->Form->input('wp_post_content');
		echo $this->Form->input('wp_tags');
		echo $this->Form->input('wp_eyechatch_path_org');
		echo $this->Form->input('wp_eyechatch_path');
		echo $this->Form->input('post_date');
		echo $this->Form->input('post_status');
		echo $this->Form->input('notification_status');
		echo $this->Form->input('description');
		echo $this->Form->input('create_date');
		echo $this->Form->input('modify_date');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Notifications'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Websites'), array('controller' => 'websites', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Website'), array('controller' => 'websites', 'action' => 'add')); ?> </li>
	</ul>
</div>
