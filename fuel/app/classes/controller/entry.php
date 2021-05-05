<?php

use Fuel\Core\Controller_Template;

class Controller_Entry extends Controller_Template{

	public function action_index()
	{
		$this->template->title = 'エントリーフォーム';
		$this->template->content = View::forge('entry/index');
		
	}

	public function action_confirm()
	{
		$val = $this->forge_validation();
		
		if ($val->run())
		{
			$data['input'] = $val->validated();
			$this->template->title = '確認画面';
			$this->template->content = View::forge('entry/confirm',$data);

		}
		else
		{
    	$this->template->title = 'エントリーフォーム(エラー)';
			$this->template->content = View::forge('entry/index');
			$this->template->content->set_safe('html_error', $val->show_errors());
			// var_dump();
		}
		
	}

	public function action_send()
	{
		// CSRF対策
		if ( ! Security::check_token())
		{
			//throw new HttpInvalidInputException('ページ遷移が正しくありません');
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
      $form['entry_name'] = Input::post('name');
      $form['entry_ruby'] = Input::post('kana');

			$ccs_entry = Model_Entry::forge();
			$ccs_entry->set($form);
			$ccs_entry->save();

			$this->template->title = '投稿完了';
			$this->template->content = View::forge('entry/send');

		}catch(Exception $e){
			$this->template->title = '投稿失敗！';
			$this->template->content = View::forge('entry/send');
		}	
	}

		// 検証ルールの定義
	public function forge_validation()
	{
		$val = Validation::forge();
		
		$val->add('name', '名前')
			->add_rule('trim')
			->add_rule('required')
			->add_rule('max_length', 50);

		$val->add('kana', 'ふりがな')
			->add_rule('trim')
			->add_rule('required')
			->add_rule('max_length', 50);
		
		// $val->add('email', 'メールアドレス')
		// 	->add_rule('trim')
		// 	->add_rule('required')
		// 	->add_rule('max_length', 100)
		// 	->add_rule('valid_email');
		
		// $val->add('comment', 'コメント')
		// 	->add_rule('required')
		// 	->add_rule('max_length', 400);
		
		return $val;
	}

}
