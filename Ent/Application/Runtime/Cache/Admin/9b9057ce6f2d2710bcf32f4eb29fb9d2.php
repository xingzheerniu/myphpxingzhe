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
	        <h2>添加用户</h2>
	      </div>
	      <div class="wrap_content">
	      <form action="<?php echo U('userAdd');?>" method="post" class="">
	      <table>
	        <tfoot>
	          <tr>
	            <td>&nbsp;</td>
	            <td>&nbsp;</td>
	            <td>
	              <input type="submit" name="input" value="添加"></td>
	            <td>&nbsp;</td>
	          </tr>
	        </tfoot>
	        <tbody>
	          <tr>
	            <td>&nbsp;</td>
	            <td>用户名：</td>
	            <td>
	              <input type="text" name="username" id="usernname"></td>
	            <td>&nbsp;</td>
	          </tr>
	          <tr>
	            <td>&nbsp;</td>
	            <td>姓名：</td>
	            <td>
	              <input type="text"  name="fullname" id="fullname" /></td>
	            <td>&nbsp;</td>
	          </tr>
	          <tr>
	            <td>&nbsp;</td>
	            <td>性别：</td>
	            <td>
	                 <label>
		         		<input type="radio" name='sex' select=true value="男"> 男
			         </label>
			         <label>
			         	<input type="radio" name='sex' value="女"> 女
			         </label>
			     </td>
	            <td>&nbsp;</td>
	          </tr>
	          <tr>
	            <td>&nbsp;</td>
	            <td>职位：</td>
	            <td>
	              <input type="text"  name="position" id="position" /></td>
	            <td>&nbsp;</td>
	          </tr>
	          <tr>
	            <td>&nbsp;</td>
	            <td>部门：</td>
	            <td>
	            <select type="text" name="dept_id" id="dept_id">
		            <option select="selected" value=1>研发部</option>
		            <option  value=2>市场部</option>
		            <option  value=3>人力资源部</option>
		            <option  value=4>财务部</option>
		            <option  value=5>管理层</option>
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