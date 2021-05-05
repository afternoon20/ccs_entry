					<div class="entry-form bg-light shadow">
            <!-- 名前(ふりがな) -->
            <div class="entry-form__item">
              <div class="row">
                <div class="col-md-6">
                  <label for="entry_name" class="entry-form__ttl">名前 (ふりがな)</label>
                  <p class="entry-form__txt"><?php echo $input['entry_name']; ?>(<?php echo $input['entry_ruby']; ?>)</p>
                </div>
              </div>
            </div>
            <!-- 生年月日 -->
            <div class="entry-form__item">
              <h3 class="entry-form__ttl">生年月日</h3>
              <div class="row">
                <div class="col-md-4">
                  <p class="entry-form__txt"><?php echo $input['year']; ?>年 <?php echo $input['month']; ?>月 <?php echo $input['date']; ?>日</p>
                </div>
              </div>
            </div>
            <!-- 住所 -->
            <div class="entry-form__item">
              <div class="row">
                <div class="col-6 col-lg-4">
                  <label for="address-level1" class="entry-form__ttl"><?php echo $input['entry_prefecture']; ?></label>
                  <p class="entry-form__txt"><?php echo $input['entry_address']; ?></p>
                </div>
              </div>
            </div>
            <!-- 電話番号 -->
            <div class="entry-form__item">
              <h3 class="entry-form__ttl">電話番号</h3>
              <div class="row">
                <div class="col-md-4">
                  <p class="entry-form__txt"><?php echo $input['entry_telephone_h']; ?>-<?php echo $input['entry_telephone_m']; ?>-<?php echo $input['entry_telephone_l']; ?></p>
                </div>
              </div>
            </div>
            <!-- メールアドレス -->
            <div class="entry-form__item">
              <div class="entry-form__col">
                <h3 class="entry-form__ttl">メールアドレス</h3>
                <p class="entry-form__txt"><?php echo $input['entry_email']; ?></p>
              </div>
            </div>
            <!-- メールマガジン -->
            <div class="entry-form__item">
              <h3 class="entry-form__ttl">メルマガ</h3>
              <div class="row">
                <div class="col-md-4">
                  <p class="entry-form__txt"><?php echo $input['entry_magazine']; ?> <?php echo $input['entry_magazine_type']; ?></p>
                </div>
              </div>
            </div>
            <div class="entry-form__item">
              <div class="row">
                <div class="col-6">
								  <?php echo Form::open('entry/'); ?>
									  <?php echo Form::hidden('entry_name',$input['entry_name']);?>
									  <?php echo Form::hidden('entry_ruby',$input['entry_ruby']);?>
									  <?php echo Form::hidden('year',$input['year']);?>
									  <?php echo Form::hidden('month',$input['month']);?>
									  <?php echo Form::hidden('date',$input['date']);?>
									  <?php echo Form::hidden('entry_prefecture',$input['entry_prefecture']);?>
									  <?php echo Form::hidden('entry_address',$input['entry_address']);?>
									  <?php echo Form::hidden('entry_telephone_h',$input['entry_telephone_h']);?>
									  <?php echo Form::hidden('entry_telephone_m',$input['entry_telephone_m']);?>
									  <?php echo Form::hidden('entry_telephone_l',$input['entry_telephone_l']);?>
									  <?php echo Form::hidden('entry_email',$input['entry_email']);?>
									  <?php echo Form::hidden('entry_magazine',$input['entry_magazine']);?>
									  <?php echo Form::hidden('entry_magazine_type',$input['entry_magazine_type']);?>
                    <button id="back" class="mt-5 btn btn-secondary btn-block" type="submit">戻る</button>
									<?php echo Form::close(); ?>
                </div>
                <div class="col-6">
								  <?php echo Form::open('entry/send'); ?>
									  <?php echo Form::csrf(); ?>
									  <?php echo Form::hidden('entry_name',$input['entry_name'],array('id' => 'entry_name')); ?>
									  <?php echo Form::hidden('entry_ruby',$input['entry_ruby'],array('id' => 'entry_ruby')); ?>
										<?php echo Form::hidden('year',$input['year']);?>
									  <?php echo Form::hidden('month',$input['month']);?>
									  <?php echo Form::hidden('date',$input['date']);?>
									  <?php echo Form::hidden('entry_prefecture',$input['entry_prefecture']);?>
									  <?php echo Form::hidden('entry_address',$input['entry_address']);?>
									  <?php echo Form::hidden('entry_telephone_h',$input['entry_telephone_h']);?>
									  <?php echo Form::hidden('entry_telephone_m',$input['entry_telephone_m']);?>
									  <?php echo Form::hidden('entry_telephone_l',$input['entry_telephone_l']);?>
									  <?php echo Form::hidden('entry_email',$input['entry_email']);?>
									  <?php echo Form::hidden('entry_magazine',$input['entry_magazine']);?>
									  <?php echo Form::hidden('entry_magazine_type',$input['entry_magazine_type']);?>
									  <?php echo Form::hidden('entry_ruby',$input['entry_ruby']);?>
                    <button id="send" class="mt-5 btn btn-primary btn-block" type="submit">投稿</button>
									<?php echo Form::close(); ?>
                </div>
              </div>
            </div>
						
          </div>