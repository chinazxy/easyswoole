<?php
/**
 * Created by PhpStorm.
 * User: zhy
 * Date: 2019/2/18
 * Time: 17:13
 */

namespace App\Task;


use EasySwoole\EasySwoole\Swoole\Task\AbstractAsyncTask;

class TaskRunner extends AbstractAsyncTask
{
    protected function run($taskData, $taskId, $fromWorkerId, $flags = null)
    {
        var_dump('this is taskrunner');
    }

    protected function finish($result, $task_id)
    {
        var_dump('taskrunner done');
    }


}