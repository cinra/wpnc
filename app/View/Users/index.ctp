<div class="block">
  <div class="navbar navbar-inner block-header">
    <div class="muted pull-left"><?php echo __('Users'); ?></div>
  </div>
  <div class="block-content collapse in">
    <table class="table table-striped">
      <thead>
        <tr>
          <th><?php echo $this->Paginator->sort('id'); ?></th>
          <th><?php echo $this->Paginator->sort('username', 'ユーザ名'); ?></th>
          <th><?php echo $this->Paginator->sort('descrpition', '説明'); ?></th>
          <th><?php echo $this->Paginator->sort('modify_date', '更新日'); ?></th>
          <th class="actions">操作</th>
        </tr>
      </thead>
      
      <?php foreach ($users as $user): ?><tr>
        <td><?php echo h($user['User']['id']); ?>&nbsp;</td>
        <td><?php echo h($user['User']['username']); ?>&nbsp;</td>
        <td><?php echo h($user['User']['descrpition']); ?>&nbsp;</td>
        <td><?php echo h($user['User']['modify_date']); ?>&nbsp;</td>
        <td class="actions">
          <?php echo $this->Html->link('詳細', array('action' => 'view', $user['User']['id'])); ?>
          <?php echo $this->Html->link('編集', array('action' => 'edit', $user['User']['id'])); ?>
          <?php echo $this->Form->postLink('削除', array('action' => 'delete', $user['User']['id']), null, __('本当に削除してもよろしいですか?', $user['User']['id'])); ?>
        </td>
      </tr><?php endforeach?>
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
