<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * Agent controllers
 * @author N'faly KABA
 * @since   08/12/2013
 * @version 2.0
 * @copyright KABANFALY
 * @package plannification
 * @subpackage application/controllers/
 * @filesource  agent.php
 */
class Agent extends CI_Controller
{
    
    function __construct()
    {
        parent::__construct();
    }
    public function index(){
        $header = array(
            'title' => lang('AGENTS_MANAGEMENT'),
            'active' => 'agent'
        );
        $this->load->view('header', $header);
        $this->load->view('agent/index');
        $this->load->view('footer');
    }
    
}

/* End of file agent.php */
/* Location: ./application/controllers/agent.php */