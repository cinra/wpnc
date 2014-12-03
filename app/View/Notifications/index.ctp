<div class="block">
  <div class="navbar navbar-inner block-header">
    <div class="muted pull-left"><?php echo __('Notifications'); ?></div>
  </div>
  <div class="block-content collapse in">
    <table class="table table-striped">
      <thead>
        <tr>
          <th><?php echo $this->Paginator->sort('website_id','送信先サイト'); ?></th>
          <th width="35%"><?php echo $this->Paginator->sort('wp_post_title', 'タイトル'); ?></th>
          <th><?php echo $this->Paginator->sort('post_date', '投稿日'); ?></th>
          <th><?php echo $this->Paginator->sort('notification_status', '通知ステータス'); ?></th>
          <th><?php echo $this->Paginator->sort('org_website_id', '送信元サイト'); ?></th>
          <th><?php echo $this->Paginator->sort('create_date', '情報登録日'); ?></th>
          <th class="actions">操作</th>
        </tr>
      </thead>
      <?php foreach ($notifications as $notification): ?><tr>
        <td><?php echo $this->Html->link($notification['Website']['name'], array('controller' => 'websites', 'action' => 'view', $notification['Website']['id'])); ?></td>
        <td><?php echo $this->Html->link(h($notification['Notification']['wp_post_title']), array('action' => 'view', $notification['Notification']['id'])); ?>&nbsp;</td>
        <td><?php echo h($notification['Notification']['post_date']); ?>&nbsp;</td>
        <td><?php echo h($notification['Notification']['notification_status']); ?>&nbsp;</td>
        <td><?php echo h($notification['Org_Website']['name']); ?>&nbsp;</td>
        <td><?php echo h($notification['Notification']['create_date']); ?>&nbsp;</td>
        <td class="actions"><?php echo $this->Form->postLink('削除', array('action' => 'delete', $notification['Notification']['id']), null, __('本当に削除を実行しますか?', $notification['Notification']['id'])); ?></td>
      </tr><?php endforeach; ?>
    </table>
  
    <div class="paging"><?php
    
      echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
      echo "&nbsp;&nbsp;";
      echo $this->Paginator->numbers(array('separator' => ''));
      echo "&nbsp;&nbsp;";
      echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
      
    ?></div>
    
  </div>
</div>
