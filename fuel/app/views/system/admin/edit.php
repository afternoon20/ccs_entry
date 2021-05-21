          <div class="text-danger">
          <?php if (isset($html_error)): ?>
            <?php echo $html_error ?>
          <?php endif; ?>
          </div>
          
          <?php echo Form::open('system/admin/admin/edit'); ?>
          <div class="entry-form bg-light shadow">
            <!-- 権限 -->
            <div class="entry-form__item">
              <h3 class="entry-form__ttl">権限</h3>
              <div class="row">
                <div class="col-4 col-sm-3">
                  <label for="admin_permission_show">閲覧</label>
                  <?php
                    echo Form::hidden('admin_permission_show', 0);
                    if($user['admin_permission_show']==1){
                      echo Form::checkbox('admin_permission_show',1,true,array('id' => 'admin_permission_show'));
                    }else{
                      echo Form::checkbox('admin_permission_show',1,array('id' => 'admin_permission_show'));
                    }
                  ?>
                </div>
                <div class="col-4 col-sm-3">
                  <label for="admin_permission_edit">編集</label>
                  <?php
                    echo Form::hidden('admin_permission_edit', 0);
                    if($user['admin_permission_edit']==1){
                      echo Form::checkbox('admin_permission_edit',1,true,array('id' => 'admin_permission_edit'));
                    }else{
                      echo Form::checkbox('admin_permission_edit',1,array('id' => 'admin_permission_edit'));
                    }
                  ?>
                </div>  
                <div class="col-4 col-sm-3">
                  <label for="admin_permission_delete">削除</label>
                  <?php
                    echo Form::hidden('admin_permission_delete', 0);
                    if($user['admin_permission_delete']==1){
                      echo Form::checkbox('admin_permission_delete',1,true,array('id' => 'admin_permission_delete'));
                    }else{
                      echo Form::checkbox('admin_permission_delete',1,array('id' => 'admin_permission_delete'));
                    }
                  ?>
                </div> 
              </div>
            </div>
            <!-- ログイン名とログイン名 -->
            <div class="entry-form__item">
              <div class="row">
                <div class="col-md-6">
                  <label for="login_nickname" class="entry-form__ttl">ログイン名</label>
                 	<?php echo Form::input('login_nickname',$user['login_nickname'],array('class'=>'form-control entry-form__txt'));?>
                </div>
                <div class="col-md-6">
                  <label for="username" class="entry-form__ttl">ログインID</label>
                 	<?php echo Form::input('username',$user['username'],array('class'=>'form-control entry-form__txt'));?>
                </div>
              </div>
            </div>
            <!-- パスワード -->
            <div class="entry-form__item">
              <div class="row">
                <div class="col-md-6">
                  <label for="old_login_password" class="entry-form__ttl">現在のパスワード</label>
                 	<?php echo Form::password('old_login_password', '',array('placeholder'=>'パスワードを変更する場合は入力して下さい', 'class'=>'form-control entry-form__txt')); ?>
                </div>
                <div class="col-md-6">
                  <label for="login_password" class="entry-form__ttl">新しいパスワード</label>
                 	<?php echo Form::password('login_password', '',array('placeholder'=>'パスワードを変更する場合は入力して下さい', 'class'=>'form-control entry-form__txt')); ?>
                </div>
              </div>
            </div>
            <!-- ステータス -->
            <div class="entry-form__item">
              <div class="row">
                <div class="col-md-3">
                  <label for="login_status" class="entry-form__ttl">ステータス</label>
                    <?php
                      echo Form::select(
                        'login_status', 
                        $user['login_status'],
                        array(
                          '0' => '無効',
                          '1' => '有効',
                        ),
                        array(
                          'id' => 'login_status',
                          'class'=>'form-control login_status',
                        ),
                      );
                    ?>
                </div>
              </div>
            </div>
            <div class="entry-form__item">
              <div class="row">
                <div class="col-6">
                  <?php echo Html::anchor('/system/admin/admin', '戻る', array('class' => 'btn btn-secondary btn-block'),); ?>
                </div>
                <div class="col-6">
					        
                  <?php echo Form::hidden('id',$user['id']);?>
                  <?php echo Form::csrf(); ?>
                  <button id="send" class="btn btn-primary btn-block" type="submit">保存</button>
                </div>
              </div>
            </div>
          </div>
          <?php echo Form::close(); ?>
