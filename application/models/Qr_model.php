<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Qr_model extends CI_Model
{
    function qr($kodeqr)
    {
        if ($kodeqr) {
            $filename = 'uploads/qr/' . $kodeqr;
            if (!file_exists($filename)) {
                $this->load->library('ciqrcode');
                $params['data'] = $kodeqr;
                $params['level'] = 'H';
                $params['size'] = 10;
                $params['savename'] = FCPATH . 'uploads/qr/' . $kodeqr . ".png";
                return  $this->ciqrcode->generate($params);
            }
        }
    }
}
                        
/* End of file Qr_model.php */
