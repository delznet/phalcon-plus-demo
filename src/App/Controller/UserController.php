<?php

namespace App\Controller;

use App\Model\User;
use Delz\PhalconPlus\Mvc\Controller\Controller;
use Faker\Factory as FakerFactory;

/**
 * 用户模型测试操作类
 *
 * @package App\Controller
 * @RoutePrefix("/user")
 */
class UserController extends Controller
{
    /**
     * 显示最新20条
     * @Get("/")
     */
    public function indexAction()
    {
        $users = User::find(['limit' => 20]);
        foreach($users as $user) {
            echo $user->getName() . "<br />";
        }
    }

    /**
     * 随机添加100个用户
     * @Get("/add")
     */
    public function addAction()
    {
        $faker = FakerFactory::create('zh_CN');
        for ($i = 0; $i < 100; $i++) {
            $user = new User();
            $user->setName($faker->name);
            $user->setMobile($faker->phoneNumber);
            $user->setAddress($faker->address);
            $user->setCompany($faker->company);
            $user->save();
        }
        return 'done';
    }
}