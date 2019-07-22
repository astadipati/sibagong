<?php 
 // Konfigurasi email
    $config = [
        'mailtype'  => 'html',
        'charset'   => 'utf-8',
        'protocol'  => 'smtp',
        'smtp_host' => 'ssl://smtp.gmail.com',
        'smtp_user' => 'asekbos@gmail.com',   
        'smtp_pass' => 'Kul0nuwun-bos',      
        'smtp_port' => 465,
        'crlf'      => "\r\n",
        'newline'   => "\r\n"
    ];

    // Load library email dan konfigurasinya
    $this->load->library('email', $config);

    // Email dan nama pengirim
    $this->email->from('no-reply@cakcoder.id', 'cakcoder.id | Ramastudio');

    // Email penerima
    $this->email->to('pa_tbn@yahoo.co.id'); // Ganti dengan email tujuan kamu

    // Lampiran email, isi dengan url/path file
    $this->email->attach('http://new.pa-tuban.go.id/arsip/images/IMG_20190611_WA0018.jpg');

    // Subject email
    $this->email->subject('Notifikasi Perkara Banding | cakcoder.id');

    // Isi email
    $this->email->message("No-reply notifikasi via email dengan aplikasi Banding <br><br> Klik <strong><a href='http://new.pa-tuban.go.id' target='_blank' rel='noopener'>disini</a></strong> notifikasi sukses !!.");

    // Tampilkan pesan sukses atau error
    if ($this->email->send()) {
    echo 'Sukses! email berhasil dikirim.';
    } else {
    echo 'Error! email tidak dapat dikirim.';
    }
?>