					<div class="entry-form bg-light shadow">
            <!-- 名前(ふりがな) -->
            <div class="entry-form__item">
              <div class="row">
                <div class="col-md-6">
                  <label for="name" class="entry-form__ttl">名前 (ふりがな)</label>
                  <p class="entry-form__txt"><?php echo $input['name']; ?>(<?php echo $input['kana']; ?>)</p>
                </div>
              </div>
            </div>
            <!-- 生年月日 -->
            <div class="entry-form__item">
              <h3 class="entry-form__ttl">生年月日</h3>
              <div class="row">
                <div class="col-md-4">
                  <p class="entry-form__txt">1995年 3月 23日</p>
                </div>
              </div>
            </div>
            <!-- 住所 -->
            <div class="entry-form__item">
              <div class="row">
                <div class="col-6 col-lg-4">
                  <label for="address-level1" class="entry-form__ttl">住所</label>
                  <p class="entry-form__txt">北海道札幌市東区１２−３４４</p>
                </div>
              </div>
            </div>
            <!-- 電話番号 -->
            <div class="entry-form__item">
              <h3 class="entry-form__ttl">電話番号</h3>
              <div class="row">
                <div class="col-md-4">
                  <p class="entry-form__txt">090-4444-4444</p>
                </div>
              </div>
            </div>
            <!-- メールアドレス -->
            <div class="entry-form__item">
              <div class="entry-form__col">
                <label for="email" class="entry-form__ttl">メールアドレス</label>
                <p class="entry-form__txt">uuuuu@hatoo.ttt</p>
              </div>
            </div>
            <!-- メールマガジン -->
            <div class="entry-form__item">
              <h3 class="entry-form__ttl">メルマガ</h3>
              <div class="row">
                <div class="col-md-4">
                  <p class="entry-form__txt">購読(PC向け)</p>
                </div>
              </div>
            </div>
            <div class="entry-form__item">
              <div class="row">
                <div class="col-6">
								  <?php echo Form::open('entry/'); ?>
									  <?php echo Form::hidden('name',$input['name']);?>
									  <?php echo Form::hidden('kana',$input['kana']);?>
                    <button id="back" class="mt-5 btn btn-secondary btn-block" type="submit">戻る</button>
									<?php echo Form::close(); ?>
                </div>
                <div class="col-6">
								  <?php echo Form::open('entry/send'); ?>
									  <?php echo Form::csrf(); ?>
									  <?php echo Form::hidden('name',$input['name'],array('id' => 'name')); ?>
									  <?php echo Form::hidden('kana',$input['kana'],array('id' => 'kana')); ?>
                    <button id="send" class="mt-5 btn btn-primary btn-block" type="submit">投稿</button>
									<?php echo Form::close(); ?>
                </div>
              </div>
            </div>
						
          </div>