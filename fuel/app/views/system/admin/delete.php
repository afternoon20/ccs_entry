					<p class="text-danger">管理者を削除してよろしければ、削除ボタンを押して下さい。</p>
          <div class="entry-form bg-light shadow">
            <!-- 権限 -->
            <div class="entry-form__item">
              <h3 class="entry-form__ttl">権限</h3>
              <div class="row">
                <div class="col-md-4">
                  <p class="entry-form__txt">
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
                  </p> 
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
                  <p class="entry-form__txt"><?php echo $user['username'] ?></p>
                </div>
              </div>
            </div>
            <!-- パスワード -->
            <div class="entry-form__item">
              <h3 class="entry-form__ttl">パスワード</h3>
              <div class="row">
                <div class="col-md-4">
                  <p class="entry-form__txt">*********************</p>
                </div>
              </div>
            </div>
            <!-- メールアドレス -->
            <div class="entry-form__item">
              <h3 class="entry-form__ttl">メールアドレス</h3>
              <div class="row">
                <div class="col-md-4">
                  <p class="entry-form__txt"><?php echo $user['email'] ?></p>
                </div>
              </div>
            </div>
            <!-- ステータス -->
            <div class="entry-form__item">
              <h3 class="entry-form__ttl">ログインステータス</h3>
              <div class="row">
                <div class="col-md-4">
                  <p class="entry-form__txt"><?php echo STATUS[$user['login_status']] ?></p>
                </div>
              </div>
            </div>
            <div class="entry-form__item">
              <div class="row">
                <div class="col-6">
								  <?php echo Html::anchor("system/admin/admin", '戻る',array('class' => 'btn btn-secondary btn-block text-center'));?>
                </div>
                <div class="col-6">
								  <?php echo Form::open('system/admin/admin/delete/completed'); ?>
                    <?php echo Form::csrf(); ?>
										<?php echo Form::hidden('id',$user['id']);?>
                    <button id="send" class="btn btn-danger btn-block" type="submit">削除</button>
									<?php echo Form::close(); ?>
                </div>
              </div>
            </div>
            </div>
          </div>
          <?php echo Form::close(); ?>
