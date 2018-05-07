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
    }

}

