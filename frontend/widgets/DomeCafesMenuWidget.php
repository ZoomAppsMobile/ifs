<?php

namespace frontend\widgets;

use common\models\Menu;
use yii\base\Widget;

class DomeCafesMenuWidget extends Widget
{
    public function run()
    {
        $menu = \common\models\Menu::find()->where('status = 1')->all();

        return $this->render('domecafesmenu', compact('menu'));
    }
}