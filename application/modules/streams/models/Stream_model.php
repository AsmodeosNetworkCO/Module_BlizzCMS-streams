<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class stream_model extends CI_Model {

    /**
     * stream_model constructor.
     */
    public function __construct()
    {
        parent::__construct();
        $this->auth = $this->load->database('auth', TRUE);
    }

    public function getStreams()
    {
        return $this->db->select('*')->order_by('id', 'ASC')->get('streams');
    }
	public function insertStream($account, $channel, $horario)
    {
        $data = array(
            'account' => $account,
            'channel' => $channel,
            'horario' => $horario
        );

        $this->db->insert('streams', $data);
        return true;
    }
}