<?php

namespace app\models;

use yii\base\Model; 
use yii\web\UploadedFile;


class MovieForm extends Model
{   
 
    public $id_movie;
    public $name;
    public $price;
    public $description;
    public $img; 
 
    public function rules()
    {
        return [
            [['name', 'price'], 'required'],
            [['img'], 'file', 'skipOnEmpty' => true, 'extensions' => 'png, jpg'], 
        ];
    }

    public function upload()
    {
        if ($this->validate()) {
            $this->img->saveAs('uploads/' . $this->img->baseName . '.' . $this->img->extension);
            return true;
        } else {
            return false;
        }
    }

}
