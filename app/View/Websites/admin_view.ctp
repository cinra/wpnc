<div class="websites view">
<h2><?php echo __('Website'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($website['Website']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($website['Website']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Url'); ?></dt>
		<dd>
			<?php echo h($website['Website']['url']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Api Key'); ?></dt>
		<dd>
			<?php echo h($website['Website']['api_key']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Email'); ?></dt>
		<dd>
			<?php echo h($website['Website']['email']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Descrption'); ?></dt>
		<dd>
			<?php echo h($website['Website']['descrption']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Create Date'); ?></dt>
		<dd>
			<?php echo h($website['Website']['create_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modify Date'); ?></dt>
		<dd>
			<?php echo h($website['Website']['modify_date']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Website'), array('action' => 'edit', $website['Website']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Website'), array('action' => 'delete', $website['Website']['id']), null, __('Are you sure you want to delete # %s?', $website['Website']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Websites'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Website'), array('action' => 'add')); ?> </li>
	</ul>
</div>
