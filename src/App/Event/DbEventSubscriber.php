<?php

namespace App\Event;

use Delz\PhalconPlus\Event\EventSubscriber;

/**
 * 数据库监听
 *
 * @package App\Event
 */
class DbEventSubscriber extends EventSubscriber
{
    protected $eventType = 'db';

    /**
     * {@inheritdoc}
     */
    public function getEvents():array
    {
        return [
            'db:beforeQuery' => [
                ['Delz\PhalconPlus\EventListener\DbProfilerListener', 1],
                ['Delz\PhalconPlus\EventListener\DbLogListener', 1]
            ],
            'db:afterQuery' => [
                ['Delz\PhalconPlus\EventListener\DbProfilerListener', 1]
            ],
        ];
    }
}