<?php
namespace Admin\Controller;
use Think\Controller;

class CommonController extends Controller {
	public function _initialize(){
		// 获取当前用户ID
        define('UID',is_login());
        // var_dump(UID);exit;
        if( !UID ){// 还没登录 跳转到登录页面
            $this->redirect('User/login');
        }
	}
}
?>