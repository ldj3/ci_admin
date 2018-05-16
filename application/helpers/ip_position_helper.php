<?php
/**
 * 根据用户IP获取用户地理位置
 * $ip  用户ip
 */
function get_position($ip){
    if(empty($ip)){
        return  '缺少用户ip';
    }
    $url = 'http://ip.taobao.com/service/getIpInfo.php?ip='.$ip;
	$ipContent = file_get_contents($url);
	$ipContent = json_decode($ipContent,true); 
	return $ipContent;
}


