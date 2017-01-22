<?php

use app\assets\AppAsset;
use app\components\HeaderMenuWidget;
use app\components\SidebarWidget;
use app\components\LangWidget;

AppAsset::register($this);
?>

<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Document</title>
    <?php $this->head() ?>    
    </head>
    <body>
    <?php $this->beginBody() ?>
        <div class="container">
            <header class="header">
                <?= LangWidget::widget();?>
                <div class="viewlang">
                    <?= Yii::t('main', 'blog')?>
                    <?= Yii::t('main', 'joke')?>
                    <?= Yii::t('main', 'login')?>
                </div>
                <div id="logo">
                    <h1>ЛОГО</h1>
                </div>
                <div id="search">
                    <h1>ПОИСК</h1>
                </div>
                <div id="basket">
                    <h1>КОРЗИНА</h1>
                </div>
                <div class="clearfix"></div>
                <div id="headerMenu">
                    <?= HeaderMenuWidget::widget() ?> 
                </div>    
            </header>
            <div id="sidebar" class="col-md-3">
                <?= SidebarWidget::widget() ?>
            </div>
            <div id="content" class="col-md-9">
                <?= $content ?>
            </div>
            <div class="clearfix"></div>
            <footer class="footer">

            </footer>
        </div>    
    <?php $this->endBody() ?>    
    </body>
</html>
<?php $this->endPage() ?>