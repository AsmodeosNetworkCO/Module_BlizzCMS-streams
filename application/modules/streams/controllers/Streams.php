<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class streams extends MX_Controller {

    public function __construct()
    {
         parent::__construct();
		 $this->load->model('stream_model');
    }
    
    public function index()
    {
        $data = array(
            'pagetitle' => 'Live Streams',
			'lang' => $this->lang->lang()
        );
        
        $this->template->build('index', $data);
    }
	public function create()
    {
		$account = $this->session->userdata('blizz_sess_username');
        $channel = $this->input->post('channel');
        $horario = $this->input->post('horario');
		echo $this->stream_model->insertstream($account, $channel, $horario);
	}
}