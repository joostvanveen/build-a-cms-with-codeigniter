<h3>Migration</h3>
<?php
if ($this->migration->error_string()) {
	echo $this->migration->error_string();
}else {
	echo 'No migration errors found';
} 
?>