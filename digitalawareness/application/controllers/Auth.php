<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('Auth_model');

    }

    public function index()
    {
        $this->form_validation->set_rules('id', 'Id', 'trim|required');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');
        if ($this->form_validation->run() == false) {
            $data['title'] = "Digital Awareness Game";
            $this->load->view('templates/header', $data);
            $this->load->view('auth/index');
            $this->load->view('templates/footer');
        } else {
            $this->teamlogin();
        }
    }
    // team login private fucntion
    private function teamlogin()
    {
        $id = $this->input->post('id');
        $password = $this->input->post('password');
        $team = $this->Auth_model->getTeam($id);

        if ($team) {
            if ($password == $team['teampassword']) {
                $data = [
                    'teamid' => $team['teamid']
                ];
                $this->session->set_userdata($data);
                
                if($team['teamstatus']=='0'){
                    redirect(base_url('team/teamname'));
                }else{
                    redirect(base_url('team'));
                }
                
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">contact admin for password</div>');
                redirect(base_url());
            }
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">contact admin for team registration</div>');
            redirect(base_url());

        }
    }
    public function cplogin()
    {
        $this->form_validation->set_rules('id', 'Id', 'trim|required');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');
        if ($this->form_validation->run() == false) {
            $data['title'] = "Digital Awareness Game";
            $this->load->view('templates/header', $data);
            $this->load->view('auth/cplogin');
            $this->load->view('templates/footer');
        } else {
            $this->checkpointlogin();
        }
    }
    private function checkpointlogin()
    {
        $id = $this->input->post('id');
        $password = $this->input->post('password');
        $checkpoint = $this->Auth_model->getCheckpoint($id);

        if ($checkpoint) {
            if ($password == $checkpoint['cppassword']) {
                $data = [
                    'cpid' => $checkpoint['cpid']
                ];
                $this->session->set_userdata($data);
                
                if($checkpoint['cpstatus']=='0'){
                    $this->Auth_model->updateStatus($id);
                    redirect(base_url('checkpoint'));
                }else{
                    redirect(base_url('checkpoint'));
                }
                
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">contact checkpoint for password</div>');

            }
        } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">contact admin for checkpoint registration</div>');

        }
    }
    public function logout()
    {
        unset($_SESSION['teamid'],
        $_SESSION['cpid']);
        session_write_close();
        redirect(base_url());
    }
}
