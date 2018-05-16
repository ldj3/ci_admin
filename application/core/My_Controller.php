<?php
defined('BASEPATH') OR exit('No direct script access allowed');

abstract class My_Controller extends CI_Controller
{
    
    /**
     * 构造函数
     *
     * @access public
     * @return void
     */
    public function  __construct()
    {
        parent::__construct();
        
        
        //加载并初始化数据库类
        $this->load->database();
        $this->load->helper('url');
        $this->load->library('session');
        $this->load->helper("ip_position");
        $this->load->model('Log_mdl');
        $this->load->model('Login_mdl');
        print_r($_SESSION);exit;
        

        // 判断是否登录
        if (empty($_SESSION['user_name'])) {
            redirect('login/index');
        }

        // 记录操作日志
        $data['user_name'] = $_SESSION['user_name'];
        $data['current_url'] = current_url();
		$data['user_agent'] = $this->input->user_agent();
		$data['server_name'] = base_url();
		$data['request_uri'] = uri_string();
		$data['ip_address'] = $this->input->ip_address();
		$data['created_at'] = date("Y-m-d H:i:s");
		$ip_position = get_position($data['ip_address']);
		if ($ip_position['code'] == 0) {
			$data['position'] = $ip_position['data']['country'].$ip_position['data']['region'].$ip_position['data']['city'].$ip_position['data']['isp'];
        }
        // $this->db->cache_on();
        $this->Log_mdl->create_action($data);
        // $this->db->cache_off();
        
        // 当操作记录表过大时，清除表数据
        $max_log = $this->db->count_all('action_log');
        if ($max_log > '200') {
            $this->db->empty_table('action_log');
        }

        //加载头部公共文件
        $data['base_url'] = base_url();
        $data['site_url'] = site_url();

        // 根据用户权限获取侧边导航栏数据
        $session_data = $this->session->userdata();
        $side_bar = $this->Login_mdl->sidebar_power($session_data['user_id']);
        $data['side_bar'] = $side_bar;

        //加载视图
        $this->load->view('header',$data);
        
    }

}

