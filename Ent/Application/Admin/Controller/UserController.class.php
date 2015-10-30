<?php
namespace Admin\Controller;
use Think\Controller;
class UserController extends Controller {
    public function index(){
        
    }
     /**
     * 后台用户登录
     */
    public function login($username = null, $password = null, $verify = null){
        if(IS_POST){
            /* 检测验证码 TODO: */
            if(!check_verify($verify)){
                $this->error('验证码输入错误！');
            }

            $db = M('user');
            $map['username'] = $username;
            $map['status'] = 1;
            $user = $db->where($map)->find();
            if(!$user){
            	$userExit=$db->where('username'."='$username'")->find();
            	if($userExit)
            	{
            		$this->error('帐号被禁用');
            	}
            	else
            	{
            		$this->error('帐号不存在');
            	}
                
            }
            if($user['password'] != md5($password)){
                $this->error('密码错误');
            }

            /* 记录登录SESSION和COOKIES */
            $auth = array(
                'uid'             => $user['id'],
                'username'        => $user['username'],
                'fullname'        => $user['fullname'],
                'rid'             => $user['role_id'],
            );
            session('user', $auth);
            $this->success('登录成功！', U('Index/index'));

        } else {
            if(is_login()){
                $this->redirect('Index/index');
            }else{
                $this->display();
            }
        }
    }
    /* 退出登录 */
    public function logout(){
        if(is_login()){
            session('user', null);
            session('[destroy]');
            $this->success('退出成功！', U('login'));
        } else {
            $this->redirect('login');
        }
    }
    /*添加新用户*/
    public function userAdd(){
        require_once 'CommonController.class.php';
        new CommonController();
        $usersession = session('user');
        $userRole=$usersession['rid'];
    	if(IS_POST)
    	{
            
            $user=D('user');
            if($user->create())
            {
                $userArr=$user->create();
                $userArr['password']=md5('123456');
                $userArr['reg_time']=time();
                $userArr['role_id']=$userArr['dept_id'];
                $userArr['status']=1;
                if($user->add($userArr))
                {
                    $this->success('添加成功',U('Index/index'));
                }
                else{
                    $this->error('添加失败！');
                }
            }
            else
            {
                //自动验证不成功
                $this->error($user->getError());
            }
    		
    		
    	}
	    else
	    {
            if($userRole==0)
            {
                $this->display();
            }
            else
            {
                $this->error('请登录管理账号进行操作！');
            }
	    }
    	
    }
    /*编辑用户*/
    public function userEdit(){
        require_once 'CommonController.class.php';
        new CommonController();
        $id=I('id');
        $user = D('user');
        $usersession = session('user');
        $userRole=$usersession['rid'];
        if(IS_POST){
            
            
                if($user->create()) 
                {
                    // var_dump($user->create())
                    // ;exit;
                    $userArr=$user->create();
                    $userArr['role_id']=$userArr['dept_id'];
                    // $userArr['Id']=$_POST['id'];
                    // var_dump($userArr);exit;
                    $result = $user->save($userArr);
                    if($result) 
                    {
                        $this->success('修改成功！',U('Index/index'));
                    }
                    else
                    {
                        $this->error('修改失败！');
                    }
                }
                else
                {
                    $this->error($user->getError());
                }
           
            
            
        }else{
            if($userRole==0){
                $this->vo = $user->find($id);
                $this->display();
            }
            else{
                $this->error('请用管理员账号登陆进行操作！');
            }
        }

    }
    /*删除用户*/
    public function userDel()
    {
        require_once 'CommonController.class.php';
        new CommonController();
        $id=I('id');
        $usersession = session('user');
        $userRole=$usersession['rid'];
        if($userRole==0){//是否有权限操作
            $user = D('user');
            $result=$user->delete($id);
            if($result) {
                $this->success('删除成功！',U('Index/index'));
            }else{
                $this->error('删除失败！');
            }
        }
        else{
            $this->error('请用管理员账号登陆进行操作！');
        }
        
    }

    public function verify(){
        ob_end_clean();
        $verify = new \Think\Verify();
        $verify->entry();
    }
}