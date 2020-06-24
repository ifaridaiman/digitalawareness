<?php

class Checkpoint_model extends CI_model
{
    public function getName(){
        return $this->db->query('SELECT teamid, teamname FROM team');
    }
    public function updateScore($teamname,$score){
        $sql = 'Update score SET scoretotal = scoretotal + ? WHERE teamid = ?';
        return $this->db->query($sql,array($score,$teamname));
    }
    public function teamValidation($cp,$teamid,$score){
        
        $data = [
           'cpid' => $cp,
           'teamid' => $teamid,
           'scoregive' => $score,
           'cpvalidate' => 'complete'
           ];
        
        $this->db->insert('validate',$data);
    }
}