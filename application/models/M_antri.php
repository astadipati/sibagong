<?php

Class M_antri extends CI_Model{

    public $table = "tbl_post";
    public $table_antri = "tbl_antri";
 
    public function tampilkan_antri(){
        $data = $this->db->query("SELECT * FROM $table");
        return $data; 
    }
}
