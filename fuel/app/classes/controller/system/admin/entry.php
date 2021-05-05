<?php

class Controller_System_Admin_Entry extends Controller_Template
{
	public $template = 'system/template_system';

	public function action_index()
	{
		$data['entries']=$entries = Model_Entry::find_all();
		$this->template->title = 'エントリー一覧';
		$this->template->content = View::forge('system/entry/index',$data);
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

}
