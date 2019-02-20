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
        var_dump($taskData,$taskId,$fromWorkerId);
        echo "执行task模板任务\n";
        //必须返回true才能执行finish
        return true;
        // TODO: Implement run() method.
    }
    function finish($result, $task_id)
    {
        echo "task模板任务完成\n";
        var_dump($result,$task_id);
        return 1;
        // TODO: Implement finish() method.
    }
}