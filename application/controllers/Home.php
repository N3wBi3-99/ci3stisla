<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Home extends CI_Controller
{
  public function index()
  {
    $data = [
      'title' => 'Home',
      'isi' => 'home/index'
    ];
    $this->load->view('layout/wrapper', $data);
  }
}
  
  /* End of file Home.php */
