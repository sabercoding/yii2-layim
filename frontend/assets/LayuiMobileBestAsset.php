<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class LayuiMobileBestAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'layui/css/layui.mobile.css',
        'css/layer.css'
    ];
    public $js = [
        'layui/layui.js',
        'js/jquery.min.js',
        'layui/lay/modules/layer.js',
    ];
    public $jsOptions = [
        'position' => \yii\web\View::POS_HEAD
    ];
}
