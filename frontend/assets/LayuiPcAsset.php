<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class LayuiPcAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'layui/css/layui.css'
    ];
    public $js = [
        'layui/layui.js',
    ];
    public $jsOptions = [
        'position' => \yii\web\View::POS_HEAD
    ];
}
