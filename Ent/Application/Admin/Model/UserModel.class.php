<?php
namespace Admin\Model;

use Think\Model;

/**
*对应表:默认user
*对应表:ent_user
**/
class UserModel extends Model
{
	protected $tablePrefix='ent_';
	// protected $tableName='user';
	protected $_validate = array(
        array('username', 'require', '请填写用户名'),
        array('fullname', 'require', '请填写姓名'), 
        array('sex', 'require', '请选择性别'),
        array('position', 'require', '请填写职位'),
    );

}


?>