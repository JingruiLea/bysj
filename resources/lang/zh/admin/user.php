<?php
return [
	'title' 	=> '学生管理',
	'desc' 		=> '学生列表',
	'create' 	=> '添加学生',
	'edit' 		=> '修改学生',
	'info' 		=> '学生信息',
	'permission'=> '权限',
	'role'		=> '角色',
	'module'	=> '模块',
	'model' 	=> [
		'id' 			=> 'ID',
		'name' 			=> '姓名',
		'username' 		=> '学号',
		'password' 		=> '密码',
		'email' 		=> '邮箱',
        'created_at' 	=> '创建时间',
        'updated_at' 	=> '修改时间',
	],
	'action' => [
		'create' => '<i class="fa fa-user"></i> 添加学生',
	],
	'other_permission'	=> '<strong>注意！</strong> 当某个角色的学生需要额外权限时添加。',
	'role_info'			=> '查看角色权限',
];