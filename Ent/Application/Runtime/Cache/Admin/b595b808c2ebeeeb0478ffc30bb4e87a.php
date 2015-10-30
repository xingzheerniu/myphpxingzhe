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
	<div class="container-fluid">
		<div class="row-fluid">
			<div class="span8">
			<div>
	        <h2>当前部门：<?php echo ($deptname); ?></h2>
	        <?php if($userRole==0 && uid): ?>
	        <h4><a href=<?php echo U('User/userAdd');?>>添加用户</a><h4>
	        <?php endif;?>
	        <?php if($userRole!=5 && $userRole!=0): ?>
	        <h4><a href=<?php echo U('Notice/noticeAdd');?>>发布公告</a><h4>
	        <?php endif;?>
		    </div>
		    <div class="search_user">
                <form action="<?php echo U('index');?>" method="get">
                <input type="text"  name="fullname" id="fullname" value="<?php echo $_GET['fullname'] ;?>"/>
                <input  type="submit" name=""  value="搜索">
                </form>
				<table class="table">
					<thead>
						<tr>
							<th>
								姓名
							</th>
							<th>
								性别
							</th>
							<th>
								职位
							</th>
							<?php if($userRole==0 && uid): ?>
							<th>
								操作
							</th>
							<?php endif;?>
						</tr>
					</thead>
					<tbody>
						<?php foreach ($userList as $key => $value):?>
						<tr>
	                    <td><?php echo ($value['fullname']); ?></td>
	                    <td><?php echo ($value['sex']); ?></td>
	                    <td><?php echo ($value['position']); ?></td>
	                    <?php if($userRole==0 && uid): ?>
	                    <td>
	                    	<a href="<?php echo U('user/userEdit?id='.$value['id']);?>" title="编辑" class="">编辑</a>
	                    	<a href="<?php echo U('user/userDel?id='.$value['id']);?>" title="删除" class="">删除</a>
	                    </td>
	                    <?php endif;?>	
						</tr>
						<?php endforeach;?>
					</tbody>
				</table>
			</div>
			<div class="span4">
				<table class="table">
					<thead>
						<tr>
							<th>
								标题
							</th>
							<th>
								发布人
							</th>
							<th>
								操作
							</th>						
						</tr>
					</thead>
					<tfoot>
                        <tr>
                            <td colspan="3">
                            <div class="pagelist">
                                <p class="sabrosus"><?php echo ($page); ?></p>
                            </div>
                        </td>
                        </tr>
                    </tfoot>
					<tbody>	
					<?php foreach ($noticeList as $key => $valueN):?>					
						<tr class="info">
							<td>
								<a href=<?php echo U('Notice/noticeLook?id='.$valueN['id']);?>><?php echo ($valueN["title"]); ?></a>
							</td>
							<td>
								<?php echo ($valueN["fullname"]); ?>
							</td>
							<?php if(($userRole==0 && $uid) || ($uid==$valueN['uid'])): ?>
			                <td>
			                	<a href="<?php echo U('Notice/noticeEdit?id='.$valueN['id']);?>" title="编辑" class="">编辑</a>
			                	<a href="<?php echo U('Notice/noticeDel?id='.$valueN['id']);?>" title="删除" class="">删除</a>
			                </td>
			                <?php endif;?>
						</tr>
					<?php endforeach;?>
					</tbody>
				</table>
			</div>
		</div>
		</div>
		</div>
</div>

    <!--//right_wrap-->
</div>
<!--//main-->
</body>
<script type="text/javascript" src="/Ent/Public/static/jquery.min.js"></script>
    <script type="text/javascript" src="/Ent/Public/static/bootstrap/js/bootstrap.min.js"></script>

</html>