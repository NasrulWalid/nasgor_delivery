<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MenuController extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('MenuModel');
    }

    public function index()
    {
        $this->load->model('MenuModel');
        $data['menu'] = $this->MenuModel->get_all();
        $this->load->view('menu/index', $data);
    }

    public function create()
    {
        $this->load->view('menu/create');
    }

    public function store()
    {
        $this->MenuModel->insert($this->input->post());
        redirect('menu');
    }

    public function edit($id)
    {
        $data['menu'] = $this->MenuModel->get_by_id($id);
        $this->load->view('menu/edit', $data);
    }

    public function update($id)
    {
        $this->MenuModel->update($id, $this->input->post());
        redirect('menu');
    }

    public function delete($id)
    {
        $this->MenuModel->delete($id);
        redirect('menu');
    }
}