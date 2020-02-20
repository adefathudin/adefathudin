<?php

defined('BASEPATH') OR exit('No direct script access allowed');

 

class FormController extends CI_Controller {

 

    /**

     * Get All Data from this method.

     *

     * @return Response

    */ 
    public function __construct() {

       parent::__construct();

       $this->load->helper('url');

       $this->load->library('session');
        $this->load->model("pesan_model");
        $this->load->library('form_validation');        

    }

 

    /**

     * Get All Data from this method.

     *

     * @return Response

    */

    public function index()

    {

        $this->load->view('formPost');

    }

 

    /**

     * Get All Data from this method.

     *

     * @return Response

    */

    public function formPost()

    {

        $recaptchaResponse = trim($this->input->post('g-recaptcha-response'));

 

        $userIp=$this->input->ip_address();

     

        $secret = $this->config->item('google_secret');

   

        $url="https://www.google.com/recaptcha/api/siteverify?secret=".$secret."&response=".$recaptchaResponse."&remoteip=".$userIp;

 

        $ch = curl_init(); 

        curl_setopt($ch, CURLOPT_URL, $url); 

        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 

        $output = curl_exec($ch); 

        curl_close($ch);      

         

        $status= json_decode($output, true);

 

        if ($status['success']) {

            $pesan = $this->pesan_model;
            $validation = $this->form_validation;
            $validation->set_rules($pesan->rules());
    
            if ($validation->run()) {
                $pesan->save();
                $this->session->set_flashdata('success', '<div class="alert-box ss-success hideit">
                <p>Pesan berhasil dikirim... Terima kasih :)</p><i class="fa fa-times close"></i></div>');
                redirect (base_url());
            } else {
          
           echo "gagal";}
        
    

            exit;

        }else{

            $this->session->set_flashdata('flashError', 'Sorry Google Recaptcha Unsuccessful!!');

        }

 

        redirect('form', 'refresh');

    }   

}