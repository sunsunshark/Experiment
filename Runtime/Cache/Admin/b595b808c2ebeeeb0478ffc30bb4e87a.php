<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>实验平台管理</title>
    <link rel="stylesheet" type="text/css" href="/Experiment/Public/Admin/css/common.css"/>
    <link rel="stylesheet" type="text/css" href="/Experiment/Public/Admin/css/main.css"/>
    <script type="text/javascript" src="/Experiment/Public/Home/js/jquery-2.0.0.min.js"></script>
    <script type="text/javascript" src="/Experiment/Public/Home/js/myJs.js"></script>
</head>
<body>
<div class="topbar-wrap white">
    <div class="topbar-inner clearfix">
        <div class="topbar-logo-wrap clearfix">
            <h1 class="topbar-logo none"><a href="index.html" class="navbar-brand">后台管理</a></h1>
            <ul class="navbar-list clearfix">
                <li><a class="on" href="<?php echo U('Home/Index/index');?> ">前端首页</a></li>
            </ul>
        </div>
        <div class="top-info-wrap">
            <ul class="top-info-list clearfix">
                <li><a href="#">管理员:<?php echo ($admin_name); ?></a></li>
                <li><a href="<?php echo U('Login/logout');?> ">退出 </a></li>
            </ul>
        </div>
    </div>
</div>
<div class="container clearfix">
    <div class="sidebar-wrap">
        <div class="sidebar-title">
            <h1>菜单</h1>
        </div>
        <div class="sidebar-content" id="myFold" >
            <ul class="sidebar-list">
                <li>
                    <li> <a href="#"><i class="iconfont">&#xe603;</i>网站设置</a> </li>
                    <ul class="sub-menu">
                        <li><a href="<?php echo U('WebConfig/showAllConfig');?>" target="iframe"  ><i class="iconfont">&#xe602;</i> 配置信息</a></li>
                        <li><a href="<?php echo U('WebConfig/updateConfigToFile');?>" target="iframe"  ><i class="iconfont">&#xe602;</i>更新配置</a></li>
                    </ul>
                </li>

                <li>
                    <li><a href="#"><i class="iconfont">&#xe641;</i>Docker管理</a> </li> 
                    <ul class="sub-menu">
                        <li><a href="<?php echo U("Docker/handleContainer");?>" target="iframe"  ><i class="iconfont">&#xe602;</i>容器管理</a></li>
                        <li><a href="<?php echo U("Docker/showAllContainer");?>" target="iframe"  ><i class="iconfont">&#xe602;</i>宿主机容器</a></li>
                        <li><a href="<?php echo U("Docker/addImage");?>" target="iframe"  ><i class="iconfont">&#xe602;</i>拉取镜像</a></li>
                        <li><a href="<?php echo U("Docker/dockerController");?>" target="iframe"  ><i class="iconfont">&#xe602;</i>Docker控制</a></li>
                    </ul>
                </li>
                <li>
                   <li>  <a href="#"><i class="iconfont">&#xe603;</i>学生管理</a> </li>
                    <ul class="sub-menu">
                        <li><a href="<?php echo U('Student/showStudent');?>" target="iframe" ><i class="iconfont">&#xe61c;</i>学生信息</a></li>
                        <!-- <li><a href="#"><i class="iconfont">&#xe678;</i>实验管理</a></li> -->
                    </ul>
                </li>

                 <li>

                   <li>  <a href="#"><i class="iconfont">&#xe603;</i>院系班级</a>  </li>
                    <ul class="sub-menu">

                        <!-- <li><a href="<?php echo U('Class/showAllClassInfo');?>" target="iframe" ><i class="iconfont">&#xe61c;</i>学生信息</a></li> -->
                        <li><a href="<?php echo U('Class/showAllClassInfo');?>" target="iframe" ><i class="iconfont">&#xe61c;</i>班级信息</a></li>
                        <li><a href="<?php echo U('Class/addClassInfo');?>" target="iframe" ><i class="iconfont">&#xe61c;</i>添加班级</a></li>
                        <li><a href="<?php echo U('Department/showAllDepartmentInfo');?>" target="iframe" ><i class="iconfont">&#xe61c;</i>院系信息</a></li>
                        <li><a href="<?php echo U('Department/addDepartmentInfo');?>" target="iframe" ><i class="iconfont">&#xe61c;</i>添加院系</a></li>

                    </ul>
                </li>


                <li>
                     <li> <a href="#"><i class="iconfont">&#xe603;</i>教师管理</a>  </li>
                    <ul class="sub-menu">
                        <li><a href="<?php echo U('Teacher/showTeacher');?>" target="iframe" ><i class="iconfont">&#xe61c;</i>教师信息</a></li>
                        <!-- <li><a href="#"><i class="iconfont">&#xe678;</i>实验管理</a></li> -->
                    </ul>
                </li>

                <li>
				 <li>	<a href="#"><i class="iconfont">&#xe603;</i>主机管理</a> </li>
                    <ul class="sub-menu">
                        <li><a href="<?php echo U('Experiment/showExperiment');?>" target="iframe" ><i class="iconfont">&#xe61c;</i>主机信息</a></li>
                        <li><a href="<?php echo U('Experiment/showExperimentContainer');?>" target="iframe" ><i class="iconfont">&#xe660;</i>主机容器</a></li>
                         <li><a href="<?php echo U('Experiment/showExperimentImage');?>" target="iframe"  ><i class="iconfont">&#xe602;</i>主机镜像</a></li>
                        <li><a href="<?php echo U('Experiment/addExperiment');?>" target="iframe" ><i class="iconfont">&#xe61c;</i>添加主机</a></li>
                    </ul>
                </li>

                <li>
                    <li> <a href="#"><i class="iconfont">&#xe603;</i>Excel</a> </li>
                    <ul class="sub-menu">
                        <li><a href="<?php echo U('Excel/showExcel');?>" target="iframe" ><i class="iconfont">&#xe61c;</i>Excel管理</a></li>
                    </ul>
                </li>

                <li>
                    <li> <a href="#"><i class="iconfont">&#xe603;</i>课程管理</a> </li>
                    <ul class="sub-menu">
                        <li><a href="<?php echo U('Course/showCourse');?>" target="iframe" ><i class="iconfont">&#xe61c;</i>
                        所有课程</a></li>
                        <li><a href="<?php echo U('Course/showChapterImage');?>" target="iframe"  ><i class="iconfont">&#xe602;</i>课程镜像</a></li>
                    </ul>
                </li>

            </ul>
        </div>
    </div>
    <!--/sidebar-->
    <div class="main-wrap"  >
	
   	
       <iframe src="/Experiment/index.php/Admin/Index/home" name="iframe" scrolling="" width="100%" height="650px;" frameborder="0"></iframe>
 	
      
    </div>
    <!--/main-->
</div>
</body>
</html>