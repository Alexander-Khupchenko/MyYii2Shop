<?php

namespace app\components;
use yii\base\Widget;

/**
 * Description of HeaderMenuWidget
 *
 * @author Oleksander Khupchenko
 */
class HeaderMenuWidget extends Widget {
    
    public $tpl;
    
    public function init() {
        parent::init();
        if($this->tpl === null) {
            $this->tpl = 'menu';
        }
        $this->tpl .= '.php';
    }
    
    public function run() {
        include __DIR__ . '/header_menu_tpl/' . $this->tpl;
    }
}