<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class GeneratePdfController extends CI_Controller {

    function index()
    {
       /*  echo json_encode($_POST);
        return */
        $this->load->library('pdf');

        $data['invoice'] = $_POST;
        $html = $this->load->view('GeneratePdfView', $data, true);
        // $this->pdf->createPDF($html, 'mypdf', false);
        $this->pdf->createPDF($html, 'mypdf');
        // $this->load->view('admin/header');
		// $this->load->view('footer');		
    }
}
?>