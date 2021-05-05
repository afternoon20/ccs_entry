          <div class="text-danger">
          <?php if (isset($html_error)): ?>
            <?php echo $html_error ?>
          <?php endif; ?>
          </div>
          
          <?php echo Form::open('entry/confirm'); ?>
          <div class="entry-form bg-light shadow">
            <!-- 名前 -->
            <div class="entry-form__item">
              <div class="row">
                <div class="col-md-6">
                  <label for="entry_name" class="entry-form__ttl">名前</label>
                 	<?php echo Form::input('entry_name', Input::post('entry_name'),array('class'=>'form-control')); ?>
                  <div class="invalid-feedback">必須項目です。</div>
                </div>
                <div class="col-md-6">
                  <label for="entry_ruby" class="entry-form__ttl">ふりがな</label>
                 	<?php echo Form::input('entry_ruby', Input::post('entry_ruby'),array('class'=>'form-control')); ?>
                  <div class="invalid-feedback">必須項目です。</div>
                </div>
              </div>
            </div>
            <!-- 生年月日 -->
            <div class="entry-form__item">
              <h3 class="entry-form__ttl">生年月日</h3>
              <div class="row">
                <div class="col-md-4">
                  <label for="yaer">年</label>
                  <?php
                    echo Form::select(
                      'year', 
                      '---',
                      array(
                        '' => '---',
                      ),
                      array(
                        'id' => 'year',
                        'class'=>'form-control',
                      ),
                    );      
                  ?>
                  <div class="invalid-feedback">必須項目です。</div>
                </div>
                <div class="col-md-4">
                  <label for="month">月</label>
                  <?php
                    echo Form::select(
                      'month', 
                      '---',
                      array(
                        '' => '---',
                      ),
                      array(
                        'id' => 'month',
                        'class'=>'form-control',
                      ),
                    );      
                  ?>
                  <div class="invalid-feedback">必須項目です。</div>
                </div>
                <div class="col-md-4">
                  <label for="day">日</label>
                  <?php
                    echo Form::select(
                      'date', 
                      '---',
                      array(
                        '' => '---',
                      ),
                      array(
                        'id' => 'date',
                        'class'=>'form-control',
                      ),
                    );      
                  ?>
                  <div class="invalid-feedback">必須項目です。</div>
                </div>
              </div>
            </div>
            <!-- 住所 -->
            <div class="entry-form__item">
              <div class="row">
                <div class="col-6 col-lg-4">
                  <label for="entry_prefecture" class="entry-form__ttl">都道府県</label>
                  <div class="input-group">
                    <?php
                    echo Form::select(
                      'entry_prefecture', 
                      '---',
                      array(
                      '' => '都道府県を選択',
                      '1' => '北海道',
                      '2' => '青森県',
                      '3' => '岩手県',
                      '4' => '宮城県',
                      '5' => '秋田県',
                      '6' => '山形県',
                      '7' => '福島県',
                      '8' => '茨城県',
                      '9' => '栃木県',
                      '10' => '群馬県',
                      '11' => '埼玉県',
                      '千葉県' => '千葉県',
                      '東京都' => '東京都',
                      '神奈川県' => '神奈川県',
                      '新潟県' => '新潟県',
                      '富山県' => '富山県',
                      '石川県' => '石川県',
                      '福井県' => '福井県',
                      '山梨県' => '山梨県',
                      '長野県' => '長野県',
                      '岐阜県' => '岐阜県',
                      '静岡県' => '静岡県',
                      '愛知県' => '愛知県',
                      '三重県' => '三重県',
                      '滋賀県' => '滋賀県',
                      '京都府' => '京都府',
                      '大阪府' => '大阪府',
                      '兵庫県' => '兵庫県',
                      '奈良県' => '奈良県',
                      '和歌山県' => '和歌山県',
                      '鳥取県' => '鳥取県',
                      '島根県' => '島根県',
                      '岡山県' => '岡山県',
                      '広島県' => '広島県',
                      '山口県' => '山口県',
                      '徳島県' => '徳島県',
                      '香川県' => '香川県',
                      '愛媛県' => '愛媛県',
                      '高知県' => '高知県',
                      '福岡県' => '福岡県',
                      '佐賀県' => '佐賀県',
                      '長崎県' => '長崎県',
                      '熊本県' => '熊本県',
                      '大分県' => '大分県',
                      '宮崎県' => '宮崎県',
                      '鹿児島県' => '鹿児島県',
                      '沖縄県' => '沖縄県',
                      ),
                      array(
                        'class' => 'custom-select',
                      ),
                    );      
                  ?>
                  <!-- <div class="invalid-feedback">必須項目です。</div> -->
                  </div>
                </div>
                <div class="col-6 col-lg-8">
                  <label for="address" class="entry-form__ttl">住所</label>
                 	<?php echo Form::input('entry_address', Input::post('entry_address'),array('class'=>'form-control')); ?>
                  <!-- <div class="invalid-feedback">必須項目です。</div> -->
                </div>
              </div>
            </div>
            <!-- 電話番号 -->
            <div class="entry-form__item">
              <h3 class="entry-form__ttl">電話番号</h3>
              <div class="row">
                <div class="col-md-4">
                 	<?php echo Form::input('entry_telephone_h', Input::post('entry_telephone_h'),array('class'=>'form-control')); ?>
                  <!-- <div class="invalid-feedback">必須項目です。</div> -->
                </div>
                <div class="col-md-4">
                 	<?php echo Form::input('entry_telephone_m', Input::post('entry_telephone_m'),array('class'=>'form-control')); ?>
                  <!-- <div class="invalid-feedback">必須項目です。</div> -->
                </div>
                <div class="col-md-4">
                 	<?php echo Form::input('entry_telephone_l', Input::post('entry_telephone_l'),array('class'=>'form-control')); ?>
                  <!-- <div class="iz1nvalid-feedback">必須項目です。</div> -->
                </div>
              </div>
            </div>
            <!-- メールアドレス -->
            <div class="entry-form__item">
              <div class="entry-form__col">
                <label for="entry_email" class="entry-form__ttl">メールアドレス</label>
                <?php echo Form::input('entry_email', Input::post('entry_email'),array('class'=>'form-control')); ?>
              </div>
            </div>
            <!-- メールマガジン -->
            <div class="entry-form__item">
              <h3 class="entry-form__ttl">メルマガ</h3>
              <div class="row">
                <div class="col-md-4">
                  <label for="entry_magazine">メルマガの購読</label>
                  <?php
                    echo Form::select(
                      'entry_magazine', 
                      '---',
                      array(
                        '' => '---',
                        '0' => '不要',
                        '1' => '購読',
                      ),
                      array(
                        'id' => 'entry_magazine',
                        'class'=>'custom-select',
                      ),
                    );      
                  ?>
                  <!-- <div class="invalid-feedback">必須項目です。</div> -->
                </div>
                <div class="col-md-4">
                  <label for="entry_magazine_type">メルマガのタイプ</label>
                  <?php
                    echo Form::select(
                      'entry_magazine_type', 
                      '---',
                      array(
                        '' => '---',
                        '0' => 'PC向け',
                        '1' => 'モバイル向け',
                      ),
                      array(
                        'id' => 'entrymagazine-type',
                        'class'=>'custom-select',
                      ),
                    );      
                  ?>
                  <!-- <div class="invalid-feedback">必須項目です。</div> -->
                </div>
              </div>
            </div>
            <button id="send" class="mt-5 btn btn-primary btn-block" type="submit">確認画面へ</button>
          </div>
          <?php echo Form::close(); ?>
