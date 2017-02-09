<?php
namespace frontend\controllers;

use Yii;
use yii\web\Controller;

/**
 * Site controller
 */
class FileController extends Controller {

    public $enableCsrfValidation = false;

    public function actionUpload() {
        $ext = '';
        if ($_FILES["file"]["size"] > 30000) {
            return \yii\helpers\Json::encode(['code' => 1, 'msg' => '文件超过最大限制30kb', 'data' => ['src' => $ext]]);
        }
        if (($_FILES["file"]["type"] != "image/gif") && ($_FILES["file"]["type"] != "image/jpeg") && ($_FILES["file"]["type"] != "image/pjpeg") && ($_FILES["file"]["type"] != "image/png") && ($_FILES["file"]["type"] != "image/PNG")) {
            return \yii\helpers\Json::encode(['code' => 2, 'msg' => '文件格式不支持', 'data' => ['src' => $ext]]);
        }

        if ($_FILES["file"]["error"] > 0) {
            return \yii\helpers\Json::encode(['code' => 3, 'msg' => $_FILES["file"]["error"], 'data' => ['src' => $ext]]);
        } else {
            $file_name = $_FILES["file"]["name"];
            if (file_exists($file_name)) {
                $file_name = $_FILES["file"]["name"].time();
            }
        }
        move_uploaded_file($_FILES["file"]["tmp_name"], $file_name);
        $ext = 'http://im.saber91.com/'.$file_name;
        return \yii\helpers\Json::encode(['code' => 0, 'msg' => '', 'data' => ['src' => $ext]]);
    }
}
