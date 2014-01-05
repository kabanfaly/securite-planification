<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * Site controllers
 * @author N'faly KABA
 * @since   05/01/2014
 * @version 2.0
 * @copyright KABANFALY
 * @package plannification
 * @subpackage application/controllers/
 * @filesource  site.php
 */
class Site extends CI_Controller
{
    
    function __construct()
    {
        parent::__construct();
    }
    public function index(){
        $header = array(
            'title' => lang('SITES_MANAGEMENT')
        );
        $this->load->view('header', $header);
        $this->load->view('site/index');
        $this->load->view('footer');
    }
}

/* End of file site.php */
/* Location: ./application/controllers/site.php */