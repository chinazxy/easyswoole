<?php
/**
 * Created by PhpStorm.
 * User: zhy
 * Date: 2019/2/18
 * Time: 17:13
 */

namespace App\Task;


use EasySwoole\EasySwoole\ServerManager;
use EasySwoole\EasySwoole\Swoole\Task\AbstractAsyncTask;

class TaskRunner extends AbstractAsyncTask
{
    function run($taskData, $taskId, $fromWorkerId, $flags = null)
    {
        var_dump(1111);
    }

    function finish($result, $task_id)
    {
        var_dump('taskrunner done');
    }


}