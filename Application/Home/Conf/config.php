<?php
return array(
    //'DB_DEBUG' => true,
    //'SHOW_PAGE_TRACE' =>true,
    'SESSION_AUTO_START' =>false,
	//'配置项'=>'配置值'
    //数据库配置信息
    'DB_TYPE'   => 'mysql', // 数据库类型
    'DB_HOST'   => '127.0.0.1', // 服务器地址
    'DB_NAME'   => 'zhanqun', // 数据库名
    'DB_USER'   => 'root', // 用户名
    'DB_PWD'    => 'root', // 密码
    'DB_PORT'   => 3306, // 端口
    'DB_CHARSET'=> 'utf8', // 字符集

    'title'=>'激情网——激情文学_情感口述实录_口述情感故事_另类情感实录',
    'keywords'=>'激情,文学,口述实录,情感口述,另类情感,情感故事',
    'description'=>'激情文学网是一个专注情感口述实录的网站,包括情感故事、另类情感实录、情感口述、情感文学等多方面内容，关注情感口述网阅读更多的情感文章。',
    'webdomian'=>empty($_SERVER['HTTP_X_CLIENT_PROTO']) ? 'http://'.$_SERVER['HTTP_HOST'] : $_SERVER['HTTP_X_CLIENT_PROTO'] . ':'.$_SERVER['HTTP_HOST'],
);