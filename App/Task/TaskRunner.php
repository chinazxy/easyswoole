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
    protected function run($taskData,$taskId,$fromWorkerId,$flags = null)
    {
        echo "执行task模板任务\n";
        // TODO: Implement run() method.
    }
    function finish($result, $task_id)
    {
        echo "task模板任务完成\n";
        return 1;
        // TODO: Implement finish() method.
    }
}