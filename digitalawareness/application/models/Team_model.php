<?php

class Team_model extends CI_model
{
    public function getTeamScore($teamid)
    {
        $sql = 'SELECT team.teamname,mata.scoretotal FROM score AS mata JOIN team ON  mata.teamid=team.teamid WHERE mata.teamid=?';
        return  $this->db->query($sql, array($teamid));
    }
    public function updateTeamName($teamid,$teamname){
        $sql = 'UPDATE team SET teamname = ?,teamstatus = 1 WHERE teamid = ?';
        return $this->db->query($sql,array($teamname,$teamid));
    }
}