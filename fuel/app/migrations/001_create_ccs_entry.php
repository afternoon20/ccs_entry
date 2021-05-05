<?php

namespace Fuel\Migrations;

class Create_ccs_entry
{
	public function up()
	{
		\DBUtil::create_table('ccs_entry', array(
			'entry_id' => array('type' => 'int', 'unsigned' => true, 'null' => false, 'auto_increment' => true, 'constraint' => '11'),
			// 'entry_id' => array('constraint' => '11', 'null' => false, 'type' => 'int'),
			'entry_name' => array('constraint' => 40, 'null' => false, 'type' => 'varchar'),
			'entry_ruby' => array('constraint' => 40, 'null' => false, 'type' => 'varchar'),
			'entry_register_time' => array('constraint' => '11', 'null' => true, 'type' => 'int', 'unsigned' => true),
		), array('entry_id'));
	}

	public function down()
	{
		\DBUtil::drop_table('ccs_entry');
	}
}