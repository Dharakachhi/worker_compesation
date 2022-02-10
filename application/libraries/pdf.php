<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
///*require_once*/echo dirname(__FILE__) . '\tcpdf\tcpdf.php';

require APPPATH.'libraries\tcpdf\tcpdf.php';
require APPPATH.'libraries\tcpdf\tcpdf_parser.php';

class Pdf extends TCPDF
{
    function __construct()
    {
        parent::__construct();
    }
}
/*Author:Tutsway.com */  
/* End of file Pdf.php */
/* Location: ./application/libraries/Pdf.php */