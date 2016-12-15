<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class LayuiMobileAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'layui/css/layui.mobile.css',
    ];
    public $js = [
        'layui/layui.js',
    ];
    public $jsOptions = [
        'position' => \yii\web\View::POS_HEAD
    ];
}
