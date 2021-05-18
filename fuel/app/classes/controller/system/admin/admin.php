<?php

class Controller_System_Admin_Admin extends Controller_System_Base
{

	public function action_index()
	{
		$data['users']= Model_Admin::find_all();
		$this->template->title = '管理者一覧';
		$this->template->content = View::forge('system/admin/index',$data);
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
