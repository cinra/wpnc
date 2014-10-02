<div class="notifications index">
	<h2><?php echo __('Notifications'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('website_id'); ?></th>
			<th><?php echo $this->Paginator->sort('wp_postid'); ?></th>
			<th><?php echo $this->Paginator->sort('wp_post_title'); ?></th>
			<th><?php echo $this->Paginator->sort('wp_post_content'); ?></th>
			<th><?php echo $this->Paginator->sort('wp_tags'); ?></th>
			<th><?php echo $this->Paginator->sort('wp_eyechatch_path_org'); ?></th>
			<th><?php echo $this->Paginator->sort('wp_eyechatch_path'); ?></th>
			<th><?php echo $this->Paginator->sort('post_date'); ?></th>
			<th><?php echo $this->Paginator->sort('post_status'); ?></th>
			<th><?php echo $this->Paginator->sort('notification_status'); ?></th>
			<th><?php echo $this->Paginator->sort('description'); ?></th>
			<th><?php echo $this->Paginator->sort('create_date'); ?></th>
			<th><?php echo $this->Paginator->sort('modify_date'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($notifications as $notification): ?>
	<tr>
		<td><?php echo h($notification['Notification']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($notification['Website']['name'], array('controller' => 'websites', 'action' => 'view', $notification['Website']['id'])); ?>
		</td>
		<td><?php echo h($notification['Notification']['wp_postid']); ?>&nbsp;</td>
		<td><?php echo h($notification['Notification']['wp_post_title']); ?>&nbsp;</td>
		<td><?php echo h($notification['Notification']['wp_post_content']); ?>&nbsp;</td>
		<td><?php echo h($notification['Notification']['wp_tags']); ?>&nbsp;</td>
		<td><?php echo h($notification['Notification']['wp_eyechatch_path_org']); ?>&nbsp;</td>
		<td><?php echo h($notification['Notification']['wp_eyechatch_path']); ?>&nbsp;</td>
		<td><?php echo h($notification['Notification']['post_date']); ?>&nbsp;</td>
		<td><?php echo h($notification['Notification']['post_status']); ?>&nbsp;</td>
		<td><?php echo h($notification['Notification']['notification_status']); ?>&nbsp;</td>
		<td><?php echo h($notification['Notification']['description']); ?>&nbsp;</td>
		<td><?php echo h($notification['Notification']['create_date']); ?>&nbsp;</td>
		<td><?php echo h($notification['Notification']['modify_date']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $notification['Notification']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $notification['Notification']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $notification['Notification']['id']), null, __('Are you sure you want to delete # %s?', $notification['Notification']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Notification'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Websites'), array('controller' => 'websites', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Website'), array('controller' => 'websites', 'action' => 'add')); ?> </li>
	</ul>
</div>
