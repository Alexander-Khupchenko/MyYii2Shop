<?php

namespace app\components;
use yii\base\Widget;

/**
 * Description of SidebarWidget
 *
 * @author Oleksander Khupchenko
 */
class SidebarWidget extends Widget {
    
    public $tpl;
    
    public function init() {
        parent::init();
        if($this->tpl === null) {
            $this->tpl = 'menu';
        }
        $this->tpl .= '.php';
    }
    
    public function run() {
        include __DIR__ . '/sidebar_tpl/' . $this->tpl;
    }
}
