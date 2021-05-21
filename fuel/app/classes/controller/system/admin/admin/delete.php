<?php

class Controller_System_Admin_Admin_Delete extends Controller_System_Base
{
	public function action_index()
	{
		$id = Input::get('admin_id');
		$data['user']= Model_Admin::find_one_by('id',$id);
		$this->template->title = 'エントリー削除';
		$this->template->content = View::forge('system/admin/delete', $data);
	}

	public function action_completed()
	{
		$id = Input::post('id');
		$user= Model_Admin::find_one_by('id',$id);
 
    // CSRF対策
    if (! Security::check_token()) {
      $this->template->title = '不正な操作がありました。最初からやり直してください。';
      $this->template->content = View::forge('system/404');
      return;
    }

    try{
      $user['login_status'] = 0;
      $user->save();

    }catch(Exception $e){
      echo $e;
			exit;
    }

		$this->template->title = 'エントリー削除完了';
		$this->template->content = View::forge('system/admin/delete_completed');
	}
}
