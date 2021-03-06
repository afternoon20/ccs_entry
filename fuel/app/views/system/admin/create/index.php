          <div class="text-danger">
          <?php if (isset($html_error)): ?>
            <?php echo $html_error ?>
          <?php endif; ?>
          </div>
          
          <?php echo Form::open('system/admin/admin/create'); ?>
          <div class="entry-form bg-light shadow">
            <!-- 権限 -->
            <div class="entry-form__item">
              <h3 class="entry-form__ttl">権限</h3>
              <div class="row">
                <div class="col-4 col-sm-3">
                  <label for="admin_permission_show">閲覧</label>
                  <?php
                    echo Form::hidden('admin_permission_show', 0);
                    echo Form::hidden('admin_permission_show', 0);
                    if(Input::post('admin_permission_show')==1){
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
                    if(Input::post('admin_permission_edit')==1){
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
                    if(Input::post('admin_permission_delete')==1){
                      echo Form::checkbox('admin_permission_delete',1,true,array('id' => 'admin_permission_delete'));
                    }else{
                      echo Form::checkbox('admin_permission_delete',1,array('id' => 'admin_permission_delete'));
                    }
                  ?>
                </div> 
              </div>
            </div>
            <!-- ログイン名 -->
            <div class="entry-form__item">
              <div class="row">
                <div class="col-md-6">
                  <label for="login_nickname" class="entry-form__ttl">ログイン名</label>
                 	<?php echo Form::input('login_nickname',Input::post('login_nickname'),array('class'=>'form-control entry-form__txt'));?>
                </div>
              </div>
            </div>
            <!-- ログインIDとパスワード -->
            <div class="entry-form__item">
              <div class="row">
                <div class="col-md-6">
                  <label for="login_id" class="entry-form__ttl">ログインID</label>
                 	<?php echo Form::input('login_id',Input::post('login_id'),array('class'=>'form-control entry-form__txt'));?>
                </div>
                <div class="col-md-6">
                  <label for="login_password" class="entry-form__ttl">パスワード</label>
                 	<?php echo Form::input('login_password', Input::post('login_password'),array('class'=>'form-control entry-form__txt')); ?>
                </div>
              </div>
            </div>
            <!-- メールアドレス -->
            <div class="entry-form__item">
              <div class="row">
                <div class="col-md-6">
                  <label for="email" class="entry-form__ttl">メールアドレス</label>
                 	<?php echo Form::input('email',Input::post('email'),array('class'=>'form-control entry-form__txt'));?>
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
                        Input::post('login_status'),
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
                <?php echo Form::csrf(); ?>
                <button id="send" class="mt-5 btn btn-primary btn-block" type="submit">確認画面へ</button>
              </div>
            </div>
            </div>
          </div>
          <?php echo Form::close(); ?>
