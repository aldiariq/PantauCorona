<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class CoronaController extends CI_Controller {

    //Method index
    public function index()
    {
        $infoaplikasi = array(
            'Keterangan' => 'End Point Ditemukan',
            'Nama Website' => 'PantauCorona',
            'Pembuat Website' => 'M Aldi Ariqi',
            'Sumber API' => 'Kawal Corona'
        );

        echo json_encode($infoaplikasi);
    }

    public function datacovidnasional(){
        $apiUrlnasional = "https://api.kawalcorona.com/indonesia/";
        $responseApinasional = file_get_contents($apiUrlnasional);
        $hasildecoderesponseApinasional = json_decode($responseApinasional, true);

        $apiurldetilNasional = "https://api.kawalcorona.com/indonesia/provinsi/";
        $responseApidetilNasional = file_get_contents($apiurldetilNasional);
        $hasildecoderesponsedetilApidetilnasional = json_decode($responseApidetilNasional);
        
        $datacovid = array(
            'Lingkup' => 'Nasional',
            'NamaNegara' => 'Indonesia',
            'ResponseApinasional' => $hasildecoderesponseApinasional,
            'ReponsedetilApinasional' => $hasildecoderesponsedetilApidetilnasional
        );

        $this->load->view('templates/header');
        $this->load->view('index', $datacovid);
        $this->load->view('templates/footer');
        
        
    }

    //Method endpoint tidak ditemukan
    public function endpointtidakditemukan()
    {
        $dataendpointtidakditemukan = array(
            'Keterangan' => 'End Point Tidak Ditemukan'
        );

        echo json_encode($dataendpointtidakditemukan);
    }

    public function halamantidakditemukan(){
        $this->load->view('404');
    }

}

/* End of file CoronaController.php */
