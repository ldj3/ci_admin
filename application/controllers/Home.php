<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
* @Author: liangdaojing 
* @Date: 2018-05-07 16:31:07 
 * @Last Modified by: mikey.zhaopeng
 * @Last Modified time: 2018-05-07 17:25:08
*/
class Home extends My_Controller {
	
	/**
	 * 
	 * 继承父类
	 */
	public function __construct()
	{
		parent::__construct();
	}
	
	/**
	 * 
	 * 显示后台主页
	 */
    public function index()
    {
		$data['base_url'] = base_url();
		$data['site_url'] = site_url();

		//获取侧边导航栏数据
		$side_bar = $this->db->select('first_sidebar')->from('sidebar')->get()->result_array();
		print_r($side_bar);exit;
		$data['title'] = '后台首页';
		$this->load->view('home/home',$data);
    }

}
