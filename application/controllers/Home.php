<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
* @Author: liangdaojing 
* @Date: 2018-05-07 16:31:07 
 * @Last Modified by: liangdaojing
 * @Last Modified time: 2018-05-10 18:31:56
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
		$data['title'] = '后台首页';
		$this->load->view('home/home',$data);
		$this->load->view('footer',$data);
	}
	
	public function dashboard2()
    {
		$data['title'] = '后台首页';
		$this->load->view('dashboard/index_2',$data);
		$this->load->view('footer',$data);
	}
	
	public function general()
    {
		$data['title'] = '后台首页';
		$this->load->view('uielement/ui_elements_general',$data);
		$this->load->view('footer',$data);
	}
	
	public function buttons()
    {
		$data['title'] = '后台首页';
		$this->load->view('uielement/ui_elements_buttons',$data);
		$this->load->view('footer',$data);
	}
	
	public function tabs()
    {
		$data['title'] = '后台首页';
		$this->load->view('uielement/ui_elements_tabs_accordions',$data);
		$this->load->view('footer',$data);
	}
	
	public function typography()
    {
		$data['title'] = '后台首页';
		$this->load->view('uielement/ui_elements_typography',$data);
		$this->load->view('footer',$data);
	}
	
	public function tree_view()
    {
		$data['title'] = '后台首页';
		$this->load->view('uielement/tree_view',$data);
		$this->load->view('footer',$data);
	}
	
	public function nestable_list()
    {
		$data['title'] = '后台首页';
		$this->load->view('uielement/nestable',$data);
		$this->load->view('footer',$data);
	}
	
	public function calendar()
    {
		$data['title'] = '后台首页';
		$this->load->view('components/calendar',$data);
		$this->load->view('footer',$data);
	}
	
	public function data_table()
    {
		$data['title'] = '后台首页';
		$this->load->view('components/data_table',$data);
		$this->load->view('footer',$data);
	}
	
	public function grids()
    {
		$data['title'] = '后台首页';
		$this->load->view('components/grids',$data);
		$this->load->view('footer',$data);
	}
	
	public function visual_charts()
    {
		$data['title'] = '后台首页';
		$this->load->view('components/charts',$data);
		$this->load->view('footer',$data);
	}
	
	public function conversations()
    {
		$data['title'] = '后台首页';
		$this->load->view('components/messengers',$data);
		$this->load->view('footer',$data);
	}
	
	public function gallery()
    {
		$data['title'] = '后台首页';
		$this->load->view('components/gallery',$data);
		$this->load->view('footer',$data);
	}
	
	public function form_layouts()
    {
		$data['title'] = '后台首页';
		$this->load->view('formstuff/form_layout',$data);
		$this->load->view('footer',$data);
	}
	
	public function form_components()
    {
		$data['title'] = '后台首页';
		$this->load->view('formstuff/form_component',$data);
		$this->load->view('footer',$data);
	}
	
	public function form_wizard()
    {
		$data['title'] = '后台首页';
		$this->load->view('formstuff/form_wizard',$data);
		$this->load->view('footer',$data);
	}
	
	public function form_validation()
    {
		$data['title'] = '后台首页';
		$this->load->view('formstuff/form_validation',$data);
		$this->load->view('footer',$data);
	}
	
	public function dropzone_file_upload()
    {
		$data['title'] = '后台首页';
		$this->load->view('formstuff/dropzone',$data);
		$this->load->view('footer',$data);
	}
	
	public function font_awesome()
    {
		$data['title'] = '后台首页';
		$this->load->view('home/home',$data);
		$this->load->view('footer',$data);
	}
	
	public function glyphicons()
    {
		$data['title'] = '后台首页';
		$this->load->view('home/home',$data);
		$this->load->view('footer',$data);
	}
	
	public function google_maps()
    {
		$data['title'] = '后台首页';
		$this->load->view('home/home',$data);
		$this->load->view('footer',$data);
	}
	
	public function vector_maps()
    {
		$data['title'] = '后台首页';
		$this->load->view('home/home',$data);
		$this->load->view('footer',$data);
	}
	
	public function blank_page()
    {
		$data['title'] = '后台首页';
		$this->load->view('home/home',$data);
		$this->load->view('footer',$data);
	}
	
	public function sidebar_closed_page()
    {
		$data['title'] = '后台首页';
		$this->load->view('home/home',$data);
		$this->load->view('footer',$data);
	}
	
	public function coming_soon()
    {
		$data['title'] = '后台首页';
		$this->load->view('home/home',$data);
		$this->load->view('footer',$data);
	}
	
	public function blog()
    {
		$data['title'] = '后台首页';
		$this->load->view('home/home',$data);
		$this->load->view('footer',$data);
	}
	

	public function about_us()
    {
		$data['title'] = '后台首页';
		$this->load->view('home/home',$data);
		$this->load->view('footer',$data);
	}
	
	public function contact_us()
    {
		$data['title'] = '后台首页';
		$this->load->view('home/home',$data);
		$this->load->view('footer',$data);
	}
	
	public function lock_screen()
    {
		$data['title'] = '后台首页';
		$this->load->view('home/home',$data);
		$this->load->view('footer',$data);
	}
	
	public function profile()
    {
		$data['title'] = '后台首页';
		$this->load->view('home/home',$data);
		$this->load->view('footer',$data);
	}
	
	public function invoice()
    {
		$data['title'] = '后台首页';
		$this->load->view('home/home',$data);
		$this->load->view('footer',$data);
	}
	
	public function pricing_tables()
    {
		$data['title'] = '后台首页';
		$this->load->view('home/home',$data);
		$this->load->view('footer',$data);
	}
	
	public function faq()
    {
		$data['title'] = '后台首页';
		$this->load->view('home/home',$data);
		$this->load->view('footer',$data);
	}
	
	public function error_404()
    {
		$data['title'] = '后台首页';
		$this->load->view('home/home',$data);
		$this->load->view('footer',$data);
	}
	
	public function error_505()
    {
		$data['title'] = '后台首页';
		$this->load->view('home/home',$data);
		$this->load->view('footer',$data);
	}



}
