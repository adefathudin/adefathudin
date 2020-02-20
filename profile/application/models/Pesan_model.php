<?php defined('BASEPATH') OR  exit ('No direct script access allowed');

class Pesan_model extends CI_Model {

    private $_table = "pesan";

    public $id;
    public $nama;
    public $mail;
    public $subject;
    public $isi_pesan;

    public function rules() {
        
        return [
            ['field' => 'nama',
            'label' => 'Nama',
            'rules' => 'required'],

            ['field' => 'mail',
            'label' => 'Mail',
            'rules' => 'required'],

            ['field' => 'subject',
            'label' => 'Subject',
            'rules' => 'required'],
            
            ['field' => 'isi_pesan',
            'label' => 'Isi_pesan',
            'rules' => 'required']    

        ];

    }

    public function save(){
        $post=$this->input->post(); //ambil data dari form
        $this->id=uniqid(); //membuat id unik
        $this->nama=$post["nama"]; //isi field nama
        $this->mail=$post["mail"]; //isi field mail
        $this->subject=$post["subject"]; //isi field subject
        $this->isi_pesan=$post["isi_pesan"]; //isi field isi pesan
        $this->db->insert($this->_table,$this); //simpan ke database


    }
}