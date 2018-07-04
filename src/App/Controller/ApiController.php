<?php

namespace App\Controller;

use Delz\PhalconPlus\Mvc\Controller\JsonController;

/**
 * @RoutePrefix("/api")
 * @package App\Controller
 */
class ApiController extends JsonController
{
    /**
     * @Get("/")
     */
    public function indexAction()
    {
        return ["id" => 123];
    }
}