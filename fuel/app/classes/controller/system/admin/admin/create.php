<?php

class Controller_System_Admin_Admin_Create extends Controller_System_Base
{
	public function action_index()
	{
		$this->template->title = 'ユーザー新規作成';
		$this->template->content = View::forge('system/admin/create/index');
	}



}
