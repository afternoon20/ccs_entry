<?php if(Auth::check()):?>
   <div class="mt-5">
    <?php echo Html::anchor('/system/admin/entry', 'エントリー', array('class' => 'btn btn-primary mr-md-3'),); ?>
    <?php echo Html::anchor('/system/admin/admin', '管理者', array('class' => 'btn btn-success mr-md-3'),); ?>
    <?php echo Html::anchor('/system/admin/password', 'ハッシュ化パスワード', array('class' => 'btn btn-info'),); ?>
  </div> 
<?php else:?>
  <div class="entry-form bg-light shadow">
	  <!-- 名前 -->
    <div class="entry-form__item">
		<?php echo Form::open('/system/admin/login'); ?>
      <div class="row">
        <div class="col-md-6">
          <label for="name" class="entry-form__ttl">ユーザーネーム</label>
          <?php echo Form::input('username', Input::post('username'),array('class'=>'form-control')); ?>
          <div class="invalid-feedback">必須項目です。</div>
        </div>
        <div class="col-md-6">
          <label for="kana" class="entry-form__ttl">パスワード</label>
          <?php echo Form::input('password', Input::post('password'),array('class'=>'form-control')); ?>
          <div class="invalid-feedback">必須項目です。</div>
        </div>
				<button id="send" class="mt-5 btn btn-primary btn-block" type="submit">確認画面へ</button>
      </div>
		<?php echo Form::close(); ?>
    </div>  
	</div>
<?php endif?>
