<?php
/**
 * 用户session
 * $data  用户数据对应用户表
 */
function set_customer($data){
    if(empty($data['id'])){
        return  '缺少用户ID';
    }

    $CI = & get_instance();
    $CI->load->library('session');

    $customer = array(
            'user_name'=>'', //用户名称
            'user_id'=>$user_id, //用户ID
            'real_name'=>'',//真实姓名
            'nick_name'=>'',//系统昵称
            'wechat_nickname'=>'',//微信昵称
            'wechat_avatar'=>'',//微信头像
            'brief_avatar'=>'',//系统头像
            'img_avatar'=>'',//系统头像
            'is_active'=>0,
    );
    
    
}


