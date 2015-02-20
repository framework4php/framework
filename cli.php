<?php
function microtime_float()
{
   list($usec, $sec) = explode(" ", microtime());
   return ((float)$usec + (float)$sec);
}
$t1 =  microtime_float();
// 定义 PUBLIC_PATH	1``````

define('PUBLIC_PATH', __DIR__);

// 启动器

require PUBLIC_PATH.'/bootstrap.php';
