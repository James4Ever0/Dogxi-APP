<?php
if(isset($_COOKIE['id'])){
    header ("Refresh:0;url=admin.php");
}
?>
<html>
    <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <title>葫芦侠3L-Dogxi</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link href="./css/dogxi.css" rel="stylesheet">
    </head>
  <body>
    <div class="container">
      <form class="form-signin" method="post" action="./php/login.php">
        <h2 class="form-signin-heading">请登陆您的账号:</h2>
        <br/>
        <input type="text" name="account" class="form-control" placeholder="账号" required autofocus>
        <br/>
        <input type="password" name="password" class="form-control" placeholder="密码" required>
        <div class="checkbox">
          <label>
            <input type="checkbox" value="remember-me">是否阅读并同意<a href="https://ttaozhi.com/t/t/privacyPolicies.html">《隐私条款与用户协议》</a>
          </label>
        <p>
        <div class="alert alert-danger" role="alert" style="display:none">账号或密码错误，请重试</div>
        <div class="alert alert-success" role="alert" style="display:none">登录成功!正在跳转...</div>
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit">登录</button>
        <p>
      <div class="alert alert-info alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <strong>注意:</strong>账号数据仅储存于Cookie中，一天内自动失效！
</div>
      </form>
    </div> 
        <footer class="footer">
      <div class="container">
        <p class="text-muted">©2022 | made by <a href="http://dogxi.cn">Dogxi</a> | Q群:<a href="https://jq.qq.com/?_wv=1027&k=ahA6D0P5">977243234</a> | <a href="https://beian.miit.gov.cn/" class="text-muted">琼ICP备2021008334号-1</a></p>
      </div>
    </footer>
        <script src="https://cdn.bootcss.com/blueimp-md5/2.12.0/js/md5.min.js"></script>
        <script src="https://fastly.jsdelivr.net/npm/jquery@1.12.4/dist/jquery.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        </body>
</html>