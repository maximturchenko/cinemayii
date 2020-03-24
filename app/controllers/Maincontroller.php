<?php

namespace app\controllers;
 
use app\core\Controller;

class Maincontroller extends Controller{
  
    public function indexaction()
	{
        $content_view = "main_template.php";
        $this->view->generate($content_view,$this->template_view);
	}
}