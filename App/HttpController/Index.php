<?php
/**
 * Created by PhpStorm.
 * User: zhy
 * Date: 2019/2/15
 * Time: 16:48
 */

namespace App\HttpController;


use EasySwoole\Http\AbstractInterface\Controller;
use EasySwoole\Http\Message\Status;

class Index extends Controller
{
    protected function onRequest(string $action): ?bool
    {

        $token = $this->request()->getQueryParam('token');
        if ($token != '111') {
            $this->response()->withStatus(Status::CODE_UNAUTHORIZED);
            $this->response()->write('no pass');
            return false;
        }
        return parent::onRequest($action); // TODO: Change the autogenerated stub
    }

    function onException(\Throwable $throwable): void
    {
        $this->response()->write('write for...');
    }

    function index()
    {
        // TODO: Implement index() method.
        $this->response()->write('hello laozaoyin');
    }

    function test()
    {
        $this->writeJson(Status::CODE_OK , ['a' => 111]);
        return;
        $this->response()->withHeader('Content-type', 'text/html;charset=utf-8');
        $this->response()->write('this is 测试');
    }

}