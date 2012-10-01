<?php 
class Migration_Create_Sessions extends CI_Migration {

  public function up()
  {
    $fields = array(
      'session_id VARCHAR(40) DEFAULT \'0\' NOT NULL',
      'ip_address VARCHAR(45) DEFAULT \'0\' NOT NULL',
      'user_agent VARCHAR(120) NOT NULL',
      'last_activity INT(10) unsigned DEFAULT 0 NOT NULL',
      'user_data text NOT NULL'
    );

    $this->dbforge->add_field($fields);
    $this->dbforge->add_key('session_id', TRUE);
    $this->dbforge->create_table('ci_sessions');
	$this->db->query('ALTER TABLE `ci_sessions` ADD KEY `last_activity_idx` (`last_activity`)');  
  }

  public function down()
  {
    $this->dbforge->drop_table('ci_sessions');
  }

}