<?php

namespace app\controllers;
 
use app\core\Controller;
use app\core\View;
use app\models\Portfoliomodel; 

class Portfoliocontroller extends Controller{
    function __construct()
	{
		$this->model = new Portfoliomodel();
		$this->view = new View();
	}
	
    public function indexaction(){
        $data = $this->model->get_data();
        $content_view = "portfolio_template.php"; 
        $this->view->generate($content_view,$this->template_view, $data);
    } 
}