<?php

namespace Fuel\Migrations;

class Create_ccs_entry
{
	public function up()
	{
		\DBUtil::create_table('ccs_entry', array(
			'entry_id' => array('type' => 'int', 'unsigned' => true, 'null' => false, 'auto_increment' => true, 'constraint' => '11'),
			'entry_name' => array('constraint' => 40, 'null' => false, 'type' => 'varchar'),
			'entry_ruby' => array('constraint' => 40, 'null' => false, 'type' => 'varchar'),
			'entry_birthday' => array('null' => false, 'type' => 'double','default' => 0),
			'entry_prefecture' => array('null' => false, 'type' => 'smallint','default' => 0),
			'entry_address' => array('constraint' => 255, 'null' => false, 'type' => 'varchar'),
			'entry_telephone_h' => array('constraint' => 5, 'null' => false, 'type' => 'varchar'),
			'entry_telephone_m' => array('constraint' => 4, 'null' => false, 'type' => 'varchar'),
			'entry_telephone_l' => array('constraint' => 4, 'null' => false, 'type' => 'varchar'),
			'entry_email' => array('constraint' => 255, 'null' => false, 'type' => 'varchar'),
			'entry_magazine' => array('null' => false, 'type' => 'smallint','default' => 0),
			'entry_magazine_type' => array('null' => false, 'type' => 'smallint','default' => 0),
			'entry_transfer' => array('null' => false, 'type' => 'smallint','default' => 0),
			'entry_magazine_type' => array('null' => true, 'type' => 'smallint','default' => 0),
			'entry_transfer' => array('null' => false, 'type' => 'smallint','default' => 0),
			'entry_register_time' => array('constraint' => '11', 'null' => false, 'type' => 'bouble', 'unsigned' => false),
		), array('entry_id'));
	}

	public function down()
	{
		\DBUtil::drop_table('ccs_entry');
	}
}