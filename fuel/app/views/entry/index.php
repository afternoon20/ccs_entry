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
                  <label for="name" class="entry-form__ttl">名前</label>
                  <!-- <input type="text" class="form-control" name="name"> -->
                 	<?php echo Form::input('name', Input::post('name'),array('class'=>'form-control')); ?>
                  <div class="invalid-feedback">必須項目です。</div>
                </div>
                <div class="col-md-6">
                  <label for="kana" class="entry-form__ttl">ふりがな</label>
                 	<?php echo Form::input('kana', Input::post('kana'),array('class'=>'form-control')); ?>
                  <!-- <input type="text" class="form-control" name="kana" /> -->
                  <div class="invalid-feedback">必須項目です。</div>
                </div>
              </div>
            </div>
            <!-- 生年月日 -->
            <!-- <div class="entry-form__item">
              <h3 class="entry-form__ttl">生年月日</h3>
              <div class="row">
                <div class="col-md-4">
                  <label for="yaer">年</label>
                  <select name="year" id="year" class="form-control" required>
                    <option value="">----</option>
                  </select>
                  <div class="invalid-feedback">必須項目です。</div>
                </div>
                <div class="col-md-4">
                  <label for="month">月</label>
                  <select name="month" id="month" class="form-control" required>
                    <option value="">----</option>
                  </select>
                  <div class="invalid-feedback">必須項目です。</div>
                </div>
                <div class="col-md-4">
                  <label for="day">日</label>
                  <select name="date" id="date" class="form-control" required>
                    <option value="">----</option>
                  </select>
                  <div class="invalid-feedback">必須項目です。</div>
                </div>
              </div>
            </div> -->
            <!-- 住所 -->
            <!-- <div class="entry-form__item">
              <div class="row">
                <div class="col-6 col-lg-4">
                  <label for="address-level1" class="entry-form__ttl">都道府県</label>
                  <div class="input-group">
                    <select class="custom-select" name="prefecture" required>
                      <option value="">都道府県を選択</option>
                      <option value="北海道">北海道</option>
                      <option value="青森県">青森県</option>
                      <option value="岩手県">岩手県</option>
                      <option value="宮城県">宮城県</option>
                      <option value="秋田県">秋田県</option>
                      <option value="山形県">山形県</option>
                      <option value="福島県">福島県</option>
                      <option value="茨城県">茨城県</option>
                      <option value="栃木県">栃木県</option>
                      <option value="群馬県">群馬県</option>
                      <option value="埼玉県">埼玉県</option>
                      <option value="千葉県">千葉県</option>
                      <option value="東京都">東京都</option>
                      <option value="神奈川県">神奈川県</option>
                      <option value="新潟県">新潟県</option>
                      <option value="富山県">富山県</option>
                      <option value="石川県">石川県</option>
                      <option value="福井県">福井県</option>
                      <option value="山梨県">山梨県</option>
                      <option value="長野県">長野県</option>
                      <option value="岐阜県">岐阜県</option>
                      <option value="静岡県">静岡県</option>
                      <option value="愛知県">愛知県</option>
                      <option value="三重県">三重県</option>
                      <option value="滋賀県">滋賀県</option>
                      <option value="京都府">京都府</option>
                      <option value="大阪府">大阪府</option>
                      <option value="兵庫県">兵庫県</option>
                      <option value="奈良県">奈良県</option>
                      <option value="和歌山県">和歌山県</option>
                      <option value="鳥取県">鳥取県</option>
                      <option value="島根県">島根県</option>
                      <option value="岡山県">岡山県</option>
                      <option value="広島県">広島県</option>
                      <option value="山口県">山口県</option>
                      <option value="徳島県">徳島県</option>
                      <option value="香川県">香川県</option>
                      <option value="愛媛県">愛媛県</option>
                      <option value="高知県">高知県</option>
                      <option value="福岡県">福岡県</option>
                      <option value="佐賀県">佐賀県</option>
                      <option value="長崎県">長崎県</option>
                      <option value="熊本県">熊本県</option>
                      <option value="大分県">大分県</option>
                      <option value="宮崎県">宮崎県</option>
                      <option value="鹿児島県">鹿児島県</option>
                      <option value="沖縄県">沖縄県</option>
                    </select>
                    <div class="invalid-feedback">必須項目です。</div>
                  </div>
                </div>
                <div class="col-6 col-lg-8">
                  <label for="address" class="entry-form__ttl">住所</label>
                  <input type="text" class="form-control" name="city" required />
                  <div class="invalid-feedback">必須項目です。</div>
                </div>
              </div>
            </div> -->
            <!-- 電話番号 -->
            <!-- <div class="entry-form__item">
              <h3 class="entry-form__ttl">電話番号</h3>
              <div class="row">
                <div class="col-md-4">
                  <input type="tel" class="form-control" name="tel1" required />
                  <div class="invalid-feedback">必須項目です。</div>
                </div>
                <div class="col-md-4">
                  <input type="tel" class="form-control" name="tel2" required />
                  <div class="invalid-feedback">必須項目です。</div>
                </div>
                <div class="col-md-4">
                  <input type="tel" class="form-control" name="tel2" required />
                  <div class="invalid-feedback">必須項目です。</div>
                </div>
              </div>
            </div> -->
            <!-- メールアドレス -->
            <!-- <div class="entry-form__item">
              <div class="entry-form__col">
                <label for="email" class="entry-form__ttl">メールアドレス</label>
                <input type="email" class="form-control" name="email" required />
              </div>
            </div> -->
            <!-- メールマガジン -->
            <!-- <div class="entry-form__item">
              <h3 class="entry-form__ttl">メルマガ</h3>
              <div class="row">
                <div class="col-md-4">
                  <label for="m">メルマガの購読</label>
                  <select class="custom-select" id="magazine" name="magazine" required>
                    <option value="">---</option>
                    <option value="0">不要</option>
                    <option value="1">購読</option>
                  </select>
                  <div class="invalid-feedback">必須項目です。</div>
                </div>
                <div class="col-md-4">
                  <label for="m">メルマガのタイプ</label>
                  <select class="custom-select" name="magazine-type" id="magazine-type">
                    <option value="">---</option>
                    <option value="0">PC向け</option>
                    <option value="1">モバイル向け</option>
                  </select>
                  <div class="invalid-feedback">必須項目です。</div>
                </div>
              </div>
            </div> -->
            <button id="send" class="mt-5 btn btn-primary btn-block" type="submit">確認画面へ</button>
          </div>
          <?php echo Form::close(); ?>
