<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * Ville controllers
 * @author N'faly KABA
 * @since   05/01/2014
 * @version 2.0
 * @copyright KABANFALY
 * @package plannification
 * @subpackage application/controllers/
 * @filesource  ville.php
 */
class Ville extends CI_Controller
{
    
    function __construct()
    {
        parent::__construct();
    }
    public function index(){
        $header = array(
            'title' => lang('VILLES_MANAGEMENT')
        );
        $this->load->view('header', $header);
        $this->load->view('ville/index');
        $this->load->view('footer');
    }
}

/* End of file ville.php */
/* Location: ./application/controllers/ville.php */