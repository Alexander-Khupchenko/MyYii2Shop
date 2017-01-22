<?php

namespace app\controllers;
use app\models\Category;
use app\models\Products;

class CategoryController extends AppController {
    
    public function actionIndex(){
        $hits = Products::find()->all();
        return $this->render('index', compact('hits'));
    }
    
    public function actionView($id){
        $category = Category::findOne($id);
        if(empty($category))
            throw new \yii\web\HttpException(404, 'Такой категории нет');
        $query = Products::find()->where(['categories_id' => $id]);
        $products = $query->all();
        
        return $this->render('view', compact('products'));
    }
    
    
}
