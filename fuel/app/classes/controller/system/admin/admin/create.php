<?php

class Controller_System_Admin_Admin_Create extends Controller_System_Base
{
	public function action_index()
	{
		 if(Input::method() == 'GET'){
      $this->template->title = 'ユーザー新規作成';
			$this->template->content = View::forge('system/admin/create/index');
			return;
    	// 保存ボタン押下
    	}elseif(Input::method() == 'POST'){
				$val = $this->forge_validation();	

				if (!$val->run())
		  	{
					$data['user'] = Input::post();
			  	$this->template->title = 'ユーザー新規作成(エラー)';
			  	$this->template->content = View::forge('system/admin/create/index',$data);
			  	$this->template->content->set_safe('html_error', $val->show_errors());
			  	return;
		  	}
				
				$data['user'] = $val->validated();
				$this->action_comfirm($data);	
			}
	}

	public function action_comfirm($data)
	{
		$this->template->title = '確認画面';
		$this->template->content = View::forge('system/admin/create/comfirm',$data);
	}

	public function action_completed()
	{
		// CSRF対策
		if ( ! Security::check_token())
		{
			$this->template->title = '不正な操作がありました。最初からやり直してください。';
			$this->template->content = View::forge('entry/404');
			return;
		}

		$val = $this->forge_validation();

		// 登録
		try{
			$id =Auth::create_user(
				Input::post('login_id'),
				Input::post('login_password'),
				Input::post('email'),
				1,
			);

			if($id == false){
				$this->template->title = '不正な操作がありました。最初からやり直してください。';
				$this->template->content = View::forge('entry/404');
				return;
			}

			$created_user= Model_Admin::find_by_pk($id);
			
			$created_user['admin_permission_show'] = Input::post('admin_permission_show');
      $created_user['admin_permission_edit'] = Input::post('admin_permission_edit');
      $created_user['admin_permission_delete'] = Input::post('admin_permission_delete');
      $created_user['login_nickname'] = Input::post('login_nickname');
      $created_user['login_status'] = Input::post('login_status');
			$created_user->save();
			$this->template->title = '登録完了';
			$this->template->content = View::forge('system/admin/create/completed');

		}	catch(Exception $e){
				echo $e;
				exit;
		}
	}

	// 検証ルールの定義
	public function forge_validation()
	{
		$val = Validation::forge();
    $val -> add_callable('Validation_MyValidation');

    $val->add('admin_permission_show', '権限(閲覧)')
			->add_rule('trim')
			->add_rule('required')
			->add_rule('max_length', 1);
    
    $val->add('admin_permission_edit', '権限(編集)')
			->add_rule('trim')
			->add_rule('required')
			->add_rule('max_length', 1);
    
    $val->add('admin_permission_delete', '権限(削除)')
			->add_rule('trim')
			->add_rule('required')
			->add_rule('max_length', 1);
		
		$val->add('login_nickname', 'ログイン名')
			->add_rule('trim')
			->add_rule('required')
			->add_rule('max_length', 40);

    $val->add('login_id', 'ログインID')
			->add_rule('trim')
			->add_rule('required')
			->add_rule('min_length', 6)
			->add_rule('max_length', 40);

    $val->add('login_password', 'パスワード')
			->add_rule('required')
      ->add_rule('valid_string',array('alpha','numeric'))
			->add_rule('max_length', 40);
		
		$val->add('email', 'メールアドレス')
			->add_rule('trim')
			->add_rule('required')
			->add_rule('valid_email')
			->add_rule('valid_emails')
			->add_rule('max_length', 255);

		$val->add('login_status', 'ログインステータス')
			->add_rule('trim')
			->add_rule('required')
			->add_rule('max_length', 1);

		return $val;
	}
}
