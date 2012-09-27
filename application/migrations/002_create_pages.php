<?php
class Migration_Create_pages extends CI_Migration {

	public function up()
	{
		$this->dbforge->add_field(array(
			'id' => array(
				'type' => 'INT',
				'constraint' => 11,
				'unsigned' => TRUE,
				'auto_increment' => TRUE
			),
			'title' => array(
				'type' => 'VARCHAR',
				'constraint' => '100',
			),
			'slug' => array(
				'type' => 'VARCHAR',
				'constraint' => '100',
			),
			'order' => array(
				'type' => 'INT',
				'constraint' => '11',
			),
			'body' => array(
				'type' => 'TEXT',
			),
		));
		$this->dbforge->add_key('id', TRUE);
		$this->dbforge->create_table('pages');
	}

	public function down()
	{
		$this->dbforge->drop_table('pages');
	}
}