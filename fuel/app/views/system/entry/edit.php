          <div class="text-danger">
          <?php if (isset($html_error)): ?>
            <?php echo $html_error ?>
          <?php endif; ?>
          </div>
          
          <?php echo Form::open('system/admin/entry/edit'); ?>
          <div class="entry-form bg-light shadow">
            <!-- 名前 -->
            <div class="entry-form__item">
              <div class="row">
                <div class="col-md-6">
                  <label for="entry_name" class="entry-form__ttl">名前</label>
                 	<?php echo Form::input('entry_name', $entry['entry_name'],array('class'=>'form-control entry-form__txt')); ?>
                </div>
                <div class="col-md-6">
                  <label for="entry_ruby" class="entry-form__ttl">ふりがな</label>
                 	<?php echo Form::input('entry_ruby', $entry['entry_ruby'],array('class'=>'form-control entry-form__txt')); ?>
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
                      $entry['year'],
                      YEARS,
                      array(
                        'id' => 'year',
                        'class'=>'form-control birthday',
                      ),
                    );      
                  ?>
                </div>
                <div class="col-md-4">
                  <label for="month">月</label>
                  <?php
                    echo Form::select(
                      'month', 
                      $entry['month'],
                      MONTHS,
                      array(
                        'id' => 'month',
                        'class'=>'form-control birthday',
                      ),
                    );      
                  ?>
                </div>
                <div class="col-md-4">
                  <label for="day">日</label>
                  <?php
                    echo Form::select(
                      'date', 
                      $entry['date'],
                      DATES,
                      array(
                        'id' => 'date',
                        'class'=>'form-control birthday',
                      ),
                    );      
                  ?>
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
                      $entry['entry_prefecture'],
                      PREFECTURE,
                      array(
                        'class' => 'custom-select',
                      ),
                    );      
                  ?>
                  </div>
                </div>
                <div class="col-6 col-lg-8">
                  <label for="address" class="entry-form__ttl">住所</label>
                 	<?php echo Form::input('entry_address',$entry['entry_address'],array('class'=>'form-control')); ?>
                </div>
              </div>
            </div>
            <!-- 電話番号 -->
            <div class="entry-form__item">
              <h3 class="entry-form__ttl">電話番号</h3>
              <div class="row">
                <div class="col-md-4">
                 	<?php echo Form::input('entry_telephone_h', $entry['entry_telephone_h'],array('class'=>'form-control')); ?>
                </div>
                <div class="col-md-4">
                 	<?php echo Form::input('entry_telephone_m', $entry['entry_telephone_m'],array('class'=>'form-control')); ?>
                </div>
                <div class="col-md-4">
                 	<?php echo Form::input('entry_telephone_l', $entry['entry_telephone_l'],array('class'=>'form-control')); ?>
                  <!-- <div class="iz1nvalid-feedback">必須項目です。</div> -->
                </div>
              </div>
            </div>
            <!-- メールアドレス -->
            <div class="entry-form__item">
              <div class="entry-form__col">
                <label for="entry_email" class="entry-form__ttl">メールアドレス</label>
                <?php echo Form::input('entry_email', $entry['entry_email'],array('class'=>'form-control')); ?>
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
                      $entry['entry_magazine'],
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
                </div>
                <div class="col-md-4">
                  <label for="entry_magazine_type">メルマガのタイプ</label>
                  <?php
                    if (!isset($entry['entry_magazine_type'])) {
                      echo Form::select(
                        'entry_magazine_type', 
                        '---',
                        MAGAZINE_TYPE,
                        array(
                          'id' => 'entrymagazine-type',
                          'class'=>'custom-select',
                        ),
                      );    
                    }else{
                      echo Form::select(
                        'entry_magazine_type', 
                        $entry['entry_magazine_type'],
                        MAGAZINE_TYPE,
                        array(
                          'id' => 'entrymagazine-type',
                          'class'=>'custom-select',
                        ),
                      );     
                    }                   
                  ?>
                </div>
              </div>
            </div>
            <!-- 転送済み -->
            <div class="entry-form__item">
              <h3 class="entry-form__ttl">転送済み</h3>
              <div class="row">
                <div class="col-md-4">
                  <?php
                    echo Form::select(
                      'entry_transfer',
                      $entry['entry_transfer'],
                      TRANSFER,
                      array(
                        'id' => 'entry_transfer',
                        'class'=>'custom-select',
                      ),
                    );      
                  ?>
                </div>
              </div>
            </div>
            <!-- 登録日時 -->
            <div class="entry-form__item">
              <h3 class="entry-form__ttl">登録日時</h3>            
              <div class="row">
                <div class="col-4 col-md-2">
                  <label for="reg_yaer">年</label>
                  <?php
                    echo Form::select(
                      'reg_year', 
                      $entry['reg_year'],
                      YEARS,
                      array(
                        'id' => 'reg-year',
                        'class'=>'form-control register-time',
                      ),
                    );      
                  ?>
                </div>
                <div class="col-4 col-md-2">
                  <label for="reg_month">月</label>
                  <?php
                    echo Form::select(
                      'reg_month', 
                      $entry['reg_month'],
                      MONTHS,
                      array(
                        'id' => 'reg-month',
                        'class'=>'form-control register-time',
                      ),
                    );
                  ?>
                </div>
                <div class="col-4 col-md-2">
                  <label for="reg_date">日</label>
                  <?php
                    echo Form::select(
                      'reg_date', 
                      $entry['reg_date'],
                      DATES,
                      array(
                        'id' => 'reg-date',
                        'class'=>'form-control register-time',
                      ),
                    );   
                  ?>
                </div>
                <div class="col-4 col-md-2">
                  <label for="reg_hour">時</label>
                  <?php
                    echo Form::select(
                      'reg_hour', 
                      $entry['reg_hour'],
                      HOURS,
                      array(
                        'id' => 'reg-hour',
                        'class'=>'form-control register-time',
                      ),
                    );
                  ?>
                </div>
                <div class="col-4 col-md-2">
                  <label for="reg_minute">分</label>
                  <?php
                    echo Form::select(
                      'reg_minute', 
                      $entry['reg_minute'],
                      MINUTES,
                      array(
                        'id' => 'reg-minute',
                        'class'=>'form-control register-time',
                      ),
                    );
                  ?>
                </div>
                <div class="col-4 col-md-2">
                  <label for="reg_sec">秒</label>
                  <?php
                    echo Form::select(
                      'reg_sec', 
                      $entry['reg_sec'],
                      SECONDS,
                      array(
                        'id' => 'reg-sec',
                        'class'=>'form-control register-time',
                      ),
                    );   
                  ?>
                </div>
              </div>
            </div>
            <div class="entry-form__item">
              <div class="row">
                <div class="col-6">
                  <?php echo Html::anchor('/system/admin/entry', '戻る', array('class' => 'btn btn-secondary btn-block'),); ?>
                </div>
                <div class="col-6">
					        <?php echo Form::hidden('entry_birthday',Input::post('entry_birthday'),array('id'=>'entry_birthday'));?>
					        <?php echo Form::hidden('entry_register_time',Input::post('entry_regiser_time'),array('id'=>'entry_regiser_time'));?>
                  <?php echo Form::hidden('entry_id',$entry['entry_id']);?>
                  <?php echo Form::csrf(); ?>
                  <button id="send" class="btn btn-primary btn-block" type="submit">保存</button>
                </div>
              </div>
            </div>
          </div>
          <?php echo Form::close(); ?>
