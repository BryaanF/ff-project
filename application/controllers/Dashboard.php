<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
    public function __construct()
    {
      parent::__construct();
      is_logged_in();
    }
    
    public function page()
    {
      $data['title'] = 'Page';
      $data['user'] = $this->db->get_where('user',['email' => $this->session->userdata('email')])->row_array();

      $this->load->view('templates/header',$data);
      $this->load->view('templates/sidebar',$data);
      $this->load->view('templates/topbar',$data);
      $this->load->view('dashboard/page',$data);
      $this->load->view('templates/footer');
    }

    public function activitylog() {
      $data['title'] = 'Activity Log';
      $data['user'] = $this->db->get_where('user',['email' => $this->session->userdata('email')])->row_array();

      $this->load->view('templates/header',$data);
      $this->load->view('templates/sidebar',$data);
      $this->load->view('templates/topbar',$data);
      $this->load->view('dashboard/activitylog',$data);
      $this->load->view('templates/footer');
    }
}
