<?php

class Data_model extends CI_Model {

    /**
     * constructor
     */
    public function __construct() {
        parent::__construct();
        $this->load->helper('security');
        $this->load->library('table');
    }

    /**
     * 
     * @param type $values
     * @param type $table
     * @return type
     */
    public function enter_data($values, $table) {
        $this->db->insert($table, $values);
        $result = $this->db->insert_id();
        return $result;
    }

    /**
     * 
     * @param type $key
     * @param type $value
     * @param type $table
     * @return type
     */
    public function get_table_details($key, $value, $table) {
        // set the where clause
        $this->db->where($key, $value);
        $query = $this->db->get($table);
        if ($query) {
            return $query->row();
        }
    }

    /**
     * get the upcoming events
     * @return type
     */
    public function fetch_upcoming_events() {
        $events = array();
        $friday = array();
        $sunday = array();
        $special = array();
        //friday events
        $this->db->where('category', 1);
        $this->db->where("date >= ", date('Y/m/d'));
        $this->db->order_by("date", "ASC");
        $query = $this->db->get('events');
        // var_dump($query->row());

        if ($query->num_rows() > 0) {
            $friday = $query->row();
        }
        //sunday events
        $this->db->where('category', 2);
        $this->db->where("date >=", date('Y/m/d'));
        $this->db->order_by("date", "ASC");
        $query = $this->db->get('events');

        // var_dump($query->result());

        if ($query->num_rows() > 0) {
            $sunday = $query->row();
        }
        //special events
        $this->db->where('category', 3);
        $this->db->where("date >= ", date('Y/m/d'));
        $this->db->order_by("date", "ASC");
        $query = $this->db->get('events');
        if ($query->num_rows() > 0) {
            $special = $query->row();
        }
        $events = array(
            'friday' => $friday,
            'sunday' => $sunday,
            'special' => $special
        );
        return $events;
    }
    function leaders(){
        $this->db->select('*');
        $this->db->from('leaders');
        $this->db->order_by('position');
        $query=$this->db->get();
        return $query->result_array();
    }
    function articles(){
        $this->db->select('*');
        $this->db->from('articles');
        $this->db->where('status', 1);
        $this->db->order_by('id');
        $query=$this->db->get();
        return $query->result_array();
    }
    function article($id){
        $this->db->select('*');
        $this->db->from('articles');
        $this->db->where('id', $id);
        $query=$this->db->get();
        return $query->result_array();
    }

}
