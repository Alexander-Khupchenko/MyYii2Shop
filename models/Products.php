<?php

namespace app\models;
use yii\db\ActiveRecord;

/**
 * This is the model class for table "products".
 *
 * @property string $id
 * @property string $categories_id
 * @property string $name
 * @property string $content
 * @property double $price
 * @property string $img
 */
class Products extends ActiveRecord
{
    public static function tableName()
    {
        return 'products';
    }

    public function rules()
    {
        return [
            [['categories_id', 'name', 'price'], 'required'],
            [['categories_id'], 'integer'],
            [['content'], 'string'],
            [['price'], 'number'],
            [['name', 'img'], 'string', 'max' => 255],
        ];
    }

    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'categories_id' => 'Categories ID',
            'name' => 'Name',
            'content' => 'Content',
            'price' => 'Price',
            'img' => 'Img',
        ];
    }
    
    public function getCategory() {
        return $this->hasOne(Category::className(), ['id' => 'categories_id']);
    }
}
