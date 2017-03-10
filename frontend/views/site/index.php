<?php

/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>
<div class="site-index">

    <div class="jumbotron">
        <h1>Yii2+Layim搭建的聊天系统</h1>


        <p><a class="btn btn-lg btn-success" href="http://www.yiiframework.com">Get started with Yii</a><a class="btn btn-lg btn-danger" href="http://layim.layui.com">Get started with LayIm</a></p>
        <p class="lead">登录后即可进行以下方式聊天.</p>
    </div>

    <div class="body-content">

        <div class="row">
            <div class="col-lg-4">
                <h2>移动端</h2>

                <?php
                foreach ($model as $value) {
                    echo '<p><a href="http://im.saber91.com/site/mobile?to='.$value->id.'">'.$value->username.'</a>'."</p>";
                }

                ?>

            </div>
            <div class="col-lg-4">
                <h2>带打赏的移动端</h2>
                <?php
                foreach ($model as $value) {
                    echo '<p><a href="http://im.saber91.com/site/mobile1?to='.$value->id.'">'.$value->username.'</a>'."</p>";
                }

                ?>
            </div>
            <div class="col-lg-4">
                <h2>电脑端</h2>

                <?php
                foreach ($model as $value) {
                    echo '<p><a href="http://im.saber91.com/site/pc?to='.$value->id.'">'.$value->username.'</a>'."</p>";
                }

                ?>
            </div>
        </div>

    </div>
</div>
