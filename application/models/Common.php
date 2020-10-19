<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Common extends CI_Model { 
	public function resultCount($table, $condition= array()){
        $count= $this->db->get_where($table,$condition)->num_rows();
        return $count;
    }
    public function insertData($table,$data = array()){
        $this->db->insert($table,$data);
       return $this->db->insert_id();
       
    }
    public function dataList($table,$condition=array(),$order1,$order2){
        $data = $this->db->order_by($order1,$order2)->get_where($table,$condition)->row();
            return $data;
    }

    public function dataListF($table,$condition=array(),$order1,$order2){
        $data = $this->db->order_by($order1,$order2)->get_where($table,$condition);
            return $data;
    }

    public function dataUpdate($table,$condition=array(),$set=array()){
        $this->db->where($condition);
        $this->db->set($set);
        $this->db->update($table);
        return true;
    }


}

?>
 