                          <div class="block">
                                <div class="navbar navbar-inner block-header">
									<div class="muted pull-left">
										<?php echo __('Users'); ?>
									</div>

                                 </div>

                            <div class="block-content collapse in">
<h3>ログイン画面</h3>
<?php echo $this->Form->create('User', array('url' => array('controller' => 'users', 'action' => 'login'))); ?>
<table>
  <tr>
     <th>ユーザーID</th>
     <td><?php echo $this->Form->input('User.username', array('label' => '')); ?></td>
  </tr>
  <tr>
      <th>パスワード</th>
      <td><?php echo $this->Form->input('User.password', array('label' => '')); ?></td>
  </tr>
  <tr>
      <td colspan="2" class="center"><?php echo $this->Form->end('Login'); ?></td>
  </tr>
</table>
