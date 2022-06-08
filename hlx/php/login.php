<?php
$account=$_POST['account'];
$pwd=md5($_POST['password']);
function send_post($url, $post_data) {
  $postdata = http_build_query($post_data);
  $options = array(
    'http' => array(
      'method' => 'POST',
      'header' => 'Content-type:application/x-www-form-urlencoded',
      'content' => $postdata,
      'timeout' => 15 * 60 // 超时时间（单位:s）
    )
  );
  $context = stream_context_create($options);
  $result = file_GET_contents($url, false, $context);
  return $result;
}
$post_data = array(
  'account' => "$account",
  'password' => "$pwd",
  'login_type' => '2'
);
$context=json_decode(send_post('http://xswan.xyz/hlx/3l', $post_data));
if((int)$context->status ==1){
$key = $context->_key;
$id =$context->user->userID;
$nick =$context->user->nick;
$avatar =$context->user->avatar;
setcookie('id',$id,time()+3600*24,'/');
setcookie('key',$key,time()+3600*24,'/');
setcookie('nick',$nick,time()+3600*24,'/');
setcookie('avatar',$avatar,time()+3600*24,'/');
echo "<h1>$nick,登录成功！</h1><a href='admin.php'><h2>正在自动跳转...</h2></a>";
header ("Refresh:2;url=../admin.php");
}else{
  die("<h1><strong>账号或密码错误~请退出重试~</strong><h1>");
}
?>