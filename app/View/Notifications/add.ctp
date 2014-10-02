                          <div class="block">
                                <div class="navbar navbar-inner block-header">
									<div class="muted pull-left">
										<?php echo __('Websites'); ?>
									</div>

                                 </div>

                            <div class="block-content collapse in">
	
<?php echo $this->Form->create('Notification', array('class'=>'form-horizontal')); ?>
	<fieldset>
		<legend><?php echo __('Add Notification'); ?></legend>
	<?php
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
