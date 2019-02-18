<?php
/**
 * Created by PhpStorm.
 * User: zhy
 * Date: 2019/2/15
 * Time: 16:48
 */

namespace App\HttpController;


use App\Task\TaskRunner;
use EasySwoole\EasySwoole\Swoole\Task\TaskManager;
use EasySwoole\Http\AbstractInterface\Controller;
use EasySwoole\Http\Message\Status;

class Index extends Controller
{
    function onException(\Throwable $throwable): void
    {
        $this->response()->write('write for...');
    }

    function index()
    {
        TaskManager::async(TaskRunner::class);
        $this->response()->write('1');
    }

    function test()
    {
        $this->response()->withHeader('Content-type', 'text/html;charset=utf-8');
        $this->response()->write('this is 测试');
    }

}