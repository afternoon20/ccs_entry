          <div class="text-danger">
          <?php if (isset($html_error)): ?>
            <?php echo $html_error ?>
          <?php endif; ?>
          </div>
          
          <?php echo Form::open('entry/index'); ?>
          <div class="entry-form bg-light shadow">
            <!-- 名前 -->
            <div class="entry-form__item">
              <div class="row">
                <div class="col-md-6">
                  <label for="entry_name" class="entry-form__ttl">名前</label>
                 	<?php echo Form::input('entry_name', Input::post('entry_name'),array('class'=>'form-control entry-form__txt')); ?>
                  <div class="invalid-feedback">必須項目です。</div>
                </div>
                <div class="col-md-6">
                  <label for="entry_ruby" class="entry-form__ttl">ふりがな</label>
                 	<?php echo Form::input('entry_ruby', Input::post('entry_ruby'),array('class'=>'form-control entry-form__txt')); ?>
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
                      Input::post('year'),
                      YEARS,
                      array(
                        'id' => 'year',
                        'class'=>'form-control birthday',
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
                      Input::post('month'),
                      MONTHS,
                      array(
                        'id' => 'month',
                        'class'=>'form-control birthday',
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
                      Input::post('date'),
                      DATES,
                      array(
                        'id' => 'date',
                        'class'=>'form-control birthday',
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
                      Input::post('entry_prefecture'),
                      PREFECTURE,
                      array(
                        'class' => 'custom-select',
                      )
                    );      
                  ?>
                  </div>
                </div>
                <div class="col-12 col-lg-8">
                  <label for="address" class="entry-form__ttl">住所</label>
                 	<?php echo Form::input('entry_address', Input::post('entry_address'),array('class'=>'form-control')); ?>
                </div>
              </div>
            </div>
            <!-- 電話番号 -->
            <div class="entry-form__item">
              <h3 class="entry-form__ttl">電話番号</h3>
              <div class="row">
                <div class="col-4">
                 	<?php echo Form::input('entry_telephone_h', Input::post('entry_telephone_h'),array('class'=>'form-control')); ?>
                  <!-- <div class="invalid-feedback">必須項目です。</div> -->
                </div>
                <div class="col-4">
                 	<?php echo Form::input('entry_telephone_m', Input::post('entry_telephone_m'),array('class'=>'form-control')); ?>
                  <!-- <div class="invalid-feedback">必須項目です。</div> -->
                </div>
                <div class="col-4">
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
                <div class="col-6 col-md-4">
                  <label for="entry_magazine">メルマガの購読</label>
                  <?php
                    echo Form::select(
                      'entry_magazine', 
                      Input::post('entry_magazine'),
                      MAGAZINE,
                      array(
                        'id' => 'entry_magazine entry_magazine--select',
                        'class'=>'custom-select',
                      )
                    );      
                  ?>
                  <!-- <div class="invalid-feedback">必須項目です。</div> -->
                </div>
                <div class="col-6 col-md-4">
                  <label for="entry_magazine_type">メルマガのタイプ</label>
                  <?php
                    echo Form::select(
                      'entry_magazine_type', 
                      Input::post('entry_magazine_type'),
                      MAGAZINE_TYPE,
                      array(
                        'id' => 'entry_magazine_type entry_magazine_type--select',
                        'class'=>'custom-select',
                      )
                    );      
                  ?>
                  <!-- <div class="invalid-feedback">必須項目です。</div> -->
                </div>
              </div>
            </div>
					  <?php echo Form::hidden('entry_birthday',Input::post('entry_birthday'),array('id'=>'entry_birthday'));?>
            <button id="send" class="mt-5 btn btn-primary btn-block" type="submit">確認画面へ</button>
          </div>
          <?php echo Form::close(); ?>
