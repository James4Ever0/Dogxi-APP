<?php
$url="http://floor.huluxia.com/post/create/list/ANDROID/2.0?_key=".$_COOKIE['key']."&user_id=".$_COOKIE['id'];
$json = file_get_contents($url);
echo $json;
?>