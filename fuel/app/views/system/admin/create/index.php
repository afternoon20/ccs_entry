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
                  <label for="show">閲覧</label>
                  <?php
                    echo Form::hidden('show', 0);
                    echo Form::checkbox('show','1',array('id' => 'show'));
                  ?>
                </div>
                <div class="col-4 col-sm-3">
                  <label for="edit">編集</label>
                  <?php
                    echo Form::hidden('edit', 0);
                    echo Form::checkbox('edit','1',array('id' => 'edit'));
                  ?>
                </div>  
                <div class="col-4 col-sm-3">
                  <label for="delete">削除</label>
                  <?php
                    echo Form::hidden('delete', 0);
                    echo Form::checkbox('delete','1',array('id' => 'delete'));
                  ?>
                </div> 
              </div>
            </div>
            <!-- ログイン名 -->
            <div class="entry-form__item">
              <div class="row">
                <div class="col-md-6">
                  <label for="login_nickname" class="entry-form__ttl">ログイン名</label>
                 	<?php echo Form::input('login_nickname','たなか',array('class'=>'form-control entry-form__txt'));?>
                </div>
              </div>
            </div>
            <!-- ログインIDとパスワード -->
            <div class="entry-form__item">
              <div class="row">
                <div class="col-md-6">
                  <label for="login_id" class="entry-form__ttl">ログインID</label>
                 	<?php echo Form::input('login_id','たなか',array('class'=>'form-control entry-form__txt'));?>
                </div>
                <div class="col-md-6">
                  <label for="login_password" class="entry-form__ttl">パスワード</label>
                 	<?php echo Form::input('login_password', 'password',array('class'=>'form-control entry-form__txt')); ?>
                </div>
              </div>
            </div>
            <!-- ステータス -->
            <div class="entry-form__item">
              <div class="row">
                <div class="col-md-3">
                  <label for="login_id" class="entry-form__ttl">ステータス</label>
                    <?php
                      echo Form::select(
                        'year', 
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
