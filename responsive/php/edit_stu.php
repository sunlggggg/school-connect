<?php
  session_start();
  error_reporting(E_ALL ^ E_NOTICE);
  if($_SESSION["login"] != '2' ){
    echo "<script>alert('你没有权限访问')</script>";
    echo"<script>window.location.href='login.php'</script>";
  }
  //$_SESSION['i']= $_GET['id'];
  //$_SESSION['i']= !isset($_GET['id']) ? $_GET['id'] : $_GET['id'];
  //echo $_SESSION['i'];
?>

<!DOCTYPE html>
<html lang="zh-CN">
<!-- 
    Author:武也婷 
    BuildDate:2018-5-17
    Version:1.0
    Function:address book
 -->
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
    <title>编辑</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../css/index.css" />
    <!-- HTML5 shim 和 Respond.js 是为了让 IE8 支持 HTML5 元素和媒体查询（media queries）功能 -->
    <!-- 警告：通过 file:// 协议（就是直接将 html 页面拖拽到浏览器中）访问页面时 Respond.js 不起作用 -->
    <!--[if lt IE 9]>
      <script src="https://cdn.jsdelivr.net/npm/html5shiv@3.7.3/dist/html5shiv.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/respond.js@1.4.2/dest/respond.min.js"></script>
    <![endif]-->
  </head>


  <body>
    <!--顶部-->
    <?php include("../html/top_login.html");?>

    <div class="container">
        <!--导航条-->
        <?php include("nav_stu.php");?>

        <!--面包屑-->
        <?php include("bread_path_stu.php");?>

        <!--连接数据库-->
        <?php include("conn.php");?>

        <!--新增列表-->
        <!--连接数据库-->
        <?php include("edit_form.php");?>


        <?php include("../html/footer.html");?>
    </div>

  </body>
  <script src="http://cdn.staticfile.org/jquery/2.1.1/jquery.min.js"></script>
  <script src="http://cdn.staticfile.org/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="https://cdn.bootcss.com/jquery/3.4.0/jquery.min.js"></script>
  <script src= "../js/nav.js"></script>
  <script src= "../js/bread.js"></script>
</html>

<?php echo "<script>bread('编辑','详情') </script>"?>
