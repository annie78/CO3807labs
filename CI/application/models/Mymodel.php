<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class mymodel extends CI_Model {
    function __construct()
    {
        parent::__construct();
}
    public function getData (){
     	$q = $this->db->get('testdata');
     	if ($q->num_rows()>0){
     		foreach ($q->result() as $row){
		    $data[] = $row;
     		}
     }
     return $data;
    }

    public function insert($data){
	
	$this->db->insert('testdata',$data);
}
}
?>
