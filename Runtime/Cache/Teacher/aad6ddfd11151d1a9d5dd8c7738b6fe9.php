<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="/Experiment/Public/Admin/css/common.css"/>
    <link rel="stylesheet" type="text/css" href="/Experiment/Public/Admin/css/main.css"/>
</head>
<body>

<div class="search-wrap">
            <div class="search-content">
                <form action="<?php echo U('Class/findStudentByLike');?>" method="post">
                    <table class="search-tab">
                        <tr>
                            <th width="120">搜索范围:</th>
                            <input type="hidden" name="classId" value="<?php echo ($classId); ?>">
                            <td>
                                <select name="search-sort" id="">
                                    <option value="Sid">学生Id</option>
                                    <option value="Sname">姓名</option>
                                    <option value="Sage">年龄</option>
                                    <option value="Ssex">性别</option>
                                     <option value="Stele">手机号</option>
                                    <!-- <option value="Spwd">密码</option> -->
                                </select>   
                            </td>
                            <th width="70">关键字:</th>
                            <td><input class="common-text" placeholder="关键字" name="keywords" value="" id="" type="text"></td>
                            <td><input class="btn btn-primary btn2"  value="查询" type="submit"></td>
                </form>

                            <td>  <a href="<?php echo U('Class/addClassToStudent');?>/classId/<?php echo ($classId); ?>"> <input type="button" value="手动添加学生" > </a>   </td>
                            
                            <td> <form action="<?php echo U('Excel/uploadExcelAndInput');?>/modelName/Student" method="post" enctype="multipart/form-data">
                                   <input type="file" name="excelData">
                                   <button type="submit">批量导入</button>
                                </form> </td>
                            <td>  <a href="<?php echo U('Excel/outputMouldExcel');?>/modelName/student"> <input type="button" value="下载模板" > </a>   </td>
                        </tr>

                    </table>
                
            </div>
        </div>

        <div class="result-wrap">
           
            <div class="result-content">
                <table class="result-tab" width="100%">
                    <tr>
                        <th>学生Id</th>
                        <th>姓名</th>
                        <th>年龄</th>
                        <th>性别</th>
                        <th>手机号</th>


                    </tr>
                 <?php if(is_array($datas)): $i = 0; $__LIST__ = $datas;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$data): $mod = ($i % 2 );++$i;?><tr>
                        <td> <?php echo ($data['sid']); ?>  </td>
                        <td> <?php echo ($data['sname']); ?>  </td>
                        <td>  <?php echo ($data['sage']); ?>  </td>
                        <td>   <?php echo ($data['ssex']); ?>  </td>
                        <td>  <?php echo ($data['stele']); ?> </td>
                    </tr><?php endforeach; endif; else: echo "" ;endif; ?>

                    <tr>
                </table>
                <div class="list-page"> <?php echo ($count); ?> 条 1/1 页</div>
            </div>
            
                


        </div>
</body>
</html>