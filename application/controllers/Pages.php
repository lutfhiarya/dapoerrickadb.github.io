<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends CI_Controller {

    public function index()
    {
        $data["title"] = "Dapoerricka";
        $this->load->view("templates/home/header", $data);
        $this->load->view("pages/index");
        $this->load->view("templates/home/footer");
    }


    
    // About: Start
    public function about()
    {
        $data["title"] = "About - Dapoerricka";
        $this->load->view("templates/home/header", $data);
        $this->load->view("pages/about");
        $this->load->view("templates/home/footer");
    }
    // About: End

    public function contact()
    {
        $data["title"] = "Contact - Dapoerricka";
        $this->load->view("templates/home/header", $data);
        $this->load->view("pages/contact");
        $this->load->view("templates/home/footer");
    }
}