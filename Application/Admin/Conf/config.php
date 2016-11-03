<?php
return array(
	//'配置项'=>'配置值'
	'TMPL_PARSE_STRING' => array(
        '__STATIC__' => __ROOT__ . '/Public/static',
        '__IMG__'    => __ROOT__ . '/Public/' . MODULE_NAME . '/images',
        '__CSS__'    => __ROOT__ . '/Public/' . MODULE_NAME . '/css',
        '__JS__'     => __ROOT__ . '/Public/' . MODULE_NAME . '/js',
        '__font__'   => __ROOT__ .'/Public/' . MODULE_NAME . '/font',
        '__Kind__'   => __ROOT__ .'/Public/' . MODULE_NAME . '/kind',        
    ),
    
	//默认的控制器名称
	//'DEFAULT_CONTROLLER'    =>  'Public',
	// 默认操作名称
	//'DEFAULT_ACTION'        =>  'login', 
	'SHOW_PAGE_TRACE'=>true,
	
	
);