<?php

class Market_m extends CI_Model{
    public function __construct() {
        parent::__construct();
    }
    
    public function addMarket($mar){
        $query=$this->db->insert('market',$mar);
        
        $query1= $this->db->query('select id from market where name="'.$mar['name'].'" LIMIT 1   ');
        return $query1;
    }
    
    public function getMarket(){
        $query= $this->db->query('select * from market');
        return $query;
    }
    
    public function getCount(){
        $query=$this->db->query('SELECT market_id, COUNT(*) FROM symbol GROUP BY market_id');
        return $query;
    }
    
     
    
}