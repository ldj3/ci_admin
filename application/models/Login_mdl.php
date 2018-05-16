
<?php

/**
 * 登录操作类
 *
 *
 */
class Login_mdl extends CI_Model {
    
    public function __construct() {
		parent::__construct ();
    }

    /**
     * 
     * 根据用户权限显示侧边栏
     * id 用户ID
     */
    public function sidebar_power ($id)
    {
        $this->db->select('group_id');
        $this->db->where('uid',$id);
        $this->db->from('auth_group_access');
        $user_access_id = $this->db->get()->row_array();
        $this->db->select('rules');
        $this->db->where('id',$user_access_id['group_id']);
        $this->db->from('auth_group');
        $user_access_data = $this->db->get()->row_array();
        if ($user_access_data['rules'] == 'all') {
            $this->db->select('id');
            $this->db->from('sidebar');
            $side_bar_id = $this->db->get()->result_array();
            $user_access_data['rules'] = array_column($side_bar_id,'id');
        }else {
            // 获取用户权限的边栏
            $user_access_data['rules'] = explode(",", $user_access_data['rules']);
            foreach ($user_access_data['rules'] as $k => $v) {
                $this->db->where('id',$v);
                $this->db->where('status','1');
                $this->db->from('sidebar');
                $side_bar_data = $this->db->get()->row_array();
                if ($side_bar_data['ismenu'] == '1') {
                    $this->db->select('id');
                    $this->db->where('status','1');
                    $this->db->where('pid',$side_bar_data['id']);
                    $this->db->from('sidebar');
                    $is_second = $this->db->get()->result_array();
                    $is_second = array_column($is_second,'id');
                    foreach ($is_second as $key => $value) {
                        if (!in_array($value,$user_access_data['rules'])) {
                            unset($is_second[$key]);
                        }
                    }
                    if (empty($is_second)) {
                        unset($user_access_data['rules'][$k]);
                    }
                }else {
                    if (!in_array($side_bar_data['pid'],$user_access_data['rules'])) {
                        array_push($user_access_data['rules'],$side_bar_data['pid']);
                    }
                }
            }
            if (empty($user_access_data['rules'])) {
                $user_access_data['rules'][] = '1';
            }
        }
        $this->db->where('ismenu','1');
        $this->db->where('status','1');
        $this->db->where_in('id',$user_access_data['rules']);
        $this->db->order_by('weigh','DESC');
        $this->db->from('sidebar');
        $side_bar = $this->db->get()->result_array();
		foreach ($side_bar as $key => $value) {
            $this->db->where('pid',$value['id']);
            $this->db->where('status','1');
            $this->db->where_in('id',$user_access_data['rules']);
            $this->db->order_by('weigh','DESC');
            $this->db->from('sidebar');
            $seconde_name = $this->db->get()->result_array();
			$side_bar[$key]['seconde_name'] = $seconde_name;
        }
        return $side_bar;
    }
    

}