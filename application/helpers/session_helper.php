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

    $user_info = array(
            'user_id'=>$data['id'], //用户ID
            'user_name'=>$data['name'], //用户名称
            'user_phone'=>$data['phone'], //用户手机号
            'user_ip'=>$data['IP'], //用户IP地址
            'user_last_login'=>$data['last_login'], //用户最后一次登录时间
            'user_in'=>true,//登录状态
    );
    
    $CI->session->set_userdata($user_info);
    
}


