                          <div class="block">
                                <div class="navbar navbar-inner block-header">
									<div class="muted pull-left">
										<?php echo __('Users'); ?>
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
                                      <td><?php echo h($user['User']['id']); ?></td>
                                    </tr>
                                    <tr>
                                        <td>ユーザ名</td>
                                        <td><?php echo h($user['User']['username']); ?></td>
                                    </tr>
                                    <tr>
                                        <td>説明</td>
                                        <td><?php echo __('Descrpition'); ?></td>
                                    </tr>
                                   </table>
                                </div>
                            </div>
	
</div>
