<?php

class Controller_System_Admin extends Controller_System_Base
{
	public function action_index()
	{
		if(Auth::check()){
		  $this->template->title = '管理トップページ';
		}else{
		  $this->template->title = 'ログインページ';
		}
		$this->template->content = View::forge('system/index');
	}

	public function action_login()
	{	
		if (Auth::login(Input::post('username'), Input::post('password'))){
		  // ログイン成功
			Response::redirect('system/admin');

	    }else{
		  // ログイン失敗
			echo '失敗<br>';
			echo Input::post('username').'<br>'.Input::post('password');
			exit;
	    // }
    }
	}

	public function get_password()
	{
		$this->template->title = 'パスワードハッシュ化';
		$this->template->content = View::forge('system/admin/password');
	}

	public function action_register()
	{
		$this->template->title = 'エントリー削除画面';
		$this->template->content = View::forge('admin/delete', $data);
	}

	public function action_logout()
	{
		Auth::logout();
		$this->template->title = 'ログアウトしました。';
		$this->template->content = View::forge('system/admin/logout');
	}

}
