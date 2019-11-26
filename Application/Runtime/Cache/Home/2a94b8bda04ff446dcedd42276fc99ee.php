<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>数据实验平台</title>
</head>

<style>
ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #333;

}

li {
    float: left;
    margin-left: 30px; /*设置li之间的距离*/
}

li a {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}
html, body {
            width:100%;
            height:100%;
            margin:0px;
            padding:0px;
}


li a:hover {
    background-color: #111;
}
div{
  border: 0;
}
.d_sy{
  width: 30px;
  height: 20px;
  /*border:1px solid white;*/
  float: left;
  position: absolute;
  margin-top: -3px;
  margin-left: 3px;
}
.d_kc{
  width: 30px;
  height: 20px;
  float: left;
  position: absolute;
  margin-left: 106px;
  margin-top: 10px;
}
.d_zj{
  width: 30px;
  height: 30px;
  float: left;
  position: absolute;
  margin-left: 190px;
  margin-top: 5px;
}
.d_bc{
  width: 30px;
  height: 30px;
  float: left;
  position: absolute;
  margin-left: 318px;
  margin-top: 5px;
}
.d_person{
  width: 30px;
  height: 30px;
  float: left;
  position: absolute;
  margin-left: 443px;
  margin-top: 5px;
}
.d_user{
  width: 30px;
  height: 30px;
  float: left;
  position: absolute;
  margin-left: 570px;
  margin-top: 5px;
}
.d_zx{
  width: 30px;
  height: 30px;
  float: left;
  position: absolute;
  margin-left: 702px;
  margin-top: 5px;
}

</style>
<body>
  <div style="height: 8%; " >
     <div class="d_sy"><img src="/Experiment2/Source/Direct/home.png" ></div>
  <ul style="padding-left: 0px;">
    <li><a href="<?php echo U('Index/showExperiment');?>" target="iframe" >首页     </a></li>
    <!-- <li><a class="active"  href="<?php echo U('showCourse');?>" target="iframe">课程 </a></li> -->
    <!-- <li><a href="<?php echo U('Index/showExperiment');?>" target="iframe" >主机</a></li> -->
    <div class="d_kc"><img src="/Experiment2/Source/Direct/kc.png" ></div>
    <li><a href="<?php echo U('Index/showCourse');?>" target="iframe" >课程</a></li>
    <div class="d_zj"><img src="/Experiment2/Source/Direct/zj.png" ></div>
    <li><a href="<?php echo U('Index/showMyCourse');?>" target="iframe">我的主机</a></li>
    <div class="d_bc"><img src="/Experiment2/Source/Direct/bc.png" ></div>
    <li><a href="<?php echo U('OnlineCompile/showCompile');?> " target="iframe">在线编程</a></li>
    <div class="d_person"><img src="/Experiment2/Source/Direct/person.png" ></div>
   <li><a href="<?php echo U('Index/showStudentInfoById');?> " target="iframe">个人中心</a></li>
   <div class="d_user"><img src="/Experiment2/Source/Direct/user.png" ></div>
    <li><a href="">用户:<?php echo ($user_name); ?> </a>  </li>
    <div class="d_zx"><img src="/Experiment2/Source/Direct/zx.png" ></div>
    <li>   <a href="<?php echo U('Login/logout');?> ">注销</a>       </li>
  </ul>
  </div>
   <div id="myIframe" style="height: 89% "  >
        <iframe src="<?php echo U('Index/showExperiment');?> " name="iframe" scrolling="" width="100%" height="100%;" frameborder="0"></iframe>
    </div>

  

</body>
</html>