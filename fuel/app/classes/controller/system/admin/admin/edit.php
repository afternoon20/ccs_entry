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
      $entry_id = Input::post('entry_id');
      $user = Model_Admin::find_by_pk($entry_id);


      // CSRF対策
		  // if ( ! Security::check_token()){
			//   $this->template->title = '不正な操作がありました。最初からやり直してください。';
			//   $this->template->content = View::forge('system/404');
			//   return;
		  // }

      $val = $this->forge_validation();

      // if (!$val->run())
		  // {
			// 	$data['user'] = Input::post();
			//   $this->template->title = '管理者編集(エラー)';
			//   $this->template->content = View::forge('system/admin/edit',$data);
			//   $this->template->content->set_safe('html_error', $val->show_errors());
			//   return;
		  // }

      // try{
      //   // データベース更新
			// 	$user['admin_permission_show'] = Input::post('admin_permission_show');
      //   // $user['admin_permission_edit'] = Input::post('admin_permission_edit');
      //   // $user['admin_permission_delete'] = Input::post('admin_permission_delete');
      //   // $user['login_nickname'] = Input::post('login_nickname');
      //   // $user['username'] = Input::post('username');

      //   if(is_null(Input::post('login_password'))){
      //     // Authでパスワード変更？
      //   }

      //   // $user['login_status'] = Input::post('login_status');
        
        $user->save();
				Response::redirect("system/admin/sdmin/edit?entry_id=".$entry_id);

        
      // } catch(Exception $e){
			// 	echo $e;
			//   exit;
      // }


    }	
	}



    // 検証ルールの定義
	public function forge_validation()
	{
		$val = Validation::forge();

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

    $val->add('login_password', 'パスワード')
			->add_rule('max_length', 40)
      ->add_rule('valid_string',array('alpha','numeric'));

		
		$val->add('login_status', 'ログインステータス')
			->add_rule('trim')
			->add_rule('required')
			->add_rule('max_length', 1);

		return $val;
	}





	// public function action_edit()
	// {
	// 	$data["subnav"] = array('edit'=> 'active' );
	// 	$this->template->title = 'Admin &raquo; Edit';
	// 	$this->template->content = View::forge('admin/edit', $data);
	// }

	// public function action_delete()
	// {
	// 	$data["subnav"] = array('delete'=> 'active' );
	// 	$this->template->title = 'Admin &raquo; Delete';
	// 	$this->template->content = View::forge('admin/delete', $data);
	// }

}
