
<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Checkpoint extends CI_Controller
{
     public function __construct(){
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('Checkpoint_model');

    }
    public function index()
    {
        //formvalidation
        $this->form_validation->set_rules('teamid','teamid','required');
        $this->form_validation->set_rules('score','score','required'); 
        
        //variable
        $data['team'] =  $this->Checkpoint_model->getName();
        $data['title'] = "Digital Awareness Game";

         if($this->form_validation->run() == false){
             
             if(isset($_SESSION['cpid'])){
            
                $this->load->view('templates/header', $data);
                $this->load->view('templates/cpnav');
                $this->load->view('checkpoint/index',$data);
                $this->load->view('templates/footer');
            }else{
                redirect(base_url('auth/cplogin'));
            }
         }else{
            
            $teamname = $this->input->post('teamid');
            $score = $this->input->post('score');
            $update = $this->Checkpoint_model->updateScore($teamname,$score);
             if($update == '1'){
                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Done</div>');
                $this->Checkpoint_model->teamValidation($_SESSION['cpid'],$teamname,$score);
                $_POST = array();

                $this->load->view('templates/header', $data);
                $this->load->view('templates/cpnav');
                $this->load->view('checkpoint/index',$data);
                $this->load->view('templates/footer');
                sleep(3);
                redirect(base_url('gameday'));
            }else{
                echo 'something wrong';
            }
         }
        
    }

}
