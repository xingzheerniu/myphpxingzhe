<?php 
namespace Admin\Model;
use Think\Model;
class NoticeModel extends Model{
	protected $_validate = array(
        array('title', 'require', '标题不能空'),
        array('content', 'require', '内容不能空'), 
    );
}

?>