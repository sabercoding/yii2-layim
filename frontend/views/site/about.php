<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use frontend\assets\LayuiMobileAsset;

LayuiMobileAsset::register($this);
$this->title = 'About';
$this->params['breadcrumbs'][] = $this->title;

?>
<h4>君以国士待我，我当以国士报之！</h4>

<a href="https://shuibo.me" >saber</a>