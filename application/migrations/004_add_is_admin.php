<?php
class Migration_Add_is_admin extends CI_Migration
{

	public function up ()
	{
		$fields = array(
			'is_admin' => array(
				'type' => 'int', 
				'constraint' => '4', 
				'default' => '-1'
			)
		);
		$this->dbforge->add_column('users', $fields);
	}

	public function down ()
	{
		$this->dbforge->drop_column('users', 'is_Admin');
	}
}