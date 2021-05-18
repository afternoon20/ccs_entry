<div class="py-2 my-3 container border">
  <div class="entry-search text-primary" style="cursor:pointer;">絞込検索<span class="entry-search__toggle pl-2"><i class="fas fa-chevron-down"></i><i class="fas fa-chevron-up"></i></span></div>
  <div class="entry-search__bottom">
  <?php echo Form::open(array('action' => 'system/admin/entry', 'method' => 'get')); ?>
    <!-- キーワード -->
    <div class="row my-4">
      <div class="col-12">
          <label for="show">キーワード</label>
         	<?php echo Form::input('keyword','たなか',array('class'=>'form-control entry-form__txt'));?>
        </div>
    </div>
    <!-- 生年月日 -->
    <label for="">生年月日</label>
    <div class="row mb-4">
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
      </div>
      <div class="col-md-4">
        <label for="day">日</label>
        <?php
          echo Form::select(
            'date', 
            '---',
            DATES,
            array(
              'id' => 'date',
              'class'=>'form-control birthday',
            ),
          );      
        ?>
      </div>
    </div>
    <div>
      <p class="text-center" style=" transform:rotate(-90deg);">〜</p>
    </div>
    <div class="row mb-4">
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
      </div>
    </div>
    <!-- 都道府県 -->
    <div class="row mb-4">
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
    <!-- メルマガの種類 -->
    <div class="row mb-4">
      <div class="col-6 col-lg-4">
        <label for="entry_prefecture" class="entry-form__ttl">メルマガの種類</label>
        <div class="input-group">
          <?php
            echo Form::select(
              'entry_magazine', 
              Input::post('entry_magazine'),
              MAGAZINE,
              array(
                'id' => 'entry_magazine',
                'class'=>'custom-select',
              )
            );      
          ?>
        </div>
      </div>             
    </div>
    <!-- 転送済み -->
    <div class="row mb-4">
      <div class="col-md-4">
        <lavel>転送済み</lavel>
        <?php
          echo Form::select(
            'entry_transfer',
            '---',
            TRANSFER,
            array(
              'id' => 'entry_transfer',
              'class'=>'custom-select',
            ),
          );      
        ?>
      </div>
    </div>
    <!-- 登録日時 -->
    <label for="">登録日時</label>
    <div class="row mb-4">
      <div class="col-4 col-md-2">
        <label for="reg_yaer">年</label>
        <?php
          echo Form::select(
            'reg_year', 
            '---',
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
            '---',
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
            '---',
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
            '---',
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
            '---',
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
            '---',
            SECONDS,
            array(
              'id' => 'reg-sec',
              'class'=>'form-control register-time',
            ),
          );   
        ?>
      </div>
    </div>
    <div>
      <p class="text-center" style=" transform:rotate(-90deg);">〜</p>
    </div>
    <div class="row mb-5">
      <div class="col-4 col-md-2">
        <label for="reg_yaer">年</label>
        <?php
          echo Form::select(
            'reg_year', 
            '---',
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
            '---',
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
            '---',
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
            '---',
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
            '---',
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
            '---',
            SECONDS,
            array(
              'id' => 'reg-sec',
              'class'=>'form-control register-time',
            ),
          );   
        ?>
      </div>
    </div>
    <div class="row">
      <div class="col-12">
        <button class="btn btn-primary my-2 mb-5 btn-block" type="submit">検索</button>
      </div>
    </div>
  <?php echo Form::close(); ?>
  </div> 
</div>

<div class="text-right">
  <?php echo Html::anchor('/entry', '新規追加', array('class' => 'btn bg-success text-white'),); ?>
</div>
<div class="table-responsive mt-3">
  <table class="table shadow-sm table-bordered table-sm">
    <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">名前</th>
      <th scope="col">ふりがな</th>
      <th scope="col"></th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
    <?php foreach($entries as $entry) :?>
    <tr>
      <td class="align-middle" scope="row"><?php echo $entry['entry_id']?></td>
      <td class="align-middle"><?php echo $entry['entry_name']?></td>
      <td class="align-middle"><?php echo $entry['entry_ruby']?></td>
      <td class="align-middle text-center"><?php echo Html::anchor("system/admin/entry/edit?entry_id=".$entry['entry_id'], '編集',array('class' => 'btn btn-primary btn-sm text-center'));?></td>
      <td class="align-middle text-center"><?php echo Html::anchor("system/admin/entry/delete?entry_id=".$entry['entry_id'], '削除',array('class' => 'btn btn-danger btn-sm text-center'));?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
  </table>
</div>
