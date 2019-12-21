<?php if (!defined('THINK_PATH')) exit();?>﻿<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.6">
    <title></title>

    <!-- Bootstrap core CSS已改 -->
<link href="/Experiment7/Public/bootstrap-4.3.1-dist/css/bootstrap.css" rel="stylesheet">

<!--已改-->

<link rel="manifest" href="/Experiment7/Public/bootstrap-4.3.1-dist/js/manifest.json">

<!--网页小图标-->
<!--  <link rel="icon" href="https://v4ing.bootcss.com/docs/4.3/assets/img/favicons/favicon.ico">
 -->
 <meta name="msapplication-config" content="https://v4ing.bootcss.com/docs/4.3/assets/img/favicons/browserconfig.xml">
<meta name="theme-color" content="#563d7c">
    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }
      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
      .dir_two{
        display: none;
      }
      input.form-control:focus{
        border-color: #ccc;
        outline:none;
        box-shadow:none;
      }
     .btn:hover,
     .btn:active,
     .btn:focus {
     outline: none;
     box-shadow: none;
 }

    </style>
    <!-- Custom styles for this template -->
    <link href="/Experiment7/Public/bootstrap-4.3.1-dist/css/album.css" rel="stylesheet">
  </head>
  <body>
    <header>

<div class="collapse bg-dark" id="navbarHeader">
    <div class="container">
      <div class="row">
        <!--搜索框start-->
        <div class="col-sm-8 col-md-7 py-4">
          <h4 class="text-white" style="font-size: 18px;">搜索框</h4>
        </div>
<div class="col-sm-8 col-md-7 py-4">
<div class="input-group mb-3">
  <input type="text" class="form-control " style="outline: none;"  placeholder="Email" id="demo" name="email" >
  <div class="input-group-append">
    <!-- <span class="input-group-text">@runoob.com</span> -->
   <input type="submit" class="btn btn-info" value="搜索">
  </div>
</div>
</div>
        <div class="col-sm-4 offset-md-1 py-4">
        </div>
        <!--搜索框end-->
      </div>
    </div>
  </div>

  <div class="navbar navbar-dark bg-dark shadow-sm" id="dir1">
    <div class="container d-flex justify-content-between">
      <a href="#" class="navbar-brand d-flex align-items-center">
        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" aria-hidden="true" class="mr-2" viewBox="0 0 24 24" focusable="false"><path d="M23 19a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h4l2-3h6l2 3h4a2 2 0 0 1 2 2z"/><circle cx="12" cy="13" r="4"/></svg>
<!--         <img src="/Experiment7/Source/Experiment/sou.png">
 -->        <strong>虚拟实验平台</strong>
      </a>

<div class="col-sm-8 col-md-7 py-4">
<div class="input-group mb-3">
  <input type="text" class="form-control" placeholder="输入课程名称" id="demo" name="email">
  <div class="input-group-append">
    <!-- <span class="input-group-text">@runoob.com</span> -->
   <input type="submit" class="btn btn-danger" value="搜索">
  </div>
</div>
</div>

      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    </div>
  </div>

  <!--导航two-->
  <div class="container">
    <ul class="nav nav-tabs dir_two" id="dir2">
    <li class="nav-item">
      <a class="nav-link active" href="#">首页</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">课程</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">我的课程</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">我的主机</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">个人中心</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">注销</a>
    </li>
    <li class="nav-item">
      <a class="nav-link disabled" href="#">Disabled</a>
    </li>
  </ul>
  </div>

  <!--two-->
</header>

<main role="main">
  <div class="album py-5 bg-light">
    <div class="container">
      <div class="row">
        <?php if(is_array($datas)): $i = 0; $__LIST__ = $datas;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$data): $mod = ($i % 2 );++$i;?><div class="col-md-4">
          <div class="card mb-4 shadow-sm">
              <img src="/Experiment7/Source/Experiment/<?php echo ($data['outcome_model']); ?>" >

            <div class="card-body">
              <p style="font-size: 20px;"><?php echo ($data['ename']); ?></p>
              <p class="card-text"><?php echo ($data['goal']); ?></p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary" onclick="window.location.href='<?php echo U('Docker/joinExperiment');?>/id/<?php echo ($data['eid']); ?>'">进入主机</button>
                  <button type="button" class="btn btn-sm btn-outline-secondary">加入到我的课程</button>
                </div>
                <small class="text-muted">n人在学</small>
              </div>
            </div>
          </div>
        </div><?php endforeach; endif; else: echo "" ;endif; ?>
        <!--分界线-->
      </div>
    </div>
  </div>

</main>






<footer class="text-muted">
  <div class="container">
    <p class="float-right">
      <a href="#">Back to top</a>
    </p>
    <p>制作者 &copy; DATA团队</p>
    <p>联系我们：<a href="#" onclick="window.open('https://github.com/jianhanke/')">https://github.com/jianhanke/Experiment</a> 
 </br> 新的建议：<a href="#">点击跳转</a>.</p>
  </div>
</footer>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
      <script>window.jQuery || document.write('<script src="/Experiment7/Public/bootstrap-4.3.1-dist/js/jquery.slim.min.js"><\/script>')</script><script src="/Experiment7/Public/bootstrap-4.3.1-dist/js/bootstrap.bundle.js"></script></body>
</html>
<script type="text/javascript">
var dir1 = document.getElementById('dir1');
var dir2 = document.getElementById('dir2');
dir1.onmouseover = function(){
  dir2.style.display='block';
 
}
dir1.onmouseout = function(){
  dir2.style.display='none';
}
var showli=document.getElementById('showlist');
showli.onclick = function(){

}



</script>