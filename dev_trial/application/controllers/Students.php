<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Students extends CI_Controller {

  /**
   * Index for trail web site
   */
  public function index() {
    $this->load->view('header');
    $this->load->view('students');
    $this->load->view('footer');
  }
}
