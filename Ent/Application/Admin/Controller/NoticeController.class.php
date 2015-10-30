<?php
namespace Admin\Controller;
use Think\Controller;
class NoticeController extends CommonController {
    public function index(){
        
    }
    public function noticeAdd(){
    	$user = session('user');
        $this->userId=$user['rid'];
        $this->userRole=$user['rid'];
        if(IS_POST)
        {
        	$notice=D('notice');
        	if($notice->create())
        	{
        		$noticeArr=$notice->create();
        		//人资指定可见部门
        		if(!$noticeArr['scan'])
        		{
        			$noticeArr['scan']=$user['rid'];
        		}        		
        		$noticeArr['uid']=$user['uid'];
        		$noticeArr['content']=$_POST['content'];
        		if($notice->add($noticeArr))
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
		 		$this->error($notice->getError());
			}
        }
	    else
	    {
	    	$this->display();
	    }
    }
    public function noticeEdit(){
    	$id=I('id');
        $notice = D('notice');
        if(IS_POST){
        	if($notice->create()){
        		$noticeArr=$notice->create();
        		// if(!$noticeArr['scan'])
        		// {
        		// 	$noticeArr['scan']=$user['rid'];
        		// } 
        		// $noticeArr['uid']=$user['uid'];
        		$noticeArr['content']=$_POST['content'];
        		$result=$notice->save($noticeArr);
        		if($result)
                {
                    $this->success('修改成功',U('Index/index'));
                }
                else{
                	$this->error('修改失败！');
                }

        	}
        	else
        	{
        		//自动验证不成功
        		$this->error($notice->getError());
        	}

        }
        else{
        	$this->vo=$notice->find($id);
        	$this->display();
        }
    }
    /*删除公告*/
    public function noticeDel(){
    	$id=I('id');
        $notice = D('notice');
        $result=$notice->delete($id);
        if($result) {
            $this->success('删除成功！',U('Index/index'));
        }else{
            $this->error('删除失败！');
        }
    }
    /*查看公告*/
    public function noticeLook(){
    	$id=I('id');
    	$notice=D('notice');
    	$this->value=$notice->find($id);
    	$this->display();
    }
        
}
?>