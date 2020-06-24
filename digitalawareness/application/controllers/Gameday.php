<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Gameday extends CI_Controller
{
    public function index()
    {
        $this->load->model('Gameday_model');
        $data['currentstats'] = $this->Gameday_model->getScore();
        $data['title'] = "Digital Awareness Game";
        $this->load->view('templates/header', $data);
        $this->load->view('templates/admnav');
        $this->load->view('gameday/index', $data);
        $this->load->view('templates/footer');
    }
    public function cpchecker()
    {
        $this->load->model('Gameday_model');
        $data['title'] = "Digital Awareness Game";

        $data['cp1'] = $this->Gameday_model->cp1();
        $data['cp2'] = $this->Gameday_model->cp2();
        $data['cp3'] = $this->Gameday_model->cp3();
        $data['cp4'] = $this->Gameday_model->cp4();
        $data['cp5'] = $this->Gameday_model->cp5();
        $data['cp6'] = $this->Gameday_model->cp6();
        $data['cp7'] = $this->Gameday_model->cp7();
        $data['cp8'] = $this->Gameday_model->cp8();
        $data['cp9'] = $this->Gameday_model->cp9();
        $data['cp10'] = $this->Gameday_model->cp10();
     
        $this->load->view('templates/header', $data);
        $this->load->view('templates/admnav');
        $this->load->view('gameday/cpchecker',$data);
        $this->load->view('templates/footer');
    }
}
