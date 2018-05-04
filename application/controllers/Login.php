<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends My_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	public function __construct()
	{
		parent::__construct();
	}

	/**
	 * 
	 * 登录页面
	 */
	public function index()
	{
		$this->load->helper('url');
		$data['title'] = '用户登录';
		$this->load->view('login/login',$data);
	}

	/**
	 * 
	 * 检验登录
	 */
	public function dologin() 
	{
		
		//加载加密
		$this->load->library('user_password');

		//获取提交数据
		$post_data = $this->input->post();
		$post_username = $post_data['username'];
		$post_password = $post_data['password'];

		//验证数据是否为空
		if (empty($post_data) or empty($post_password))
		{
			$data['code'] = '9';
			$data['msg'] = '账号密码不能为空!';
			echo json_encode($data);exit;
		}

		//验证是否手机号登录
		if (preg_match("/^1[34578]\d{9}$/",$post_username)) {
			$data_value = $this->db->where('phone',$post_username)->from('administrators')->get()->row_array();
			if (empty($data_value)) {
				$data['code'] = '2';
				$data['msg'] = '手机号码不存在!';
				echo json_encode($data);exit;
			}
		}else {
			$data_value = $this->db->where('name',$post_username)->from('administrators')->get()->row_array();
			if (empty($data_value)) {
				$data['code'] = '1';
				$data['msg'] = '账号不存在!';
				echo json_encode($data);exit;
			}
		}

		//验证密码
		if (password_verify($post_password,$data_value['password'])) {
			$data['code'] = '0';

			//开启session
			
			echo json_encode($data);
		}else {
			$data['code'] = '3';
			$data['msg'] = '密码错误!';
			echo json_encode($data);exit;
		}

		


		
	}
}
