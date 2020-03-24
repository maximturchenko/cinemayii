<?php

namespace app\core;
 
class Route{

    public function run(){
      $req_url = trim($_SERVER['REQUEST_URI'],"/");
      $req_url = explode("/", $req_url);
      

        $controller = 'Main';
        $action = 'index';

        if(!empty($req_url[0])){
            $controller = $req_url[0];
        }
        if(!empty($req_url[1])){
            $action = $req_url[1];;
        }


        $model = "app\models\\".ucfirst($controller)."model";
        $controller = "app\controllers\\".ucfirst($controller)."controller";
        $action = $action."action";

        debug($controller);
        debug($action);
        debug($model);

        $controller_path = $controller.".php";
        $model_path = $model.".php";
   
  
        if(file_exists($model_path)){
            $this->model = new $model;
        }

        if(file_exists($controller_path)){
            $controller = new $controller;
        }else{
           // Route::ErrorPage404();
        }

        if(method_exists($controller , $action)){
            $controller->$action();
        }else{
           // Route::ErrorPage404();
        }


    }

    function ErrorPage404()
	{
        $host = 'http://'.$_SERVER['HTTP_HOST'].'/';
        header('HTTP/1.1 404 Not Found');
		header("Status: 404 Not Found");
		header('Location:'.$host.'404');
    }

}