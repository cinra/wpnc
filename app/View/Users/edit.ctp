                          <div class="block">
                                <div class="navbar navbar-inner block-header">
									<div class="muted pull-left">
										<?php echo __('Users'); ?>
									</div>

                                 </div>

                            <div class="block-content collapse in">
	
<?php echo $this->Form->create('User', array('class'=>'form-horizontal')); ?>
	<fieldset>
		<legend>ユーザ情報編集</legend>
	<?php
		echo $this->Form->input('id', array('div' => array('class' => 'control-group'), 'between' => '<label class="control-label">ID</label><div class="controls">', 'after' => '</div>', 'label' => false));
		echo $this->Form->input('username', array('div' => array('class' => 'control-group'), 'between' => '<label class="control-label">ユーザ名</label><div class="controls">', 'after' => '</div>', 'label' => false));
	?>
	<div class="control-group required">
	    <label class="control-label" for="UserPassword">パスワード</label>
	    <div class="controls">
	        <input type="password" required="required" id="UserPassword" value="" name="data[User][password]">
	    </div>
	</div>
	<?php
		echo $this->Form->input('descrpition', array('div' => array('class' => 'control-group'), 'between' => '<label class="control-label">説明</label><div class="controls">', 'after' => '</div>', 'label' => false));
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
