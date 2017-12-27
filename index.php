<?php
if (version_compare(phpversion(), "5.4.0", "lt")) {
    exit('php version must greater than 5.4.0');
}
ob_implicit_flush();
require_once('./core/SocketChat.php');

//run server
//提交测试
$port = 8090;
new Core\SocketChat( $port );
