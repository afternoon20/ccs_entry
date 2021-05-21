<?php

class Controller_System_Admin_Admin_Edit extends Controller_System_Base
{
	public function action_index()
	{
    if(Input::method() == 'GET'){
      $data['user']= Model_Admin::find_by_pk(Input::get('admin_id'));
		  $this->template->title = '管理者編集';
		  $this->template->content = View::forge('system/admin/edit',$data);
    // 保存ボタン押下
    }elseif(Input::method() == 'POST'){
      $id = Input::post('id');
      $user = Model_Admin::find_by_pk($id);

      // CSRF対策
		  if ( ! Security::check_token()){
			  $this->template->title = '不正な操作がありました。最初からやり直してください。';
			  $this->template->content = View::forge('system/404');
			  return;
		  }

      $val = $this->forge_validation();

      if (!$val->run())
		  {
				$data['user'] = Input::post();
			  $this->template->title = '管理者編集(エラー)';
			  $this->template->content = View::forge('system/admin/edit',$data);
			  $this->template->content->set_safe('html_error', $val->show_errors());
			  return;
		  }

      try{
      //   // データベース更新
				$user['admin_permission_show'] = Input::post('admin_permission_show');
        $user['admin_permission_edit'] = Input::post('admin_permission_edit');
        $user['admin_permission_delete'] = Input::post('admin_permission_delete');
        $user['login_nickname'] = Input::post('login_nickname');
        
        $user['login_status'] = Input::post('login_status');

        // パスワード変更
        if(is_null(Input::post('login_password'))){
          $result =Auth::update_user(
            array(
              'password' => Input::post('password'),
              'old_password' => Input::post('old_login_password'),
            ),
            $user['username']
          );
        }

        $user['username'] = Input::post('username');
        $user->save();
				Response::redirect("system/admin/admin/edit?admin_id=".$id);
 
      } catch(Exception $e){
				echo $e;
			  exit;
      }
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

    $val->add('username', 'ログインID')
			->add_rule('trim')
			->add_rule('required')
			->add_rule('min_length', 6)
			->add_rule('max_length', 40);
    
    $val->add('login_password', '新しいパスワード')
			->add_rule('required_with', 'old_login_password')
      ->add_rule('valid_string',array('alpha','numeric'))
			->add_rule('max_length', 40);

    $val->add('old_login_password', '現在のパスワード')
			->add_rule('required_with', 'login_password')
      ->add_rule('valid_string',array('alpha','numeric'))
			->add_rule('max_length', 40);

		$val->add('login_status', 'ログインステータス')
			->add_rule('trim')
			->add_rule('required')
			->add_rule('max_length', 1);

		return $val;
	}
}
