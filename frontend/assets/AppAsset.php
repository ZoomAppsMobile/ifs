<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
       "/css/superfish.css",
       "/css/bootstrap.css",
       "/css/owl.theme.default.min.css",
       "/css/owl.carousel.min.css",
       "/css/animate.css",
       "/css/style.css",
       "/css/magnific-popup.css",
       "/css/iEdit.min.css",
       "/css/xzoom.css",
    ];
    public $js = [
        "/js/jquery-3.2.1.min.js",
        "/js/bootstrap.min.js",
        "/js/superfish.min.js",
        "/js/jquery.magnific-popup.min.js",
        "/js/xzoom.min.js",
        "/js/lightgallery-all.min.js",
        "/js/wow.min.js",
        "/js/jquery.bxslider.min.js",
        "/js/iEdit.min.js",
        "/js/owl.carousel.min.js",
        "/js/main.js",
        "/js/scripts.js",
    ];
    public $depends = [
//        'yii\web\YiiAsset',
//        'yii\bootstrap\BootstrapAsset',
    ];
}
