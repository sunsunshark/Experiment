<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
 	
    <meta charset="utf-8">
	<style type="text/css">
	.myDiv{
		border:1px solid #000;
		margin-bottom:10px;
		width: 100%;
		font-size:25px;
		text-align: center;
		margin:1% auto;
	}
	.joinExperiment{
		font-size:18px;
		border:1px solid #000;
		height: 30px;
		width: 100px;
		float: right;
	}
	.back_top{
		width: 55px;
		height: 120px;
		cursor:pointer;
		left: 1195px;
		top: 400px;
		position: fixed;
		display: none;
		z-index: 99;
		outline: none;
		/*border:1px solid black;*/
		background:#dad9d9;
		font-family: '微软雅黑';
		border-radius: 5px;
	}
	.back_top:hover{
		background:#f2e3e4;
		/*font-color:white;*/

	}
	.cou_director{
		width: 90%;
		height: 40%;
		border:1px solid grey;
		float: left;
		margin-top: 1%;
		margin-left: 5%;
		position: relative;
	}
	.cou_spa{
		text-align: left;
		float: left;
		margin-left: 35px;
		margin-top: 30px;
	}
	.cou_spa_detail{
		width: 85% ;
		height: 60px;
		border:1px solid blue;
		float:left;
		margin-left: 145px;
		margin-top: 30px;
		position: absolute;
	}
	.cou_spb{
		text-align: left;
		float: left;
		margin-left: -80px;
		margin-top: 105px;
	}
	.cou_spb_detail{
		width: 85%;
		height: 50px;
		border:1px solid blue;
		float: left;
		margin-left: 145px;
		margin-top: 105px;
		position:absolute;
	}
	.quanbu{
		width: 50px;
		height: 30px;
		background:#5a89ad;
		font-size: 15px;
		padding-top: 5px;
		text-align: center;
		color:#f6f1ef;
		display: inline-block;
		border-radius: 12px;
		cursor: pointer;
	}
	.show_cname{
		padding-left: 15px;
		color:#546268;
		font-family: 'Lucida Fax';
		font-size: 16px;
	}
	/*.show_course{
		width: 100%;
		height: -webkit-fill-available;
		border:1px solid grey;
		float:left;
		/*margin-left: 10px;
		position: relative;
	}*/
	.show_small{
		/*
		border:1px solid red;
		float: left;
		margin-left: 62px;
		padding-left: 15px;
		*/
		width:280px;
		height:220px;
		border:1px solid #000;
		/*margin-bottom:10px;*/
		font-size:15px;
		/*text-align: center;*/
		margin-left:28px ;
		float: left;
		margin-top: 25px;
		background:#a9b8c6;
	}
	.show_s_list{
		float: left;
		margin-left: 10px;
		margin-top: 40px;
	}
	.cou_jianjie{
		width:100%;
		height: 60%;
		float: left;
		margin-top: 14px;
		background: #dcd396;
		display: none;
		cursor: pointer;
		font-family: '微软雅黑';
		color: #546268;
	}
	.cou_biaoti{
		width: 100%;
		float: left;
		margin-top: 10px;
		cursor:pointer;
		color: #3f5057;
	}
	.show_into{
		float: left;
		font-size: 15px;
		/*position: absolute;*/
		/*z-index: 99;*/

	}
	.cou_zong{
		/*width: 280px;
		height: 20%;
		float: left;
		margin-top: -4px;
		position: absolute;
		/*background:white;*/
	}
	.cou_zong2{
		width: 280px;
		height: 20%;
		float: left;
		margin-top: -75px;
		position: absolute;
		background:white;
	}
	  html, body {
            width:100%;
            height:100%;
            margin:0px;
            padding:0px;
        }
	ul,li{ padding:0;margin:0;list-style:none}
	a{ text-decoration:none} 
	</style>	
</head>
<body>
	<!--课程导航的大盒子-->
	<div class="cou_director">
		<div class="cou_spa"><span>课程分类：</span></div>
		<div class="cou_spa_detail">
			<span class="quanbu">全部</span>
			<?php if(is_array($datas)): $i = 0; $__LIST__ = $datas;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$data): $mod = ($i % 2 );++$i;?><span class="show_cname"><?php echo ($data['cname']); ?></span><?php endforeach; endif; else: echo "" ;endif; ?>
		</div>
		<div class="cou_spb"><span>关键字查找：</span></div>
		<div class="cou_spb_detail">
			<span class="quanbu">全部</span>
			<?php if(is_array($datas)): $i = 0; $__LIST__ = $datas;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$data): $mod = ($i % 2 );++$i;?><span class="show_cname"><?php echo ($data['cname']); ?></span><?php endforeach; endif; else: echo "" ;endif; ?>
		</div>
	</div>
	<!--结束ing-->

<!--课程显示-->
<!-- <div class="show_course"></div> -->
	<?php if(is_array($datas)): $i = 0; $__LIST__ = $datas;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$data): $mod = ($i % 2 );++$i;?><div class="show_small">
		<img src="/Experiment2/Public/Course/<?php echo ($data['img']); ?> " alt="" style="width:100%;height: 65%; z-index: -1;">
		<div class="cou_zong" id="ztp">
		<div class="cou_biaoti" id="btp" onmouseover="goupFunction()">
			<span><?php echo ($data["cname"]); ?>课程实践</span>
		</div>
		<div class="cou_jianjie" id="ctp">
		<span class="show_into"><?php echo ($data['introduce']); ?></span></div>
		</div>
	</div><?php endforeach; endif; else: echo "" ;endif; ?>
<!--课程显示end-->
<!--回到顶部-->
<div class="back_top" id="btn" onclick="topFunction()">
	<a href="javascript:;"><img src="/Experiment2/Source/Course/backtop.png" style="border-radius: 5px 5px 0px 0px;">
		<ul style="color:black;margin-left: 7px;font-size: 18px;">
			<li>返回</li>
			<li>顶部</li>
		</ul></a>
</div>
<!--回到顶部end-->
</body>
</html>
<script>
// 当网页向下滑动 20px 出现"返回顶部" 按钮
// window.onload = function(){
window.onscroll = function() {scrollFunction()};
 
function scrollFunction() {console.log(121);
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        document.getElementById("btn").style.display = "block";
    } else {
        document.getElementById("btn").style.display = "none";
    }
}
// 点击按钮，返回顶部
function topFunction() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
}

//课程窗口js
// $(document).ready(function(){
// 	$('[id=ztp]').onmouseover(function(){
// 		$("#ztp").removeClass("cou_zong");
// 		$("#ztp").addClass("cou_zong2");
// 	})
// 	$('[id=ztp]').onmouseout(function(){
// 		$("#ztp").removeClass("cou_zong2");
// 		$("#ztp").addClass("cou_zong");
// 	})
// })

function goupFunction(){
	var btp = document.getElementById('btp');
	var ctp = document.getElementById('ctp');
	var ztp = document.getElementById('ztp');
	var timer = null;
	btp.onmouseover = ctp.onmouseover = function(){
		if(timer) clearTimeout(timer)
			ctp.style.display = 'block';
			ztp.className = 'cou_zong2';
	}
	btp.onmouseout = ctp.onmouseout = function(){
		timer = setTimeout(function(){
			ctp.style.display = 'none';
			ztp.className = 'cou_zong';

		},400);
	}
}


</script>