<?php

class Dashboard extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('user_m');
        $this->load->model('market_m');
        $this->load->model('plan_m');
    }

    public function index() {
        if ($_SESSION['type'] == 'ADMIN') {
            $data = array(
                'title' => 'Users',
                'markets' => $this->market_m->getMarket(),
                'count' => $this->market_m->getCount(),
                'sub_cnt'=>$this->user_m->count('SUBSCRIBER'),
                'staff_cnt'=>$this->user_m->count('STAFF'),
                'blocked_cnt'=> $this->user_m->countUser('BLOCKED'),
                'active_cnt'=> $this->user_m->countUser('ACTIVE')
            );
            
            $data['symbols']=$this->plan_m->all_symbols();
            $this->load->view('Admin/admin_header', $data);
           
            $this->load->view('Admin/admin_sidebar');
            $this->load->view('Admin/admin_dashboard');
            $this->load->view('Default/footer_v');
        } else {
            redirect(base_url());
        }
    }
    
    public function updateMinMax($id,$min,$max){
        $this->load->model('symbol_m');
        $data=array(
            'call_min'=>$min,
            'call_max'=>$max
        );
        $this->symbol_m->updateMinMax($data,$id);
        $this->index();
    }

}
