<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class coba_model extends CI_Model{
    public function __construct()
    {
        parent::__construct();
    }

    public function getMentor()
    {
        $query = $this->db->get('magang');
        return $query->result();
    }
}