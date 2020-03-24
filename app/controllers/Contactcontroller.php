<?php

namespace app\controllers;
 
use app\core\Controller;

class Contactcontroller extends Controller{
 

    public function showaction(){
        $content_view = "main_template.php";
        $this->view->generate($content_view , $this->template_view);
    }

}