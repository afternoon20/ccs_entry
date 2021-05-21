<?php

namespace Fuel\Migrations;

// 使用しないデフォルトのカラム以外は手動で追加
class Create_ccs_admin
{
	public function up()
	{
		\DBUtil::create_table('ccs_admin', array(
			'admin_id' => array('type' => 'int', 'unsigned' => true, 'null' => false, 'auto_increment' => true, 'constraint' => '11'),
			'admin_permission_general' => array('null' => false, 'type' => 'bigint','default' => 0),
			'admin_permission_show' => array('null' => false, 'type' => 'bigint','default' => 0),
			'admin_permission_edit' => array('null' => false, 'type' => 'bigint','default' => 0),
			'admin_permission_delete' => array('null' => false, 'type' => 'bigint','default' => 0),
			'login_nickname' => array('constraint' => 40, 'null' => false, 'type' => 'varchar'),
			'login_id' => array('constraint' => 255, 'null' => false, 'type' => 'varchar'),
			'login_password' => array('constraint' => 40, 'null' => false, 'type' => 'varchar'),
			'login_passport' => array('constraint' => 255, 'null' => false, 'type' => 'varchar'),
			'login_time' => array('null' => false, 'type' => 'bouble', 'unsigned' => false),
			'login_status' => array('null' => false, 'type' => 'smallint','default' => 0),
		),array('admin_id'));
	}

	public function down()
	{
		\DBUtil::drop_table('ccs_admin');
	}
}