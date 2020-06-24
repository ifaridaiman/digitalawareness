<?php

class Gameday_model extends CI_model
{
    public function getScore()
    {
        return  $this->db->query('SELECT team.teamname,mata.scoretotal FROM score AS mata JOIN team ON  mata.teamid=team.teamid WHERE team.teamstatus=1 ORDER BY mata.scoretotal DESC');
    }
    public function cp1(){

        return $this->db->query('SELECT t.teamname, vl.cpvalidate,vl.teamid FROM validate AS vl JOIN team AS t ON vl.teamid = t.teamid WHERE vl.cpid = 1');
    }
    public function cp2(){

        return $this->db->query('SELECT t.teamname, vl.cpvalidate,vl.teamid FROM validate AS vl JOIN team AS t ON vl.teamid = t.teamid WHERE vl.cpid = 2');
    }
    public function cp3(){

        return $this->db->query('SELECT t.teamname, vl.cpvalidate,vl.teamid FROM validate AS vl JOIN team AS t ON vl.teamid = t.teamid WHERE vl.cpid = 3');
    }
    public function cp4(){

        return $this->db->query('SELECT t.teamname, vl.cpvalidate,vl.teamid FROM validate AS vl JOIN team AS t ON vl.teamid = t.teamid WHERE vl.cpid = 4');
    }
    public function cp5(){

        return $this->db->query('SELECT t.teamname, vl.cpvalidate,vl.teamid FROM validate AS vl JOIN team AS t ON vl.teamid = t.teamid WHERE vl.cpid = 5');
    }
    public function cp6(){

        return $this->db->query('SELECT t.teamname, vl.cpvalidate,vl.teamid FROM validate AS vl JOIN team AS t ON vl.teamid = t.teamid WHERE vl.cpid = 6');
    }
    public function cp7(){

        return $this->db->query('SELECT t.teamname, vl.cpvalidate,vl.teamid FROM validate AS vl JOIN team AS t ON vl.teamid = t.teamid WHERE vl.cpid = 7');
    }
    public function cp8(){

        return $this->db->query('SELECT t.teamname, vl.cpvalidate,vl.teamid FROM validate AS vl JOIN team AS t ON vl.teamid = t.teamid WHERE vl.cpid = 8');
    }
    public function cp9(){

        return $this->db->query('SELECT t.teamname, vl.cpvalidate,vl.teamid FROM validate AS vl JOIN team AS t ON vl.teamid = t.teamid WHERE vl.cpid = 9');
    }
    public function cp10(){

        return $this->db->query('SELECT t.teamname, vl.cpvalidate,vl.teamid FROM validate AS vl JOIN team AS t ON vl.teamid = t.teamid WHERE vl.cpid = 10');
    }
}
