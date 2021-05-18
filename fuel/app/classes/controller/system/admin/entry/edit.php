<?php

class Controller_System_Admin_Entry_Edit extends Controller_System_Base
{
	public function action_index()
	{
    if(Input::method() == 'GET'){
      $entry_id = Input::get('entry_id');
		  $data['entry']= Model_Entry::find_by_pk($entry_id);
      $this->birthday_val($data);
      $this->register_val($data);
		  $this->template->title = 'エントリー編集';
		  $this->template->content = View::forge("system/entry/edit",$data);
    
    // 保存ボタン押下
    }elseif(Input::method() == 'POST'){
      $entry_id = Input::post('entry_id');
      $entry = Model_Entry::find_by_pk($entry_id);
			

      // CSRF対策
		  if ( ! Security::check_token()){
			  $this->template->title = '不正な操作がありました。最初からやり直してください。';
			  $this->template->content = View::forge('system/404');
			  return;
		  }

		  $val = $this->forge_validation();

      if (!$val->run())
		  {
				$data['entry'] = Input::post();
			  $this->template->title = 'エントリー編集(エラー)';
			  $this->template->content = View::forge('system/entry/edit',$data);
			  $this->template->content->set_safe('html_error', $val->show_errors());
			  return;
		  }

      try{
        // データベース更新
				$entry['entry_name'] = Input::post('entry_name');
        $entry['entry_ruby'] = Input::post('entry_ruby');

				// 誕生日をUNIXTIMEに変換
			  $birthday = new DateTime(Input::post('entry_birthday'));
			  $birthday = intval($birthday->format('U'));
        $entry['entry_birthday'] = $birthday;

				$entry['entry_prefecture'] = intval(Input::post('entry_prefecture'));
        $entry['entry_address'] = Input::post('entry_address');
        $entry['entry_telephone_h'] = Input::post('entry_telephone_h');
        $entry['entry_telephone_m'] = Input::post('entry_telephone_m');
        $entry['entry_telephone_l'] = Input::post('entry_telephone_l');
        $entry['entry_email'] = Input::post('entry_email');
        $entry['entry_magazine'] = intval(Input::post('entry_magazine'));
        $entry['entry_magazine_type'] = intval(Input::post('entry_magazine_type'));
        $entry['entry_transfer'] = intval(Input::post('entry_transfer'));

			  // 登録日時をUNIXTIMEに変換
        $register_time = new DateTime(Input::post('entry_register_time'));
			  $entry_register_time = intval($register_time->format('U'));
        $entry['entry_register_time'] = intval($entry_register_time);

        $entry->save();
				Response::redirect("system/admin/entry/edit?entry_id=".$entry_id);

        
      } catch(Exception $e){
				echo $e;
			  exit;
      }
    }
	}

  public function action_update()
  {
    $entry_id = Input::post('entry_id');
    $entry = Model_Entry::find_by_pk($entry_id);

    // CSRF対策
		if ( ! Security::check_token()){
			  $this->template->title = '不正な操作がありました。最初からやり直してください。';
			  $this->template->content = View::forge('system/404');
			  return;
		}

		  $val = $this->forge_validation();

      if (!$val->run())
		  {
        $data['entry'] = Input::post();
			  $this->template->title = 'エントリー編集(エラー)';
			  $this->template->content = View::forge('system/entry/edit',$data);
			  $this->template->content->set_safe('html_error', $val->show_errors());
			  return;
		  }

      try{

				exit;

        // データベース更新

        $entry['entry_name'] = Input::post('entry_name');
        $entry['entry_ruby'] = Input::post('entry_ruby');

			  // 誕生日をUNIXTIMEに変換
			  $birthday = new DateTime(Input::post('entry_birthday'));
			  $birthday = intval($birthday->format('U'));
        $entry['entry_birthday'] = $birthday;

        $entry['entry_prefecture'] = intval(Input::post('entry_prefecture'));
        $entry['entry_address'] = Input::post('entry_address');
        $entry['entry_telephone_h'] = Input::post('entry_telephone_h');
        $entry['entry_telephone_m'] = Input::post('entry_telephone_m');
        $entry['entry_telephone_l'] = Input::post('entry_telephone_l');
        $entry['entry_email'] = Input::post('entry_email');
        $entry['entry_magazine'] = intval(Input::post('entry_magazine'));
        $entry['entry_magazine_type'] = intval(Input::post('entry_magazine_type'));
        $entry['entry_transfer'] = intval(Input::post('entry_transfer'));

			  // 登録日時をUNIXTIMEに変換
        $register_time = new DateTime(Input::post('entry_register_time'));
			  $entry_register_time = intval($register_time->format('U'));
        $entry['entry_register_time'] = intval($entry_register_time);

        $entry->save();
        Response::redirect('system/admin/entry/edit?entry_id='.$entry_id);


      } catch(Exception $e){
        echo $e;
			  exit;
      }

  }

  // 検証ルールの定義
	public function forge_validation()
	{
		$val = Validation::forge();
		$val -> add_callable('Validation_MyValidation');
		
		$val->add('entry_name', '名前')
			->add_rule('trim')
			->add_rule('required')
			->add_rule('max_length', 40);

		$val->add('entry_ruby', 'ふりがな')
			->add_rule('trim')
			->add_rule('required')
			->add_rule('kana')
			->add_rule('max_length', 40);
		
		$val->add('year', '年')
			->add_rule('trim')
			->add_rule('required');

		$val->add('month', '月')
			->add_rule('trim')
			->add_rule('required');
		
		$val->add('date', '日')
			->add_rule('trim')
			->add_rule('required');
		
		$val->add('entry_prefecture', '都道府県')
			->add_rule('trim')
			->add_rule('required')
			->add_rule('numeric_max', 48);


		$val->add('entry_address', '住所')
			->add_rule('trim')
			->add_rule('required')
			->add_rule('max_length', 255);
		
		$val->add('entry_telephone_h', '電話番号(上桁)')
			->add_rule('trim')
			->add_rule('required')
			->add_rule('max_length', 5);
		
		$val->add('entry_telephone_m', '電話番号(中桁)')
			->add_rule('trim')
			->add_rule('required')
			->add_rule('max_length', 4);
		
		$val->add('entry_telephone_l', '電話番号(下桁)')
			->add_rule('trim')
			->add_rule('required')
			->add_rule('max_length', 4);
		
		$val->add('entry_email', 'メールアドレス')
			->add_rule('trim')
			->add_rule('required')
			->add_rule('valid_email')
			->add_rule('valid_emails')
			->add_rule('max_length', 255);
		
		$val->add('entry_magazine', 'メルマガの購読')
			->add_rule('trim')
			->add_rule('required');
		
		$val->add('entry_magazine_type', 'メルマガのタイプ')
			->add_rule('trim')
			->add_rule('magazine_type')
			->add_rule('numeric_max', 1);

    $val->add('entry_transfer', '転送済み')
			->add_rule('trim')
			->add_rule('required')
			->add_rule('max_length', 1);
    
    $val->add('entry_birthday', '生年月日')
			->add_rule('valid_date','Y-m-d');

    $val->add('reg_year', '登録日(年)')
			->add_rule('trim')
			->add_rule('required')
			->add_rule('max_length', intval(date('Y')));
    
    $val->add('reg_month', '登録日(月)')
			->add_rule('trim')
			->add_rule('required')
			->add_rule('max_length', 12);
    
    $val->add('reg_date', '登録日(日)')
			->add_rule('trim')
			->add_rule('required')
			->add_rule('max_length', 31);
    
    $val->add('reg_hour', '登録日(時)')
			->add_rule('trim')
			->add_rule('required')
			->add_rule('max_length', 23);
    
    $val->add('reg_minute', '登録日(分)')
			->add_rule('trim')
			->add_rule('required')
			->add_rule('max_length', 59);
    
    $val->add('reg_sec', '登録日(秒)')
			->add_rule('trim')
			->add_rule('required')
			->add_rule('max_length', 59);

    $val->add('entry_register_time','登録日時')
			->add_rule('register_time');
		
		return $val;
	}

  // 生年月日をUNIXからY-n-j
  public function birthday_val($data)
  {
    $birthday = strval($data['entry']['entry_birthday']);
		$data['entry']['year'] = date('Y',$birthday);
		$data['entry']['month'] = date('n',$birthday);
		$data['entry']['date'] = date('j',$birthday);
    return $data;
  }

  // 登録日時をUNIXからY-n-j-G-i-sへ
  public function register_val($data)
  {
    $register = strval($data['entry']['entry_register_time']);
		$data['entry']['reg_year'] = date('Y',$register);
		$data['entry']['reg_month'] = date('n',$register);
		$data['entry']['reg_date'] = date('j',$register);
		$data['entry']['reg_hour'] = date('G',$register);
		$data['entry']['reg_minute'] = intval(date('i',$register));
		$data['entry']['reg_sec'] = intval(date('s',$register));
    return $data;
  }
}
