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
		$side_bar = $this->db->where('ismenu','1')->from('sidebar')->get()->result_array();
		foreach ($side_bar as $key => $value) {
			$side_id = $this->db->select('id')->where('sidebar_name',$value['sidebar_name'])->where('ismenu','1')->from('sidebar')->get()->row_array();
			$seconde_name = $this->db->where('pid',$side_id['id'])->from('sidebar')->get()->result_array();
			$side_bar[$key]['seconde_name'] = $seconde_name;
		}
		// print_r($side_bar);exit;
		$data['side_bar'] = $side_bar;
		$data['title'] = '后台首页';
		$this->load->view('home/home',$data);
		$this->load->view('header',$data);
    }

}
