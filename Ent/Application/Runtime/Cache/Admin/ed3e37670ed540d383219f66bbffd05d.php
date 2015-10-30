<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <title>企业管理</title>
    <link rel="stylesheet" type="text/css" href="/Ent/Public/static/bootstrap/css/bootstrap.min.css" media="all">
    <link rel="stylesheet" type="text/css" href="/Ent/Public/Admin/css/login.css" media="all">   
</head>
<body>
    <!--header-->
    <div class="header">
        <div class="user_center ">
            <ul>
                <li align="right">你好，<?php echo session('user.fullname');?><a href="<?php echo U('User/logout');?>" class="logout_icon ">退出</a></li>
            </ul>
        </div>
    </div>
    <!--//header-->
    <!--main-->
    <div class="main">
        <!--left_bar-->
        <div class="left_bar">
          <ul class="left_list" style="margin:10; padding:10;margin-top:20px;">
            <li><span class="label badge-important">相关部门</span></li>
            <li>
                <a href="<?php echo U('Index/index/r/1');?>">研发部 </a>
            </li>
            <li>
                <a href="<?php echo U('Index/index/r/2');?>">市场部 </a>
            </li>
            <li class="active">
                <a href="<?php echo U('Index/index/r/3');?>">人力资源部</a>
            </li>
            <li class="active">
                <a href="<?php echo U('Index/index/r/4');?>">财务部</a>
            </li>
            <li class="active">
                <a href="<?php echo U('Index/index/r/5');?>">管理层</a>
            </li>
            <li class="active">
                <a href="<?php echo U('Index/index');?>">返回首页</a>
            </li>
        </ul>
    </div>
    <!--//left_bar-->
    <!--right_wrap-->
    
	<div class="container">
	    <!--right_wrap-->
	    <div class="right_wrap">
	      <div>
	        <h2>编辑用户</h2>
	      </div>
	      <div class="wrap_content">
	      <form action="<?php echo U('userEdit');?>" method="post" class="">
	      <input type="hidden"  name="id" id="id" value="<?php echo ($vo["id"]); ?>"/>
	      <table>
	        <thead>
	          <tr>
	            <th width="2%">&nbsp;</th>
	            <th width="10%">编辑用户：</th>
	            <th width="70%">&nbsp;</th>
	            <th width="18%">&nbsp;</th>
	          </tr>
	        </thead>
	        <tfoot>
	          <tr>
	            <td>&nbsp;</td>
	            <td>&nbsp;</td>
	            <td>
	              <input type="submit" name="input" value="编辑"></td>
	            <td>&nbsp;</td>
	          </tr>
	        </tfoot>
	        <tbody>          
	          <tr>
	            <td>&nbsp;</td>
	            <td>姓名：</td>
	            <td>
	              <input type="text"  name="fullname" id="fullname" value="<?php echo ($vo["fullname"]); ?>"/></td>
	            <td>&nbsp;</td>
	          </tr>
	          <tr>
	            <td>&nbsp;</td>
	            <td>职位：</td>
	            <td>
	              <input type="text"  name="position" id="position" value="<?php echo ($vo["position"]); ?>" /></td>
	            <td>&nbsp;</td>
	          </tr>
	          <tr>
	            <td>&nbsp;</td>
	            <td>部门：</td>
	            <td>
	            <select type="text" name="dept_id" id="dept_id">
		            <option <?php if($vo['dept_id']==1){echo "selected";}?> value=1>研发部</option>
		            <option  <?php if($vo['dept_id']==2){echo "selected";}?> value=2>市场部</option>
		            <option  <?php if($vo['dept_id']==3){echo "selected";}?> value=3>人力资源部</option>
		            <option  <?php if($vo['dept_id']==4){echo "selected";}?> value=4>财务部</option>
		            <option  <?php if($vo['dept_id']==5){echo "selected";}?> value=5>管理层</option>
	            </select>
	            </td>
	            <td>&nbsp;</td>
	          </tr>

	        </tbody>
	      </table>
	    </form>
	    </div>
	  </div>
  <!--//right_wrap-->
	</div>

    <!--//right_wrap-->
</div>
<!--//main-->
</body>
<script type="text/javascript" src="/Ent/Public/static/jquery.min.js"></script>
    <script type="text/javascript" src="/Ent/Public/static/bootstrap/js/bootstrap.min.js"></script>

</html>