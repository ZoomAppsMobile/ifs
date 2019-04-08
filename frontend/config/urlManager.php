<?php

/** @var array $params */

return [
        'class' => 'yii\web\UrlManager',
    //    'hostInfo' => 'http://azialife',
        'baseUrl' => '',
        'enablePrettyUrl' => true,
        'showScriptName' => false,
        'cache' => false,
        'rules' => [
			'search'=>'search',
            'reviews' => 'reviews/index',
//            'reviews/<url:\w+>' => 'reviews/review',
			'lang/<url:\w+>'=>'lang/index',
            'services/<url:\w+>' => 'menu',
            'services/<url1:\w+>/<url:\w+>' => 'menu/menu',
            'projects/<url:\w+>' => 'menu/project',
            'news/<url:\w+>' => 'menu/new',
            'news/<url:\w+>' => 'news',
            'sustainable_development' => 'sustainable',
            'sustainable_development/<url:\w+>' => 'sustainable/menu',
            'tenders' => 'site/tenders',
            'sitemap' => 'site/sitemap',
            '<url:\w+>' => 'site/<url>',

            '<controller:\w+>/<id:\d+>'=>'<controller>/view',
            '<controller:\w+>/<action:\w+>/<id:\d+>'=>'<controller>/<action>',
            '<controller:\w+>/<action:\w+>'=>'<controller>/<action>',
    ],
];