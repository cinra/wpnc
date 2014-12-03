<div class="block">
  <div class="navbar navbar-inner block-header">
		<div class="muted pull-left"><?php echo __('Websites'); ?></div>
  </div>

  <div class="block-content collapse in">
    <table class="table table-striped">
      <thead>
      	<tr>
      		<th><?php echo $this->Paginator->sort('name', 'サイト名'); ?></th>
      		<th><?php echo $this->Paginator->sort('url', 'URL'); ?></th>
      		<th><?php echo $this->Paginator->sort('api_key','API Key'); ?></th>
      		<th><?php echo $this->Paginator->sort('email','Email'); ?></th>
      		<th><?php echo $this->Paginator->sort('descrption', '説明'); ?></th>
      		<th class="actions">操作</th>
      	</tr>
      </thead>

      <tbody>
      	<?php foreach ($websites as $website): ?><tr>
      		<td><?php echo $this->Html->link(h($website['Website']['name']), array('action' => 'view', $website['Website']['id'])); ?>&nbsp;</td>
      		<td><?php echo $this->Html->link(h($website['Website']['url']), h($website['Website']['url']), array('target' => '_blank')); ?>&nbsp;</td>
      		<td><?php echo h($website['Website']['api_key']); ?>&nbsp;</td>
      		<td><?php echo h($website['Website']['email']); ?>&nbsp;</td>
      		<td><?php echo h($website['Website']['descrption']); ?>&nbsp;</td>
      		<td class="actions">
      			<?php echo $this->Html->link('編集', array('action' => 'edit', $website['Website']['id'])); ?>
      			<?php echo $this->Form->postLink('削除', array('action' => 'delete', $website['Website']['id']), null, __('本当に削除を実行しますか?', $website['Website']['id'])); ?>
      		</td>
      	</tr><?php endforeach; ?>
      </tbody>
  	</table>
	
  	<div class="paging">
  	<?php
		
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo "&nbsp;&nbsp;";
		echo $this->Paginator->numbers(array('separator' => ''));
		echo "&nbsp;&nbsp;";
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
		
  	?>
    </div>
	</div>
</div>
