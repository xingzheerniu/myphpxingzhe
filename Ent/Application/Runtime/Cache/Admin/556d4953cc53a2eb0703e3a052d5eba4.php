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
          <h2>查看公告</h2>
        </div>
        <div class="wrap_content">
        <table width="99%" border="1" cellspacing="10" cellpadding="10" class="">
          <thead>
                <tr>
                    <th>
                        <?php echo $value['title']; ?>
                  </th>
              </tr>
             </thead>
          <tbody>
              <tr>
                  <td colspan="2">
                      <div class=""> <em>发布人：</em>
                          <span>
                              <?php echo get_fullname($value['uid']);?></span> 
                      </div>
                  </td>
              </tr>
              <tr>
                  <td colspan="2">
                      <div class="">
                          <?php echo $value['content']?></div><hr/>
                  </td>
              </tr>
          </tbody>
      </table>
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