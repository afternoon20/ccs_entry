<?php

class Model_Entry extends \Model_Crud
{
	protected static $_table_name = 'ccs_entry';
	protected static $_primary_key = 'entry_id';
	protected static $_created_at = 'entry_register_time';

}
