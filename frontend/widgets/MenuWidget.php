<?php

namespace frontend\widgets;

use common\models\Menu;
use yii\base\Widget;

class MenuWidget extends Widget
{
    public function run()
    {
        $menu = \common\models\Menu::find()->where('status = 1')->all();

        return $this->render('menu', compact('menu'));
    }
}