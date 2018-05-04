<?php

/**
 * 
 * @author js-php-01 ming
 * date:2016-10-31
 * 微信模板发送消息类。
 * 说明：openid用户必须关注推送的公众号
 */
class User_password  {
    
    /**
     * 这个例子对服务器做了基准测试（benchmark），检测服务器能承受多高的 cost
     * 在不明显拖慢服务器的情况下可以设置最高的值
     * 8-10 是个不错的底线，在服务器够快的情况下，越高越好。
     * 以下代码目标为  ≤ 50 毫秒（milliseconds），
     * 适合系统处理交互登录。
     */
    public function best_cost () 
    {
        $timeTarget = 0.05; // 50 毫秒（milliseconds）
        $cost = 8;
        do {
            $cost++;
            $start = microtime(true);
            password_hash("test", PASSWORD_BCRYPT, ["cost" => $cost]);
            $end = microtime(true);
        } while (($end - $start) < $timeTarget);
        return $cost;
    }

    /**
     * 
     * 加密
     */
    public function encryption_password ($data) 
    {
        $cost = $this->best_cost();
        return $cost;
        $options = [
            'cost' => $cost,
            'salt' => mcrypt_create_iv(22, MCRYPT_DEV_URANDOM),
        ];
        return password_hash("rasmuslerdorf", PASSWORD_BCRYPT, $options);
    }

    

}

?>