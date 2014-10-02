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
                                      <td><?php echo h($website['Website']['id']); ?></td>
                                    </tr>
                                    <tr>
                                        <td>サイト名</td>
                                        <td><?php echo h($website['Website']['name']); ?></td>
                                    </tr>
                                    <tr>
                                        <td>URL</td>
                                        <td><?php echo h($website['Website']['url']); ?></td>
                                    </tr>
                                    <tr>
                                        <td>API Key</td>
                                        <td><?php echo h($website['Website']['api_key']); ?></td>
                                    </tr>
                                    <tr>
                                        <td>Email</td>
                                        <td><?php echo h($website['Website']['email']); ?></td>
                                    </tr>
                                    <tr>
                                        <td>説明</td>
                                        <td><?php echo h($website['Website']['descrption']); ?></td>
                                    </tr>
                                    <tr>
                                        <td>登録日</td>
                                        <td><?php echo h($website['Website']['create_date']); ?></td>
                                    </tr>
                                    <tr>
                                        <td>更新日</td>
                                        <td><?php echo h($website['Website']['modify_date']); ?></td>
                                    </tr>
                                    </tbody>
                                 </table>
                             </div>
                          </div>
                     </div>
	
</div>
