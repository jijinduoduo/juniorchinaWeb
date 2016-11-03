<?php
return array(
	//'配置项'=>'配置值'
	'DEFAULT_MODULE'        =>  'Home',  // 默认模块
	
	
	/* 数据库设置 */
    'DB_TYPE'               =>  'mysql',     // 数据库类型
    'DB_HOST'               =>  '192.168.2.231', // 服务器地址
    'DB_NAME'               =>  'juniorchina',          // 数据库名
    'DB_USER'               =>  'juniorchina',      // 用户名
    'DB_PWD'                =>  'juniorchina123',          // 密码
    'DB_PORT'               =>  '3306',        // 端口
    'DB_PREFIX'             =>  '',    // 数据库表前缀
    'DB_CHARSET'            =>  'utf8',      // 数据库编码默认采用utf8
    
    
    
    /**
	 * 配置访问的url路径格式
	 */
	  'URL_MODEL'             =>  1,       // URL访问模式,可选参数0、1、2、3,代表以下四种模式：
	  
	  'TMPL_L_DELIM'          =>  '<{',            // 模板引擎普通标签开始标记
      'TMPL_R_DELIM'          =>  '}>',            // 模板引擎普通标签结束标记
);