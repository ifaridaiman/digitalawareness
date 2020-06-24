<?php

class Auth_model extends CI_Model
{

    public function getTeam($id)
    {
        return $this->db->get_where('team', ['teamid' => $id])->row_array();
    }
    public function getCheckpoint($id)
    {
        return $this->db->get_where('checkpoint', ['cpid' => $id])->row_array();
    }
    public function updateStatus($id){
        $sql = 'UPDATE checkpoint SET cpstatus = 1 WHERE cpid = ?';
        return $this->db->query($sql,array($id));
    }
}
