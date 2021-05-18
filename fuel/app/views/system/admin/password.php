<div class="entry-form bg-light shadow">
  <?php echo Form::open('system/admin/admin/password'); ?>

  <div class="entry-form__item">
              <div class="row">
                <div class="col-md-6">
                  <label for="login_nickname" class="entry-form__ttl">パスワード</label>
                 	<?php echo Form::input('login_password','たなか',array('class'=>'form-control entry-form__txt'));?>
                </div>
              </div>
  </div>

  <div class="entry-form__item">
      <div class="row">
                <div class="col-md-6">
                  <label for="login_nickname" class="entry-form__ttl">ハッシュ化文字列</label>
                  <div class="bg-white d-block p-2 border border-gray rounded">
                    <div class="entry-form__txt">gfrapfhrpafyhepfeyfhaf@:g</div>
                  </div>
                  
               </div>
        </div>
  </div>

    <button id="send" class="btn btn-primary btn-block" type="submit">生成</button>
  <?php echo Form::close(); ?>



</div>