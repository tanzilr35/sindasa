<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Hitungstatus extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('Dashboard_model');
  }

  public function index()
  {
    $judul = [
      'title' => 'Total Status Gizi',
      'sub_title' => ''
    ];

    $data['gizi_buruk'] = $this->Dashboard_model->totalgb();

    $this->load->view('templates/header', $judul);
    $this->load->view('hitung/dashboard', $data);
    $this->load->view('templates/footer');
  }
}
