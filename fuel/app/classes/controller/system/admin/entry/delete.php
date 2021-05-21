<?php

class Controller_System_Admin_Entry_Delete extends Controller_System_Base
{
	public $template = 'system/template_system';

	public function action_index()
	{
		$entry_id = Input::get('entry_id');
		$data['entry']= Model_Entry::find_one_by('entry_id',$entry_id);
		$this->template->title = 'エントリー削除';
		$this->template->content = View::forge('system/entry/delete', $data);
	}

	public function action_completed()
	{
		$entry_id = Input::post('entry_id');
    $entry = Model_Entry::find_by_pk($entry_id);
 
    if($entry){
      $entry->delete();
    }
    		
		$this->template->title = 'エントリー削除完了';
		$this->template->content = View::forge('system/entry/delete_completed');
	}

}
