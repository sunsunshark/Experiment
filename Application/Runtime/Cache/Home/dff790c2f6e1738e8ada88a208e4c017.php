<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>京东网左侧导航实例</title>
    <!-- 导入JQuery库 -->
    <script src="https://code.jquery.com/jquery-1.8.2.min.js" integrity="sha256-9VTS8JJyxvcUR+v+RTLTsd0ZWbzmafmlzMmeZO9RFyk=" crossorigin="anonymous"></script>
    <style>
        *{
            margin: 0;
            padding: 0;
        }
        body{
            background:#e3e4e5;
        }
        .left-nav{
            margin-top: 30px;
            height: 468px;
            background: #f0f3ef;     
        }
        .left-nav .right{
            width: 989px;
            height: 468px;
            margin: 0 auto;
            background-color: #eee;
            position: relative;
        }
        .left-nav .right ul{
            list-style: none;
            width: 191px;
            height: 468px;
            background-color:#fff;
        }
        .left-nav .right ul li{
            height: 26px;
            text-align: center;
            line-height:26px;
            color:#636363;
            font-size: 14px;
            cursor:pointer;
        }
        .left-nav .right ul li span:hover{
            color: red;
        }
        .left-nav .right ul li .div2{
            position:absolute;
            left: 191px;
            top: 0px;
            display:none;
            width: 798px;
            height: 468px;
            text-align: center;
            box-shadow: 1px 1px 2px #656565;
        }
    </style>
</head>
<body>
    <div class="left-nav">
        <div class="right">
            <ul>
                <li>
                    <span>家用电器</span>
                    <div class="div2">
                        <h1>家用电器</h1>
                        <p>收到佛奥东方红抵抗力哈里还是哈奋达科技安徽分开的狂欢节的蝴蝶结的家伙 卡号对方法</p>
                    </div>
                </li>
                <li>
                    <span>电脑办公</span>
                    <div class="div2">
                        <h1>电脑办公</h1>
                        <p>收到佛奥东方红抵抗力哈里还是哈奋达科技安徽分开的狂欢节的蝴蝶结的家伙 卡号对方法</p>
                    </div>
                </li>
                <li>
                    <span>礼品鲜花</span>
                    <div class="div2">
                        <h1>礼品鲜花</h1>
                        <p>收到佛奥东方红抵抗力哈里还是哈奋达科技安徽分开的狂欢节的蝴蝶结的家伙 卡号对方法</p>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</body>
<script>
//鼠标移入区域时
$('.left-nav .right ul li').mouseenter(function(){
    $(this).css({'background':'#eee'});
    $(this).find('div').css({'background':'#fff'}).show();//显示div
    $('.div2').not($(this).find('div')).hide();
    $('.left-nav .right ul li').not($(this)).css({'background':'#fff'});
});
//鼠标移除区域时
$('.left-nav .right ul li').mouseleave(function(){
    $(this).find('div').hide();//隐藏div
    $(this).css({'background':'#fff'})
});
</script>
</html>