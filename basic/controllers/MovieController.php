<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;

use app\models\Movie;
use app\models\MovieForm; 
 
class MovieController extends Controller
{
 

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        $movies = Movie::find()->all();
        return $this->render('index',
            [
               'movies' => $movies,
            ]);
    }

    /**
     * Remove movie.
     *
     * @return string
     */
    public function actionRemove()
    { 
        return $this->render('index');
    }


    /**
     * Edit movie.
     *
     * @return string
     */
    public function actionEdit()
    { 
        return $this->render('index');
    }

     /**
     * Add movie.
     *
     * @return string
     */
    public function actionAdd()
    { 
       $movieform = new MovieForm(); 
        if($movieform->load(\Yii::$app->request->post()) && $movieform->validate()){  
            var_dump(\Yii::$app->request->post());
            $name = \Yii::$app->request->getBodyParam('MovieForm')['name'];
            $price = \Yii::$app->request->getBodyParam('MovieForm')['price'];
            $description =\Yii::$app->request->getBodyParam('MovieForm')['description'];
            $img =\Yii::$app->request->getBodyParam('MovieForm')['img'];
            $movieform->img = UploadedFile::getInstance($movieform, 'img');
            $img = $movieform->img;
            
            $movie = new Movie();
            $movie->name = $name;
            $movie->price = $price;
            $movie->description = $description;
            $movie->img = $img;
            $movie->save(); 
            if ($movieform->upload()) {
         
                return;
            }

        
        } 
   
        return $this->render('add', compact('movieform'));
    }

}
