<?php

namespace app\controllers;
use app\models\Category;

class CategoryController extends AppController {
    
    public function actionIndex()
    {
        return $this->render('index');
    }
    
}
