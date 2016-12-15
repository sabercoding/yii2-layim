<?php

namespace console\controllers;

use Yii;
use yii\console\Controller;
use \Workerman\Worker;
use \GatewayWorker\Register;
use \Workerman\WebServer;
use \GatewayWorker\Gateway;
use \GatewayWorker\BusinessWorker;
use \Workerman\Autoloader;

/**
 * workerman controller
 *
 * @author Cosmo <sabercoding@gmail.com>
 */
class WorkerController extends Controller {
    /**
     *
     * @return string
     */
    public function actionRun() {
        $register = new Register('text://0.0.0.0:1238');


// bussinessWorker 进程
        $worker = new BusinessWorker();
// worker名称
        $worker->name = 'YourAppBusinessWorker';
// bussinessWorker进程数量
        $worker->count = 4;
// 服务注册地址
        $worker->registerAddress = '127.0.0.1:1238';

        
// gateway 进程，这里使用Text协议，可以用telnet测试
        $gateway = new Gateway("Websocket://0.0.0.0:8282");
// gateway名称，status方便查看
        $gateway->name = 'YourAppGateway';
// gateway进程数
        $gateway->count = 4;
// 本机ip，分布式部署时使用内网ip
        $gateway->lanIp = '127.0.0.1';
// 内部通讯起始端口，假如$gateway->count=4，起始端口为4000
// 则一般会使用4000 4001 4002 4003 4个端口作为内部通讯端口 
        $gateway->startPort = 2900;
// 服务注册地址
        $gateway->registerAddress = '127.0.0.1:1238';

        Worker::runAll();
    }

}
