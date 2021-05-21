<?php

class Controller_System_Admin_Admin extends Controller_System_Base
{

	public function action_index()
	{
		$data['users']= Model_Admin::find_all();
		$this->template->title = '管理者一覧';
		$this->template->content = View::forge('system/admin/index',$data);
	}

}
