<?php
use yii\helpers\Html;
use yii\helpers\Url;
?>

<div>
    <h1>О КОМПАНИИ</h1>
</div>
<div>
    <h1>ПОПУЛЯРНЫЕ ТОВАРЫ</h1>
    <?php foreach ($hits as $hit): ?>
        <a href="<?= Url::to(['product/view', 'id' => $hit->id])?>"><?= Html::img("@web/images/products/{$hit->img}", ['alt' => $hit->name])?></a>
        <a href="<?= Url::to(['product/view', 'id' => $hit->id])?>"><?= $hit->name?></a>
    <?php endforeach; ?>
</div>
<div>
    <h1>ПОПУЛЯРНЫЕ МАРКИ</h1>
</div>
<div>
    <h1>СТАТЬИ</h1>
</div>
<?php 
