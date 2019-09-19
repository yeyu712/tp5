<?php
namespace app\admin\validate;
use think\Validate;
class Admin extends Validate
{      
    protected $rule = [
            'username'  =>  'require|max:25',
            'password' =>  'require',
    ];
    
    protected $message  =   [
        'username.require' => '管理员名称必须',
        'username.max' => '管理员名称长度不得大于25位',
        'password.require' => '密码必须填写',
    ];
 
    protected $scene = [
        'add'  =>  ['username','password'],
        'edit'  =>  ['username'=>'require'],
    ];
}
