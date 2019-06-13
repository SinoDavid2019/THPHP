<?php
/**
 * Created by PhpStorm.
 * User: sino
 * Date: 2019/6/13
 * Time: 10:52
 */

namespace app\admin\controller;

use think\Controller;

class Login extends Controller
{
    public function index()
    {
        return $this->fetch();
    }

    public function check()
    {
        $data = input('post.');
        if (!captcha_check($data['code'])) {
            $this->error('验证码错误');
        } else {
            $this->success('OK');
        }
    }

    public function welcome()
    {
        return "API CUSTOM";
    }
}