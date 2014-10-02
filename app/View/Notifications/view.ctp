                          <div class="block">
                                <div class="navbar navbar-inner block-header">
									<div class="muted pull-left">
										<?php echo __('Websites'); ?>
									</div>

                                 </div>

                            <div class="block-content collapse in">
                                <table class="table table-striped">
<!--
						              <thead>
						                <tr>
						                  <th>#</th>
						                  <th>First Name</th>
						                </tr>
						              </thead>
-->
						              <tbody>
						                <tr>
						                  <td width="20%">ID</td>
						                  <td><?php echo h($notification['Notification']['id']); ?></td>
						                </tr>
						                <tr>
						                  <td>ウェブサイト</td>
						                  <td><?php echo $this->Html->link($notification['Website']['name'], array('controller' => 'websites', 'action' => 'view', $notification['Website']['id'])); ?></td>
						                </tr>
						                <tr>
						                  <td>Wordpress 投稿ID</td>
						                  <td><?php echo h($notification['Notification']['wp_postid']); ?></td>
						                </tr>
						                <tr>
						                  <td>タイトル</td>
						                  <td><?php echo h($notification['Notification']['wp_post_title']); ?></td>
						                </tr>
						                <tr>
						                  <td>内容</td>
						                  <td><?php echo h($notification['Notification']['wp_post_content']); ?></td>
						                </tr>
						                <tr>
						                  <td>タグ</td>
						                  <td><?php echo h($notification['Notification']['wp_tags']); ?></td>
						                </tr>
						                <tr>
						                  <td>アイキャッチ画像</td>
						                  <td><?php
						                            if (isset($notification['Notification']['wp_eyechatch_path_org'])) {
						                                echo '<img src="'.$notification['Notification']['wp_eyechatch_path_org'].'" width="250px">';
						                            }
						                      ?></td>
						                </tr>
						                <tr>
						                  <td>投稿日</td>
						                  <td><?php echo h($notification['Notification']['post_date']); ?></td>
						                </tr>
						                <tr>
						                  <td>投稿ステータス</td>
						                  <td><?php echo h($notification['Notification']['post_status']); ?></td>
						                </tr>
						                <tr>
						                  <td>通知ステータス</td>
						                  <td><?php echo h($notification['Notification']['notification_status']); ?></td>
						                </tr>
						                <tr>
						                  <td>情報登録日</td>
						                  <td><?php echo h($notification['Notification']['create_date']); ?></td>
						                </tr>
						                <tr>
						                  <td>情報更新日</td>
						                  <td><?php echo h($notification['Notification']['modify_date']); ?></td>
						                </tr>
						              </tbody>
						            </table>

                                </div>
                            </div>
	
</div>
