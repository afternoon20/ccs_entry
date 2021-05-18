					<p class="text-danger">エントリーを削除してよろしければ、削除ボタンを押して下さい。</p>
          <div class="entry-form bg-light shadow">
            <!-- 名前(ふりがな) -->
            <div class="entry-form__item">
              <div class="row">
                <div class="col-md-6">
                  <label for="entry_name" class="entry-form__ttl">名前 (ふりがな)</label>
                  <p class="entry-form__txt"><?php echo $entry['entry_name']; ?> (<?php echo $entry['entry_ruby']; ?>)</p>
                </div>
              </div>
            </div>
            <!-- 生年月日 -->
            <div class="entry-form__item">
              <h3 class="entry-form__ttl">生年月日</h3>
              <div class="row">
                <div class="col-md-4">
                  <p class="entry-form__txt"><?php //echo $entry['year']; ?>年 <?php //echo $entry['month']; ?>月 <?php //echo $entry['date']; ?>日</p>
                </div>
              </div>
            </div>
            <!-- 住所 -->
            <div class="entry-form__item">
              <div class="row">
                <div class="col">
                  <label for="address-level1" class="entry-form__ttl">住所</label>
                  <p class="entry-form__txt"><?php echo PREFECTURE[$entry['entry_prefecture']]; ?><?php echo $entry['entry_address']; ?></p>
                </div>
              </div>
            </div>
            <!-- 電話番号 -->
            <div class="entry-form__item">
              <h3 class="entry-form__ttl">電話番号</h3>
              <div class="row">
                <div class="col-md-4">
                  <p class="entry-form__txt"><?php echo $entry['entry_telephone_h']; ?>-<?php echo $entry['entry_telephone_m']; ?>-<?php echo $entry['entry_telephone_l']; ?></p>
                </div>
              </div>
            </div>
            <!-- メールアドレス -->
            <div class="entry-form__item">
              <div class="entry-form__col">
                <h3 class="entry-form__ttl">メールアドレス</h3>
                <p class="entry-form__txt"><?php echo $entry['entry_email']; ?></p>
              </div>
            </div>
            <!-- メールマガジン -->
            <div class="entry-form__item">
              <h3 class="entry-form__ttl">メルマガ</h3>
              <div class="row">
                <div class="col-md-4">
                  <p class="entry-form__txt"><?php echo MAGAZINE[$entry['entry_magazine']]; ?> 
                  <?php if($entry['entry_magazine_type'] = 1) :?>
                  (<?php echo MAGAZINE_TYPE[$entry['entry_magazine_type']]; ?>)
                  <?php endif; ?>
                  </p>
                </div>
              </div>
            </div>
            <div class="entry-form__item">
              <div class="row">
                <div class="col-6">
                  <?php echo Html::anchor("system/admin/entry", '戻る',array('class' => 'btn btn-secondary btn-block text-center'));?>
                </div>
                <div class="col-6">
								  <?php echo Form::open('system/admin/entry/delete/completed'); ?>
									  <?php echo Form::csrf(); ?>
										<?php echo Form::hidden('entry_id',$entry['entry_id']);?>
                    <button id="send" class="btn btn-danger btn-block" type="submit">削除</button>
									<?php echo Form::close(); ?>
                </div>
              </div>
            </div>
						
          </div>