<?php

/**
 * 日志操作类
 *
 *
 */
class Log_mdl extends CI_Model {
    
    public function __construct() {
		parent::__construct ();
    }

    /**
     * 
     * 创建操作日志
     */
    public function create_action ($data)
    {
        $data = array(
            'user_name' => $data['user_name'],
            'current_url' => $data['current_url'],
            'user_agent' => $data['user_agent'],
            'server_name' => $data['server_name'],
            'request_uri' => $data['request_uri'],
            'ip_address' => $data['ip_address'],
            'position' => isset($data['position']) ? $data['position'] : null,
            'created_at' =>  isset($data['created_at']) ? $data['created_at'] : date("Y-m-d H:i:s"),
        );

        $this->db->insert('action_log', $data);
    }

    /**
     * 
     * 创建用户登录，登出日志
     */
    public function create_login ($data)
    {
        $data = array(
            'user_name' => $data['user_name'],
            'user_agent' => $data['user_agent'],
            'ip_address' => $data['ip_address'],
            'status' => $data['status'],
            'position' => isset($data['position']) ? $data['position'] : null,
            'created_at' =>  isset($data['created_at']) ? $data['created_at'] : date("Y-m-d H:i:s"),
        );
        $this->db->insert('login_log', $data);
    }

    /**
     * 
     * 根据用户权限显示侧边栏
     */
    public function sidebar_power ($id)
    {
        $user_access_id = $this->db->select('group_id')->where('uid',$id)->get('auth_group_access')->row_array();
        $user_access_data = $this->db->select('rules')->where('id',$user_access_id['group_id'])->get('auth_group')->row_array();
        $user_access_data['rules'] = explode(",", $user_access_data['rules']);
        $side_bar = $this->db->where('ismenu','1')->where('status','1')->where_in('id',$user_access_data['rules'])->order_by('weigh', 'DESC')->from('sidebar')->get()->result_array();
		foreach ($side_bar as $key => $value) {
			$seconde_name = $this->db->where('pid',$value['id'])->where('status','1')->where_in('id',$user_access_data['rules'])->order_by('weigh', 'DESC')->from('sidebar')->get()->result_array();
			$side_bar[$key]['seconde_name'] = $seconde_name;
        }
        return $side_bar;
        
    }
    

}