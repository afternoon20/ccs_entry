<?php

class Controller_System_Admin_Entry extends Controller_System_Base
{
	public $template = 'system/template_system';

	public function action_index()
	{
		$data['entries']= Model_Entry::find_all();
		$this->template->title = 'エントリー一覧';
		$this->template->content = View::forge('system/entry/index',$data);
	}
}
