<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ClientModel extends CI_Model{
    function __construct(){
        parent::__construct();
        $this->load->database();
    }

    public function GetContentsList(){
        $this->db->order_by("seq", "desc");
        return $this->db->get("EUM_CONTENTS_YOUTUBE")->result();
    }


    public function UploadContents($data){
        return $this->db->insert('EUM_CONTENTS_YOUTUBE', $data);
        
    }


    public function DeleteContents($data){
        $this->db->where("seq", $data);
        return $this->db->delete('EUM_CONTENTS_YOUTUBE');

    }
}
