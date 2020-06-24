<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Team extends CI_Controller
{
    public function __construct(){
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('Team_model');
    }
    public function index()
    {
        
        $data['title'] = "Digital Awareness Game";
        if(isset($_SESSION['teamid'])){
            $data['teamid']=$_SESSION['teamid'];
            $data['myscore'] = $this->Team_model->getTeamScore($data['teamid']);
            $this->load->view('templates/header', $data);
            $this->load->view('templates/teamnav');
            $this->load->view('team/index',$data);
            $this->load->view('templates/footer');
        }else{
            redirect(base_url());
        }
    }
    public function teamname()
    {
        $this->form_validation->set_rules('teamname','teamname','trim|required');
                $data['title'] = "Digital Awareness Game";

        
        if($this->form_validation->run() == false){
           if(isset($_SESSION['teamid'])){
            $this->load->view('templates/header', $data);
            $this->load->view('templates/teamnav');
            $this->load->view('team/teamname');
            $this->load->view('templates/footer');
        }else{
            redirect(base_url());
        }
        }else{
            
            $teamname = $this->input->post('teamname');
            $update = $this->Team_model->updateteamname($_SESSION['teamid'],$teamname);
            if($update == '1'){
                redirect(base_url('team'));
            }
        
        }
        
        
        
    }
    

        
    
}
