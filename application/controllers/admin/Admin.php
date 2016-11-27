<?php

/**
 * Created by PhpStorm.
 * User: lab
 * Date: 27/11/2559
 * Time: 10:45
 */
class Admin extends CI_Controller
{
    public function index()
    {
        $this->load->view('admin/layout/admin_header_view');
        $this->load->view('admin/layout/admin_sidebar_view');
        $this->load->view('admin/admin_view');
        $this->load->view('admin/layout/admin_footer_view');
    }
    public function category()
    {
        $this->load->view('admin/layout/admin_header_view');
        $this->load->view('admin/layout/admin_sidebar_view');
        $this->load->view('admin/category_view');
        $this->load->view('admin/layout/admin_footer_view');
    }
    public function add_category()
    {
        $this->load->view('admin/layout/admin_header_view');
        $this->load->view('admin/layout/admin_sidebar_view');
        $this->load->view('admin/add_category_view');
        $this->load->view('admin/layout/admin_footer_view');
    }
    public function create_category()
    {
        $this->load->model('category_model');
        $name=$this->input->post('name');
    }

    public function news()
    {
        $this->load->view('admin/layout/admin_header_view');
        $this->load->view('admin/layout/admin_sidebar_view');
        $this->load->view('admin/news_view');
        $this->load->view('admin/layout/admin_footer_view');
    }
    public function comment()
    {
        $this->load->view('admin/layout/admin_header_view');
        $this->load->view('admin/layout/admin_sidebar_view');
        $this->load->view('admin/comment_view');
        $this->load->view('admin/layout/admin_footer_view');
    }
    public function user()
    {
        $this->load->view('admin/layout/admin_header_view');
        $this->load->view('admin/layout/admin_sidebar_view');
        $this->load->view('admin/user_view');
        $this->load->view('admin/layout/admin_footer_view');
    }
}