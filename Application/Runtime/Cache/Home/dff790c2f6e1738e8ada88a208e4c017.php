<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Bootstrap导航条鼠标悬停下拉菜单</title>
<link href="/Experiment7/Public/bootstrap-4.3.1-dist/css/bootstrap.css" rel="stylesheet">

<!--已改-->

<link rel="manifest" href="/Experiment7/Public/bootstrap-4.3.1-dist/js/manifest.json">
<script id="jquery_172" type="text/javascript" class="library" src="/js/sandbox/jquery/jquery-1.7.2.min.js"></script>
<script id="bootstrap_221" type="text/javascript" class="library" src="/js/sandbox/bootstrap-2.2.1/js/bootstrap.min.js"></script>
<style type="text/css">
  .navbar .nav > li .dropdown-menu {
 margin: 0;
}
.navbar .nav > li:hover .dropdown-menu {
 display: block;
}
</style>
</head>
<body>
<div class="container">
 <div class="span12">
  <h1>Bootstrap导航条鼠标悬停下拉菜单</h1>
  <p>Bootstrap的导航条下拉菜单为了适应移动设备没有鼠标hover的状态，都是点击弹出下拉菜单，为了适应一般网站使用，我稍作了一些修改，鼠标hover时就弹出二级菜单。</p>
  <div class="navbar">
   <div class="navbar-inner">
    <ul class="nav">
     <li><a href="#">Menu1</a></li>
     <li><a href="#">Menu2</a></li>
     <li class="dropdown"> <a href="#menu3">Menu3</a>
      <ul class="dropdown-menu">
       <li><a href="#menu7">Menu7</a></li>
       <li><a href="#menu8">Menu8</a></li>
      </ul>
     </li>
     <li><a href="#">Menu4</a></li>
     <li><a href="#">Menu5</a></li>
     <li><a href="#">Menu6</a></li>
    </ul>
   </div>
  </div>
 </div>
</div>
</body>
</html>