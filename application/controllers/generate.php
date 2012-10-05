<?php
/**
 * Use this class to automatically generate files for Codeigniter.
 * This is to be used specifically with the file setup such as used
 * in the course Building a CMS with Codeigniter on tutsplus.com.
 *
 * Just place this in your appllication/controllers folder and run it.
 * NOTE: the ENVIRONMENT constant has to be set to 'development' or the
 * class will return a 404.
 * 
 * All filenames can be passed as a single filename, like:
 * filename
 * Or as a relative path, separated by backslahes and ending with the filename, like
 * some_folder\some_subfolder\filename
 *
 * Usage can be found in the docblocks with every method.
 * Parameters between brackets are optional.
 */
class Generate extends CI_Controller
{
	private $msg = array();

	public function __construct ()
	{
		parent::__construct();
		
		// This class should only be run in development!
		if (ENVIRONMENT != 'development') {
			show_404();
		}
		
		$this->load->helper('file');
		$this->load->helper('html');
	}

	/**
	 * Create a controller file in APPATH/controllers. Do not include '.php' in the name.
	 * 
	 * Typical usage:
	 * generate/controller/controller_name[/class_to_extend][/include_crud_methods]
	 * 
	 * @param string $name Separate subfolders with backslash folder1\folder2\class_name
	 * @param string $extends Defaults to NULL
	 * @param boolean $crud Defaults to FALSE
	 * @return void
	 * @author Joost van Veen
	 */
	public function controller ($name, $extends = NULL, $crud = FALSE)
	{
		$file = $this->_create_folders_from_name($name, 'controllers');
		
		$data = '';
		$data .= $this->_class_open($file['file'], __METHOD__, $extends);
		$crud === FALSE || $data .= $this->_crud_methods_contraller();
		$data .= $this->_class_close();
		$path = APPPATH . 'controllers/' . $file['path'] . strtolower($file['file']) . '.php';
		write_file($path, $data);
		$this->msg[] = 'Created controller ' . $path;
		echo $this->_messages();
	}

	/**
	 * Create a model file in APPATH/controllers. The model extends MY_Model as 
	 * used in the course. Do not include '.php' in the name.
	 * 
	 * Typical usage:
	 * generate/model/model_name[/table_name]
	 * 
	 * @param string $name Separate subfolders with backslash folder1\folder2\class_name
	 * @param string $table Defaults to emtpy string
	 * @return void
	 * @author Joost van Veen
	 */
	public function model ($name, $table = '')
	{
		$file = $this->_create_folders_from_name($name, 'models');
		
		$data = '';
		$data .= $this->_class_open($file['file'], 'MY_Model', 'MY_Model');
		$data .= $this->_crud_methods_model($table);
		$data .= $this->_class_close();
		$path = APPPATH . 'models/' . $file['path'] . strtolower($file['file']) . '.php';
		write_file($path, $data);
		$this->msg[] = 'Created model ' . $path;
		echo $this->_messages();
	}

	/**
	 * Create a view file (and folders, if they do not exist yet).  Do not 
	 * include '.php' in the name.
	 * 
	 * Typical usage:
	 * generate/view/folder1\folder2\folder3\filename
	 * 
	 * @param string $name Separate subfolders with backslash folder1\folder2\file_name
	 * @return void
	 * @author Joost van Veen
	 */
	public function view ($name)
	{
		$file = $this->_create_folders_from_name($name, 'views');
		
		$data = $this->_php_open();
		$path = APPPATH . 'views/' . $file['path'] . strtolower($file['file']) . '.php';
		write_file($path, $data);
		$this->msg[] = 'Created view file ' . $path;
		echo $this->_messages();
	}

	/**
	 * Create an empty library class. Do not include '.php' in the name.
	 * 
	 * Typical usage:
	 * generate/library/some_library[/class_to_extend]
	 * 
	 * @param string $name Separate subfolders with backslash folder1\folder2\class_name
	 * @param string $extends Defaults to NULL
	 * @return void
	 * @author Joost van Veen
	 */
	public function library ($name, $extends = NULL)
	{
		$file = $this->_create_folders_from_name($name, 'libraries');
		
		$data = '';
		$data .= $this->_class_open($file['file'], NULL, $extends);
		$data .= "\n\tpublic function __construct() {\n";
		$data .= "\t}\n";
		$data .= $this->_class_close();
		$path = APPPATH . 'libraries/' . $file['path'] . strtolower($file['file']) . '.php';
		write_file($path, $data);
		$this->msg[] = 'Created library ' . $path;
		echo $this->_messages();
	}

	/**
	 * Create an empty helper file. The extension _helper.php will automatically 
	 * be added. Do not include '.php' in the name.
	 * 
	 * Typical usage:
	 * generate/helper/some_helper
	 * 
	 * @param string $name Separate subfolders with backslash folder1\folder2\file_name
	 * @return void
	 * @author Joost van Veen
	 */
	public function helper ($name)
	{
		$file = $this->_create_folders_from_name($name, 'helpers');
		
		$data = $this->_php_open();
		strpos($file['file'], '_helper') || $file['file'] .= '_helper';
		$path = APPPATH . 'helpers/' . $file['path'] . strtolower($file['file']) . '.php';
		write_file($path, $data);
		$this->msg[] = 'Created helper file at ' . $path;
		echo $this->_messages();
	}

	/**
	 * Take the name of a file and traverse the folder path in that filename. 
	 * If the folders in the filename do not exist, create them.
	 * 
	 * Folders are separated by backslashes.
	 * 
	 * Typical usage:
	 * file - does nothing and just returns filname 'file'
	 * folder\file - creates folder 'folder' if it does not exist, and returns filename 'folder/file'
	 * folder\subfolder/file - creates folders 'folder' and 'folder/subfolder' if they do not exist, and returns filename 'folder/subfolder/file'
	 * 
	 * @param string $name [folder\][subfolder\]filename
	 * @param string $base_folder The base folder, relative to '/applications', e.g. 'views' or 'controllers'
	 * @return string The filepath
	 * @author Joost van Veen
	 */
	private function _create_folders_from_name ($name, $base_folder)
	{
		$this->load->helper('directory');
		$name = str_replace('%5C', '/', $name);
		
		// Check if folders exist. If not, create them.
		$folders = explode('/', $name);
		
		// Remove the last index, because that is the file
		$file = array_pop($folders);
		
		// Check if folders exist and create them if they don't
		$path = '';
		if (count($folders)) {
			$current_folder = directory_map(APPPATH . $base_folder);
			$current_path = APPPATH . $base_folder;
			foreach ($folders as $folder) {
				
				if (! isset($current_folder[$folder])) {
					$this->msg[] = 'Created new folder: ' . $folder;
					mkdir($current_path . '/' . $folder);
				}
				
				$current_folder = @$current_folder[$folder];
				$current_path .= '/' . $folder;
				$path .= $folder . '/';
			}
		}
		
		return array('path' => $path, 'file' => $file);
	}

	/**
	 * Return generic class opener
	 * @param string $name
	 * @param string $extends
	 * @return string
	 * @author Joost van Veen
	 */
	private function _class_open ($name, $type = NULL, $extends = NULL)
	{
		$string = '';
		$this->_php_open();
		$string .= "class " . ucfirst($name) . " ";
		if ($extends === NULL && $type !== NULL) {
			$string .= "extends CI_" . ucfirst(str_replace('Generate::', '', $type));
		}
		elseif ($extends !== NULL) {
			$string .= "extends $extends ";
		}
		$string .= "\n{";
		return $string;
	}

	/**
	 * Return generic CRUD methods for model
	 * @return string
	 * @author Joost van Veen
	 */
	private function _crud_methods_model ($table)
	{
		$string = '';
		
		$string .= "\n\tprotected \$_table_name = '$table'; // table name\n";
		$string .= "\tprotected \$_primary_key = 'id'; // Delete this if value is 'id'\n";
		$string .= "\tprotected \$_primary_filter = 'intval'; // Delete this if value is 'intval'\n";
		$string .= "\tprotected \$_order_by = '';\n";
		$string .= "\tprotected \$_timestamps = FALSE; // Delete this if value is FALSE\n";
		$string .= "\tpublic \$rules = array(\n";
		$string .= "\t\t'some_field => array('\n";
		$string .= "\t\t\t'field => '',\n";
		$string .= "\t\t\t'label => '',\n";
		$string .= "\t\t\t'rules => 'trim',\n";
		$string .= "\t\t),\n";
		$string .= "\t);\n";
		
		$string .= "\n\tpublic function __construct() {\n";
		$string .= "\t\tparent::__construct();\n";
		$string .= "\t}\n";
		return $string;
	}

	/**
	 * Return generic CRUD methods for controller
	 * @return string
	 * @author Joost van Veen
	 */
	private function _crud_methods_contraller ()
	{
		$string = '';
		$string .= "\n\tpublic function __construct() {\n";
		$string .= "\t\tparent::__construct();\n";
		$string .= "\n\t}\n";
		
		$string .= "\n\t/**\n";
		$string .= "\t * Fetch and display records\n";
		$string .= "\t * @return void\n";
		$string .= "\t */\n";
		$string .= "\tpublic function index() {\n";
		$string .= "\n\t}\n";
		$string .= "\n\t/**\n";
		
		$string .= "\t * Insert or update a record\n";
		$string .= "\t * @param int \$id Defaults to NULL\n";
		$string .= "\t * @return void\n";
		$string .= "\t */\n";
		$string .= "\tpublic function edit(\$id = NULL) {\n";
		$string .= "\n\t}\n";
		
		$string .= "\n\t/**\n";
		$string .= "\t * Delete a record\n";
		$string .= "\t * @param int \$id\n";
		$string .= "\t * @return void\n";
		$string .= "\t */\n";
		$string .= "\tpublic function delete(\$id) {\n";
		$string .= "\n\t}\n";
		return $string;
	}

	/**
	 * Return a generic class closing
	 * @return string
	 * @author Joost van Veen
	 */
	private function _class_close ()
	{
		return "\n}";
	}

	private function _php_open ()
	{
		return '<?php if ( ! defined(\'BASEPATH\')) exit(\'No direct script access allowed\');' . "\n";
	}

	/**
	 * Wrap $this->msg in HTML and return it to be displayed
	 * @return string
	 * @author Joost van Veen
	 */
	private function _messages ()
	{
		$string = '<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Generator script</title>
</head>
<body style="background: #FCF7E3;">
	<div style="width: 600px; margin: 40px auto; font-family: arial, sans-serif; background: #fff; border: 1px dotted #000; padding: 30px; ">
	<h1>Generator script run</h1>
		' . ul($this->msg) . '
	</div>
</body>
</html>';
		return $string;
	}
}