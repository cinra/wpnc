                          <div class="block">
                                <div class="navbar navbar-inner block-header">
									<div class="muted pull-left">
										<?php echo __('Notifications'); ?>
									</div>

                                 </div>

                            <div class="block-content collapse in">
	
<?php echo $this->Form->create('Notification', array('class'=>'form-horizontal')); ?>
	<fieldset>
		<legend><?php echo __('Edit Notification'); ?></legend>
	<?php
		echo $this->Form->input('id', array('div' => array('class' => 'control-group'), 'between' => '<div class="controls">', 'after' => '</div>', 'label' => array('class="control-label"')));
		echo $this->Form->input('website_id', array('div' => array('class' => 'control-group'), 'between' => '<div class="controls">', 'after' => '</div>', 'label' => array('class="control-label"')));
		echo $this->Form->input('wp_postid', array('div' => array('class' => 'control-group'), 'between' => '<div class="controls">', 'after' => '</div>', 'label' => array('class="control-label"')));
		echo $this->Form->input('wp_post_title', array('div' => array('class' => 'control-group'), 'between' => '<div class="controls">', 'after' => '</div>', 'label' => array('class="control-label"')));
		echo $this->Form->input('wp_post_content', array('div' => array('class' => 'control-group'), 'between' => '<div class="controls">', 'after' => '</div>', 'label' => array('class="control-label"')));
		echo $this->Form->input('wp_tags', array('div' => array('class' => 'control-group'), 'between' => '<div class="controls">', 'after' => '</div>', 'label' => array('class="control-label"')));
		echo $this->Form->input('wp_eyechatch_path_org', array('div' => array('class' => 'control-group'), 'between' => '<div class="controls">', 'after' => '</div>', 'label' => array('class="control-label"')));
		echo $this->Form->input('wp_eyechatch_path', array('div' => array('class' => 'control-group'), 'between' => '<div class="controls">', 'after' => '</div>', 'label' => array('class="control-label"')));
		echo $this->Form->input('post_date', array('div' => array('class' => 'control-group'), 'between' => '<div class="controls">', 'after' => '</div>', 'label' => array('class="control-label"')));
		echo $this->Form->input('post_status', array('div' => array('class' => 'control-group'), 'between' => '<div class="controls">', 'after' => '</div>', 'label' => array('class="control-label"')));
		echo $this->Form->input('notification_status', array('div' => array('class' => 'control-group'), 'between' => '<div class="controls">', 'after' => '</div>', 'label' => array('class="control-label"')));
		echo $this->Form->input('description', array('div' => array('class' => 'control-group'), 'between' => '<div class="controls">', 'after' => '</div>', 'label' => array('class="control-label"')));
		echo $this->Form->input('create_date', array('div' => array('class' => 'control-group'), 'between' => '<div class="controls">', 'after' => '</div>', 'label' => array('class="control-label"')));
		echo $this->Form->input('modify_date', array('div' => array('class' => 'control-group'), 'between' => '<div class="controls">', 'after' => '</div>', 'label' => array('class="control-label"')));
	?>
	</fieldset>
<?php
		echo $this->Form->submit(
			'Submit', 
			array('class' => 'btn btn-primary', 'title' => 'Submit'));
		echo $this->Form->end();
?>
 
                                </div>
                            </div>
	
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Notification.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Notification.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Notifications'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Websites'), array('controller' => 'websites', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Website'), array('controller' => 'websites', 'action' => 'add')); ?> </li>
	</ul>
</div>
