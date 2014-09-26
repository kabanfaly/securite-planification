<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * Ville controllers
 * @author N'faly KABA
 * @since   05/01/2014
 * @version 2.0
 * @copyright KABANFALY
 * @package plannification
 * @subpackage application/controllers/
 * @filesource  city.php
 */
class City extends CI_Controller
{
    
    function __construct()
    {
        parent::__construct();
    }
    public function index(){
        $header = array(
            'title' => lang('CITIES_MANAGEMENT'),
            'active' => 'city'
        );
        $this->load->view('header', $header);
        $this->load->view('city/index');
        $this->load->view('footer');
    }
}

/* End of file city.php */
/* Location: ./application/controllers/city.php */