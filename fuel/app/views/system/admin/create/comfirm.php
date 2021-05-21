          <div class="entry-form bg-light shadow">
            <!-- 権限 -->
            <div class="entry-form__item">
              <h3 class="entry-form__ttl">権限</h3>
              <div class="row">
                <div class="col-4 col-sm-3">
                <?php
                    if($user['admin_permission_show']==1){
                      echo '閲覧 ';
                    }
                    if($user['admin_permission_edit']==1){
                      echo '編集 ';
                    }
                    if ($user['admin_permission_delete']==1) {
                      echo '削除 ';
                    }
                  ?>
                </div> 
              </div>
            </div>
            <!-- ログイン名 -->
            <div class="entry-form__item">
              <h3 class="entry-form__ttl">ログイン名</h3>
              <div class="row">
                <div class="col-md-4">
                  <p class="entry-form__txt"><?php echo $user['login_nickname'] ?></p>
                </div>
              </div>
            </div>
            <!-- ログインID -->
            <div class="entry-form__item">
              <h3 class="entry-form__ttl">ログインID</h3>
              <div class="row">
                <div class="col-md-4">
                  <p class="entry-form__txt"><?php echo $user['login_id'] ?></p>
                </div>
              </div>
            </div>
            <!-- パスワード -->
            <div class="entry-form__item">
              <h3 class="entry-form__ttl">パスワード</h3>
              <div class="row">
                <div class="col-md-4">
                  <p class="entry-form__txt"><?php echo $user['login_password'] ?></p>
                </div>
              </div>
            </div>
            <!-- メールアドレス -->
            <div class="entry-form__item">
              <h3 class="entry-form__ttl">ログイン名</h3>
              <div class="row">
                <div class="col-md-4">
                  <p class="entry-form__txt"><?php echo $user['email'] ?></p>
                </div>
              </div>
            </div>
            <!-- ステータス -->
            <div class="entry-form__item">
              <h3 class="entry-form__ttl">ログイン名</h3>
              <div class="row">
                <div class="col-md-4">
                  <p class="entry-form__txt"><?php echo STATUS[$user['login_status']] ?></p>
                </div>
              </div>
            </div>
            <div class="entry-form__item">
              <div class="row">
                <div class="col-6">
								  <?php echo Form::open('system/admin/admin/create'); ?>
									  <?php echo Form::hidden('admin_permission_show',$user['admin_permission_show']);?>
									  <?php echo Form::hidden('admin_permission_edit',$user['admin_permission_edit']);?>
									  <?php echo Form::hidden('admin_permission_delete',$user['admin_permission_delete']);?>
									  <?php echo Form::hidden('login_nickname',$user['login_nickname']);?>
									  <?php echo Form::hidden('login_id',$user['login_id']);?>
									  <?php echo Form::hidden('login_password',$user['login_password']);?>
									  <?php echo Form::hidden('email',$user['email']);?>
									  <?php echo Form::hidden('login_status',$user['login_status']);?>
                    <button id="back" class="mt-5 btn btn-secondary btn-block" type="submit">戻る</button>
									<?php echo Form::close(); ?>
                </div>
                <div class="col-6">
								  <?php echo Form::open('system/admin/admin/create/completed'); ?>
                    <?php echo Form::csrf(); ?>
									  <?php echo Form::hidden('admin_permission_show',$user['admin_permission_show']);?>
									  <?php echo Form::hidden('admin_permission_edit',$user['admin_permission_edit']);?>
									  <?php echo Form::hidden('admin_permission_delete',$user['admin_permission_delete']);?>
									  <?php echo Form::hidden('login_nickname',$user['login_nickname']);?>
									  <?php echo Form::hidden('login_id',$user['login_id']);?>
									  <?php echo Form::hidden('login_password',$user['login_password']);?>
									  <?php echo Form::hidden('email',$user['email']);?>
									  <?php echo Form::hidden('login_status',$user['login_status']);?>
                    <button id="send" class="mt-5 btn btn-primary btn-block" type="submit">投稿</button>
									<?php echo Form::close(); ?>
                </div>
              </div>
            </div>
            </div>
          </div>
          <?php echo Form::close(); ?>
