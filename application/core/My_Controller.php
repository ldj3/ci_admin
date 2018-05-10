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
        if (empty($_SESSION['user_name'])) {
            redirect('login/index');
        }

        //加载头部公共文件
        $data['base_url'] = base_url();
        $data['site_url'] = site_url();
        //获取侧边导航栏数据
		$side_bar = $this->db->where('ismenu','1')->from('sidebar')->get()->result_array();
		foreach ($side_bar as $key => $value) {
			$side_id = $this->db->select('id')->where('sidebar_name',$value['sidebar_name'])->where('ismenu','1')->from('sidebar')->get()->row_array();
			$seconde_name = $this->db->where('pid',$side_id['id'])->from('sidebar')->get()->result_array();
			$side_bar[$key]['seconde_name'] = $seconde_name;
		}
        $data['side_bar'] = $side_bar;
        $this->load->view('header',$data);
        
        
    }

}

