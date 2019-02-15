<?php
/**
 * Created by PhpStorm.
 * User: zhy
 * Date: 2019/2/15
 * Time: 16:48
 */

namespace App\HttpController;


use EasySwoole\Http\AbstractInterface\Controller;

class Index extends Controller
{
    function index()
    {
        // TODO: Implement index() method.
        $this->response()->write('hello laozaoyin');
    }

}