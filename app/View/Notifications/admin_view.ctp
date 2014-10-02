<div class="notifications view">
<h2><?php echo __('Notification'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($notification['Notification']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Website'); ?></dt>
		<dd>
			<?php echo $this->Html->link($notification['Website']['name'], array('controller' => 'websites', 'action' => 'view', $notification['Website']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Wp Postid'); ?></dt>
		<dd>
			<?php echo h($notification['Notification']['wp_postid']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Wp Post Title'); ?></dt>
		<dd>
			<?php echo h($notification['Notification']['wp_post_title']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Wp Post Content'); ?></dt>
		<dd>
			<?php echo h($notification['Notification']['wp_post_content']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Wp Tags'); ?></dt>
		<dd>
			<?php echo h($notification['Notification']['wp_tags']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Wp Eyechatch Path Org'); ?></dt>
		<dd>
			<?php echo h($notification['Notification']['wp_eyechatch_path_org']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Wp Eyechatch Path'); ?></dt>
		<dd>
			<?php echo h($notification['Notification']['wp_eyechatch_path']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Post Date'); ?></dt>
		<dd>
			<?php echo h($notification['Notification']['post_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Post Status'); ?></dt>
		<dd>
			<?php echo h($notification['Notification']['post_status']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Notification Status'); ?></dt>
		<dd>
			<?php echo h($notification['Notification']['notification_status']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Description'); ?></dt>
		<dd>
			<?php echo h($notification['Notification']['description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Create Date'); ?></dt>
		<dd>
			<?php echo h($notification['Notification']['create_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modify Date'); ?></dt>
		<dd>
			<?php echo h($notification['Notification']['modify_date']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Notification'), array('action' => 'edit', $notification['Notification']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Notification'), array('action' => 'delete', $notification['Notification']['id']), null, __('Are you sure you want to delete # %s?', $notification['Notification']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Notifications'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Notification'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Websites'), array('controller' => 'websites', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Website'), array('controller' => 'websites', 'action' => 'add')); ?> </li>
	</ul>
</div>
