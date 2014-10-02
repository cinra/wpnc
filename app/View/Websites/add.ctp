                           <div class="block">
                                <div class="navbar navbar-inner block-header">
									<div class="muted pull-left">
										<?php echo __('Websites'); ?>
									</div>

                                 </div>

                            <div class="block-content collapse in">


<?php echo $this->Form->create('Website', array('class'=>'form-horizontal')); ?>
	<fieldset>
		<legend>サイト追加</legend>
	<?php
		echo $this->Form->input('name', array('div' => array('class' => 'control-group'), 'between' => '<label class="control-label">サイト名</label><div class="controls">', 'after' => '</div>', 'label' => false));
		echo $this->Form->input('url', array('div' => array('class' => 'control-group'), 'between' => '<label class="control-label">URL</label><div class="controls">', 'after' => '</div>', 'label' => false));
		echo $this->Form->input('api_key', array('div' => array('class' => 'control-group'), 'between' => '<label class="control-label">API Key</label><div class="controls">', 'after' => '&nbsp;&nbsp;<button class="apikeyrenew" type="button">更新</button></div>', 'label' => false));
		echo $this->Form->input('email', array('div' => array('class' => 'control-group'), 'between' => '<label class="control-label">Email</label><div class="controls">', 'after' => '</div>', 'label' => false));
		echo $this->Form->input('descrption', array('div' => array('class' => 'control-group'), 'between' => '<label class="control-label">説明</label><div class="controls">', 'after' => '</div>', 'label' => false));
		// echo $this->Form->input('create_date', array('div' => array('class' => 'control-group'), 'between' => '<div class="controls">', 'after' => '</div>', 'label' => false));
		// echo $this->Form->input('modify_date', array('div' => array('class' => 'control-group'), 'between' => '<div class="controls">', 'after' => '</div>', 'label' => false));
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
