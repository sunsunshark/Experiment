<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
 	
    <meta charset="utf-8">
	<style type="text/css">
	  html, body {
            width:100%;
            height:100%;
            margin:0px;
            padding:0px;
            font-family: '宋体';
        }
	ul,li{ padding:0;margin:0;list-style:none}
	a{ text-decoration:none} 
	.d_input{
		width: 100%;
		height: 50px;
		float: left;
		margin-left: 12px;
		position: absolute;
		/*border:1px solid black;*/
	}
	.dd_input{
		width: 450px;
		height: 35px;
		position: absolute;
		margin-left: 10px;
		margin-top: 8px;
		border:1px solid #6b7884;
		outline: none;
		-webkit-box-shadow: 0 0 0px 1000px white inset;
		/*border-radius: 5px;*/
		color: #a9b8c6;
		font-size: 15px;
		font-family: '宋体';
	}
	.dd_button{
		width: 68px;
		height: 42px;
		margin-left: 460px;
		margin-top: 6px;
		color: white;
		outline: none;
		/*border-radius: 5px;*/
		background:#474a51;

	}
	.d_a{
		width: 100%;
		height: 100%;
		position: relative;
	}
	.d_aa{
		width: 400px;
		height: 380px;
		border:1px solid black;
		margin-top: 60px;
		margin-left: 10px;
		float: left;
		position: absolute;
		background:#a9b8c6;

	}
	.d_aa:hover{
		background:white;
	}
	.d_ab{
		width: 400px;
		height: 380px;
		border:1px solid black;
		float: left;
		margin-top: 60px;
		margin-left:430px;
		position: absolute;
		background:#a9b8c6;
	}
	.d_ab:hover{
		background: white;
	}
	.d_ac{
		width: 400px;
		height: 380px;
		float: left;
		border:1px solid black;
		margin-top: 60px;
		margin-left:850px;
		position: absolute;
		background:#a9b8c6;
	}
	.d_ac:hover{
		background: white;
	}
	.text_aa{
		font-family: '宋体';
		font-size: 20px;
		margin-left: 90px;
		color: #2a2e31;
	}
	.text_ab{
		font-family: '宋体';
		font-size: 18px;
		padding-left: 40px;

	}
	.text_ac{
		font-family: '宋体';
		font-size: 18px;
		padding-left: 40px;
	}
	.text_ad{
		font-family: '宋体';
		font-size: 24px;
		padding-left: 40px;
		color: #2a2e31;
	}
	.d_imga{
		width: 25px;
		height: 25px;
		float: left;
		margin-bottom: 100px;
		margin-left: 20px;
		/*padding-right: 10px;*/

	}
	.d_imgb{
		width: 25px;
		height: 25px;
		float: left;
		margin-left: 20px;
		margin-top: 30px;

	}
	.d_imgc{
		float: left;
		margin-left: -26px;
	}
	.d_imgsou{
		float: left;
		position: absolute;
		margin-left: 400px;
		margin-top: 10px;
		display: block;
		z-index: 5;
	}
	.myDiv{
		border:1px solid #000;
		margin-bottom:10px;
		font-size:15px;
		text-align: center;
		margin-left:20px ;
		float: left;
		margin-top: 80px;
		background:#a9b8c6;
		/*position: absolute;*/
		/*position: relative;*/
		/*z-index: 5;*/
	}
	.myDiv:hover{
		background: white;
	}
	.little{
         
         margin-left:-70px;
         margin-top:0px;
           width: 25%;
         height:25%;
         float: left;
         display: block;
  
	}
	.teacher{
		float:left;
		margin-left:76px;
		margin-top: -20px;
		font-size: 16px;

	}
	.course{
		float:left;
		margin-left:76px;
		margin-top: 10px;
		font-size: 16px;
		
	}
	.timea{
		float:left;
		/*width: 100px;*/
		margin-left:-30px;
		margin-top: 5px;
		font-size: 16px;
		display: inline;
	}
	.timeb{
		float:left;
		/*width: 27.5%;*/
		margin-left:-30px;
		margin-top: 10px;
		font-size: 16px;

	}
	.joinExperiment{
		text-decoration: none;
		float: left;
		color:black;
		font-size: 23px;
		margin-left:36px;
		margin-top: 10px;
		/*border:1px solid black;*/
	}
	/*大于1000px时执行的代码*/
	.myDiv{
		border:1px solid #000;
		margin-bottom:10px;
		font-size:15px;
		text-align: center;
		margin-left:21px ;
		float: left;
		width: 100%;
		height: 600px;
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
	</style>	
</head>
<body>
<div class="d_a">
		<!--输入框-->
		<div class="d_input">
			<span class="d_imgsou"><img src="/Experiment6/Source/Experiment/sou.png"></span>
			<input type="text" name="keyword" value="主机名字关键词" class="dd_input" onfocus="if (value =='主机名字关键词'){value =''}" onblur="if (value ==''){value='主机名字关键词'}">
			
			<button type="submit" class="dd_button">查询</button>
		</div>
<?php if(is_array($datas)): $i = 0; $__LIST__ = $datas;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$data): $mod = ($i % 2 );++$i;?><div class="myDiv" style="width: 30%;height: 80%; " >

		<div style="height:50%;float: left;width:100%;" >
			<img src="/Experiment6/Source/Experiment/<?php echo ($data['outcome_model']); ?> " alt="" style="width:100%;height: 100%; ">
		</div>
		<div style="width: 75%;float:left;height: 100%; ">
			<p style=" font-size:25px;margin-top: 15px;"><?php echo ($data['ename']); ?> </p> 
			<!-- <img class="d_imgb" src="/Experiment6/Public/Experiment/time.png"> -->
	        <span class="teacher">任课教师：<?php echo ($data['teacher']); ?></span>
	        <span class="course">课程状态：<?php echo ($data['status']); ?> </span>  
	        <span class="timea" ><img src="/Experiment6/Source/Experiment/<?php echo ($data['signal_a']); ?> " alt="" style="float:left;margin-left: 70px;padding-right: 10px;margin-top: -3px; ">开始时间：<?php echo ($data['start_time']); ?></span>  
	        <span class="timeb"><img src="/Experiment6/Source/Experiment/<?php echo ($data['signal_a']); ?> " alt="" style="float:left;margin-left: 70px;padding-right: 10px;margin-top: -3px; ">结束时间：<?php echo ($data['end_time']); ?> </span>

			<div class="joinExperiment" >
				<a href="<?php echo U('Docker/joinExperiment');?>/id/<?php echo ($data['eid']); ?>" target="block" style="color: #303030;padding-left: 8px;">

				 <?php echo ($data['is_Join']===true ? '进入主机' : '加入'); ?> <img src="/Experiment6/Source/Experiment/<?php echo ($data['signal_b']); ?> " alt="" style="float: left;margin-left:5px;">     </a>
			</div>
		</div>
    </div><?php endforeach; endif; else: echo "" ;endif; ?>
<div class="back_top" id="btn" onclick="topFunction()">
	<a href="javascript:;"><img src="/Experiment6/Source/Course/backtop.png" style="border-radius: 5px 5px 0px 0px;">
		<ul style="color:black;margin-left: 7px;font-size: 18px;">
			<li>返回</li>
			<li>顶部</li>
		</ul></a>
</div>


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