<?php

namespace App\Controller;

use Delz\PhalconPlus\Mvc\Controller\Controller;

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
     * @Get("hprose")
     *
     * hprose客户端调用测试
     */
    public function hproseTestAction()
    {
        //网址部分请替换
        $client = new \Hprose\Http\Client('http://app2.dev/rpc.php', false);
        print_r($client->login("zhangsan", "123456"));
        //不调用模板
        return false;
    }

}