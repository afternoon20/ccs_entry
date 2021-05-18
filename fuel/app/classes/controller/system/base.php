<?php

use Auth\Auth;

class Controller_System_Base extends Controller_Template
{
	public $template = 'system/template_system';

	// ログインしていないかつ、トップページではない場合はトップページにリダイレクトする
	public function before()
	{
		parent::before();

		if(!Auth::check() && strcmp(Uri::current(),Uri::create('system/admin')) !== 0){
			if(strcmp(Uri::current(),Uri::create('system/admin/login')) !== 0){
				Response::redirect('system/admin');
			}
		}	
	}
}
