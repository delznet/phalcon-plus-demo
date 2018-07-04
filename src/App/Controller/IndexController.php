<?php

namespace App\Controller;

use Delz\PhalconPlus\Mvc\Controller\Controller;
use Delz\PhalconPlus\Hprose\Server;

/**
 * @RoutePrefix("/")
 */
class IndexController extends Controller
{
    /**
     * @Get(
     *     ""
     * )
     */
    public function indexAction()
    {

    }

    /**
     * @Route(
     *     "rpc",
     *     methods={"POST", "GET"},
     *     name="rpc"
     * )
     *
     * rpc服务端
     */
    public function rpcAction()
    {
        $server = new Server($this->di);
        $server->start();
        return false;
    }

    /**
     * @Get("hprose")
     *
     * hprose客户端调用测试
     */
    public function hproseTestAction()
    {
        //网址部分请替换
        $client = new \Hprose\Http\Client('http://app2.dev/rpc', false);
        print_r($client->login("zhangsan", "123456"));
        //不调用模板
        return false;
    }

}