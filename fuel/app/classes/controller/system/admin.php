<?php

class Controller_System_Admin extends Controller_Template
{
	public $template = 'system/template_system';

	public function action_index()
	{
		if(Auth::check()){

		}else{
			$data["subnav"] = array('index'=> 'active' );
		  $this->template->title = 'ログイン';
		  $this->template->content = View::forge('system/admin/index', $data);
		}	
	}

	public function action_login()
	{
		
		if (Input::post()) {
	    if (Auth::login(Input::post('username'), Input::post('password'))){
				echo '成功';
				exit;
		  // ログイン成功
	    }else{
		  // ログイン失敗
			echo '失敗';
				exit;
	    }
    }
		$data["subnav"] = array('edit'=> 'active' );
		$this->template->title = 'ログイン成功';
		$this->template->content = View::forge('admin/edit', $data);
	}

	public function action_edit()
	{
		$data["subnav"] = array('edit'=> 'active' );
		$this->template->title = 'Admin &raquo; Edit';
		$this->template->content = View::forge('admin/edit', $data);
	}

	public function action_delete()
	{
		$data["subnav"] = array('delete'=> 'active' );
		$this->template->title = 'Admin &raquo; Delete';
		$this->template->content = View::forge('admin/delete', $data);
	}

	public function action_logout()
	{
		Auth::logout();
		Response::redirect('system/admin');
	}

}
