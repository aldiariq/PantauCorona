<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class CoronaController extends CI_Controller {

    public function index()
    {
        $infoaplikasi = array(
            'Nama Website' => 'PantauCorona',
            'Pembuat Website' => 'M Aldi Ariqi',
            'Sumber API' => 'Kawal Corona'
        );

        echo json_encode($infoaplikasi);
    }

    public function notfound()
    {
        $datanotfound = array(
            'Keterangan' => 'End Point Tidak Ditemukan'
        );

        echo json_encode($datanotfound);
    }

}

/* End of file CoronaController.php */
