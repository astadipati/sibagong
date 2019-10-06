<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sendmail extends CI_Controller {

    function __construct() { 
        parent::__construct(); 
        $this->load->library('session'); 
        $this->load->model('M_antri');
    }

    public function index()
    {
        $this->load->view('kontent/email');
        $data = $this->M_antri->tampilkan_antri();
    }

    public function send_mail() { 


        $config = Array(
            'protocol' => 'smtp',
            'smtp_host' => 'ssl://smtp.googlemail.com',
            'smtp_port' => 465,
            'smtp_user' => 'asekbos@gmail.com', // change it to yours
            'smtp_pass' => 'Kul0nuwun-bos', // change it to yours
            'mailtype' => 'html',
            'charset' => 'iso-8859-1',
            'wordwrap' => TRUE
          );
          
                $message = '';
                $this->load->library('email', $config);
                $this->email->set_newline("\r\n");
                $this->email->from('no-reply@gmail.com'); // change it to yours
                $this->email->to('astadipati@outlook.com');// change it to yours
                $this->email->subject('Resume from JobsBuddy for your Job posting');
                $this->email->message($message);
                if($this->email->send())
               {
                echo 'Email sent.';
               }
               else
              {
               show_error($this->email->print_debugger());
              }
            }
          
}