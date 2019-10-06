<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sendmail extends CI_Controller {

    /**
     * Kirim email dengan SMTP Gmail.
     *
     */
    public function index()
    {
        // $this->load->model('M_antri');
        // $n = $this->M_antri->tampilkan_antri();
        // foreach ($n as $datane){
        //     echo $datane['email'];
        // }
        // endforeach();
        // foreach ()
        $e = "astadipati@outlook.com";
        // Konfigurasi email
        $config = [
            'mailtype'  => 'html',
            'charset'   => 'utf-8',
            'protocol'  => 'smtp',
            'smtp_host' => 'ssl://smtp.gmail.com',
            'smtp_user' => 'asekbos@gmail.com',    // Ganti dengan email gmail kamu
            'smtp_pass' => 'Kul0nuwun-bos',      // Password gmail kamu
            'smtp_port' => 465,
            'crlf'      => "\r\n",
            'newline'   => "\r\n"
        ];
        
        // Load library email dan konfigurasinya
        $this->load->library('email', $config);
        
        // Email dan nama pengirim
        $this->email->from('no-reply@cakcoder.com', 'Data Update');
        
        // $d = $this->db->query("select a.post_title , a.post_description, a.email, a.post_status,b.post_status from tbl_post a
        // left join tbl_antri b on a.post_title = b.post_title
        // where b.post_status =1 limit 1");
        // foreach ($d->result_array() as $mahasiswa) {
        //      echo "Nama : ".$mahasiswa['post_title']."<br/>";
        //      echo "Alamat : ".$mahasiswa['email']."<hr/>";
        // }
        // Email penerima
        $this->email->to($e); // Ganti dengan email tujuan kamu

        // Lampiran email, isi dengan url/path file
        $this->email->attach('http://pta-surabaya.go.id/arsip/banner/20190307094227.jpg');

        // Subject email
        $this->email->subject('Hi perkara kamu sudah diregister banding lho');

        // Isi email
        $this->email->message("Ini lanjutkan");

        // Tampilkan pesan sukses atau error
        if ($this->email->send()) {
            echo 'Sukses! email berhasil dikirim.';
        } else {
            echo 'Error! email tidak dapat dikirim.';
        }
    }
}