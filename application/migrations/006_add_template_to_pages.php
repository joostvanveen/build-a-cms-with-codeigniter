<?php
class Migration_Add_template_to_pages extends CI_Migration {

	public function up()
	{
		$fields = (array(
			'template' => array(
				'type' => 'VARCHAR',
				'constraint' => '25',
			),
		));
		$this->dbforge->add_column('pages', $fields);
	}

	public function down()
	{
		$this->dbforge->drop_column('pages', 'template');
	}
}