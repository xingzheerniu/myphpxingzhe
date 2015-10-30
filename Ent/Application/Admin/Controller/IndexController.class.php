<?php
namespace Admin\Controller;
use Think\Controller;
class IndexController extends CommonController {
    public function index(){
        // $user=new \Admin\Model\UserModel();//new
        // $user_m_model=M('User');//M
        // $user_d_model=D('User');//D
        // print_r($user);
        //显示用户
        $fullname=$_GET['fullname'];
        $user = session('user');
        $this->uid=$user['uid'];
        $this->userRole=$user['rid'];
        $user=D('user');
        $con['status']=1;
        if(!empty($fullname))
        {
            $con['fullname']=$fullname;//根据姓名条件搜素
        }
        $r=$_GET['r'];
        switch ($r) {
    		case 1:
    			$deptname="研发部";
    			break;
    		case 2:
    			$deptname="市场部";
    			break;
    		case 3:
    			$deptname="人力资源部";
    			break;
			case 4:
				$deptname="财务部";
				break;
			case 5:
				$deptname="管理层";
				break;
    		default:
    			$deptname="所有部门";
    			break;
    	}
    	$this->deptname=$deptname;
        $userList='';
        if($r)
        {
        	$con['role_id']=$r;
        	
        	$userList=$user->where($con)->select();
        }
	    else
	    {
	    	$userList=$user->where($con)->select();
	    }
        //显示可见公告
        $roleID=$this->userRole;
        $notice=D('notice');

        // $str=$role.','.$roleID;
        // $map['scan']=array('IN',$str);
        if($roleID==0){
            $count = $notice->join('LEFT JOIN ent_user u ON uid = u.id' )->where()->count();// 查询满足要求的总记录数
            $Page = new \Think\Page($count,2);// 实例化分页类 
            $show = $Page->show();// 分页显示输出
            // 进行分页数据查询
            $noticeList = $notice->join('LEFT JOIN ent_user u ON uid = u.id' )->where()->field('distinct u.fullname,u.role_id,title,ent_notice.id,uid')->limit($Page->firstRow.','.$Page->listRows)->select();//按照角色显示公告
            
        }
        else
        {
            $conn['_string'].=' scan='.$roleID.' OR u.role_id='.$roleID;
            $count = $notice->join('LEFT JOIN ent_user u ON uid = u.id' )->where($conn)->count();// 查询满足要求的总记录数
            $Page = new \Think\Page($count,2);// 实例化分页类 
            $show = $Page->show();// 分页显示输出
            // 进行分页数据查询
            
            $noticeList = $notice->join('LEFT JOIN ent_user u ON uid = u.id' )->where($conn)->field('distinct u.fullname,u.role_id,title,ent_notice.id,uid')->limit($Page->firstRow.','.$Page->listRows)->select();//按照角色显示公告
        }

        

	    $this->assign('userList',$userList);// 赋值数据集
        $this->assign('noticeList',$noticeList);
        // print_r($userList);exit;
        $this->assign('page',$show);// 赋值分页输出
        $this->display();
    }

   
}