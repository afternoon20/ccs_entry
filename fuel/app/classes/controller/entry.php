<?php

use Fuel\Core\Input;

class Controller_Entry extends Controller_Template{

	public function action_index()
	{
		if(Input::method() == 'GET')
		{
			$this->template->title = 'エントリーフォーム';
			$this->template->content = View::forge('entry/index');

		} elseif(Input::method() == 'POST'){
			$val = $this->forge_validation();
		
			if ($val->run())
			{
				$data['input'] = $val->validated();
			
				// 実行されず
				// Response::redirect('entry/comfirm',$data);

				// リダイレクトするが値を渡せない
				// Response::redirect('entry/comfirm');

				//URLがentry/indexになる
				$this->action_comfirm($data);
			}else{
				$this->template->title = 'エントリーフォーム(エラー)';
				$this->template->content = View::forge('entry/index');
				$this->template->content->set_safe('html_error', $val->show_errors());
			}
		}
	}

	public function action_comfirm($data)
	// public function action_comfirm()
	{
		$this->template->title = '確認画面';
		$this->template->content = View::forge('entry/confirm',$data);
	}

	public function action_send()
	{
		// CSRF対策
		if ( ! Security::check_token())
		{
			$this->template->title = '不正な操作がありました。最初からやり直してください。';
			$this->template->content = View::forge('entry/404');
			return;
		}

		$val = $this->forge_validation();
		
		if (!$val->run())
		{
			$this->template->title = 'エントリーフォーム(エラー)';
			$this->template->content = View::forge('entry/index');
			$this->template->content->set_safe('html_error', $val->show_errors());
			return;
		}
		try
		{
			// データベース登録

			$form = array();
      $form['entry_name'] = Input::post('entry_name');
      $form['entry_ruby'] = Input::post('entry_ruby');
			// TODO:誕生日の処理
			$birthday = new DateTime(Input::post('entry_birthday'));
			$birthday = intval($birthday->format('U'));
      $form['entry_birthday'] = $birthday;
			
      $form['entry_prefecture'] = intval(Input::post('entry_prefecture'));
      $form['entry_address'] = Input::post('entry_address');
      $form['entry_telephone_h'] = Input::post('entry_telephone_h');
      $form['entry_telephone_m'] = Input::post('entry_telephone_m');
      $form['entry_telephone_l'] = Input::post('entry_telephone_l');
      $form['entry_email'] = Input::post('entry_email');
      $form['entry_magazine'] = intval(Input::post('entry_magazine'));
      $form['entry_magazine_type'] = intval(Input::post('entry_magazine_type'));

			$ccs_entry = Model_Entry::forge();
			$ccs_entry->set($form);
			$ccs_entry->save();

			$this->template->title = '投稿完了';
			$this->template->content = View::forge('entry/send');

		}catch(Exception $e){
			echo $e;
			exit;
			$this->template->title = '投稿失敗！';
			$this->template->content = View::forge('entry/send');
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
		
		$val->add('entry_birthday', '生年月日')
			->add_rule('valid_date','Y-m-d');
			
		
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

		return $val;
	}
}
