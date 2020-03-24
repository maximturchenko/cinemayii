<?php

namespace app\core;

class Controller {
 
    public $model;
    public $view;
    public $template_view = "default_template.php";
	
	function __construct()
	{
		$this->view = new View();
	}
	

}