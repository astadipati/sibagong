<?php
class M_banding extends CI_Model{

    public $table = "perkara";

    // buat paging
    
	function tampil_banding(){
        $query = $this->db->query("SELECT * FROM perkara
        ORDER BY perkara_id  DESC ");
        return $query; 
    } 

    function tampil_banding_paging($halaman, $offset){
        return $this->db->query("SELECT * FROM perkara 
        ORDER BY perkara_id DESC limit $halaman, $offset");
    } 
    
    // perkara banding
    function tampil_perkara_banding(){
        $query = $this->db->query("SELECT * FROM perkara_banding ORDER BY
        permohonan_banding desc ");
        return $query; 
    } 

    function tampil_perkara_banding_paging($halaman, $offset){
        return $this->db->query("SELECT * FROM perkara_banding ORDER BY
        permohonan_banding desc limit $halaman, $offset");
    } 

    // buat data hakim
	function tampil_hakim(){
        $query = $this->db->query("SELECT * FROM `hakim_pt`  
        ORDER BY `hakim_pt`.`id`  DESC ");
        return $query; 
    } 

    function tampil_hakim_paging($halaman, $offset){
        return $this->db->query("SELECT * FROM `hakim_pt`  
        ORDER BY `hakim_pt`.`id`  DESC limit $halaman, $offset");
    }

	function tampil_hakim_pa(){
        $query = $this->db->query("SELECT * FROM `hakim_pn` where aktif = 'Y'
        ORDER BY `hakim_pn`.`id`  DESC ");
        return $query; 
    } 

    function tampil_hakim_pa_paging($halaman, $offset){
        return $this->db->query("SELECT * FROM `hakim_pn` where aktif = 'Y' 
        ORDER BY `hakim_pn`.`id`  DESC limit $halaman, $offset");
    }

    // buat data pp
	function tampil_pp(){
        $query = $this->db->query("SELECT * FROM `panitera_pt`  
        ORDER BY `panitera_pt`.`id`  DESC ");
        return $query; 
    } 

    function tampil_pp_paging($halaman, $offset){
        return $this->db->query("SELECT * FROM `panitera_pt`  
        ORDER BY `panitera_pt`.`id`  DESC limit $halaman, $offset");
    }

	function tampil_pp_pa(){
        $query = $this->db->query("SELECT * FROM `panitera_pn` where aktif = 'Y'
        ORDER BY `panitera_pn`.`id`  DESC ");
        return $query; 
    } 

    function tampil_pp_pa_paging($halaman, $offset){
        return $this->db->query("SELECT * FROM `panitera_pn` where aktif = 'Y'
        ORDER BY `panitera_pn`.`id`  DESC limit $halaman, $offset");
    } 

    // end paging

    function hakim_auto($title){
        $this->db->like('nama_gelar', $title);
        $this->db->where('aktif','Y');
		$this->db->order_by('nama_gelar', 'ASC');
		// $this->db->limit(10);
		return $this->db->get('hakim_pt')->result();
	}
    
    function pp_auto($data){
        $this->db->like('nama_gelar', $data);
        // $this->db->where('aktif','Y');
		$this->db->order_by('nama_gelar', 'ASC');
		// $this->db->limit(10);
		return $this->db->get('panitera_pt')->result();
    }
    
    function simpan(){
        $data = array (
            'jenis_banding' => $this->input->post('jenis_banding', TRUE),
            'nomor_perkara_pn' => $this->input->post('nomor_perkara', TRUE),
            'putusan_pn' => $this->input->post('tanggal_putusan', TRUE),
            'pemberitahuan_putusan_pn' => $this->input->post('pemberitahuan_putusan_pn', TRUE),
            'permohonan_banding' => $this->input->post('permohonan_banding', TRUE),
            'pemohon_banding' => $this->input->post('pemohon_banding', TRUE),
            'pemberitahuan_permohonan_banding' => $this->input->post('pemberitahuan_banding', TRUE),
            'penerimaan_memori_banding' => $this->input->post('penerimaan_memori_banding', TRUE),
            'penyerahan_memori_banding' => $this->input->post('penyerahan_memori_banding', TRUE),
            'pemberitahuan_permohonan_banding' => $this->input->post('pemberitahuan_permohonan_banding', TRUE),
            'penerimaan_kontra_banding' => $this->input->post('penerimaan_kontra_banding', TRUE),
            'penyerahan_kontra_banding' => $this->input->post('penyerahan_kontra_banding', TRUE),
            'pemberitahuan_inzage_pembanding' => $this->input->post('pemberitahuan_inzage_pembanding', TRUE),
            'pemberitahuan_inzage_terbanding' => $this->input->post('pemberitahuan_inzage_terbanding', TRUE),
            'pelaksanaan_inzage' => $this->input->post('pelaksanaan_inzage', TRUE),
            'pelaksanaan_inzage_pembanding' => $this->input->post('pelaksanaan_inzage_pembanding', TRUE),
            'pelaksanaan_inzage_terbanding' => $this->input->post('pelaksanaan_inzage_terbanding', TRUE),
            'pengiriman_berkas_banding' => $this->input->post('pengiriman_berkas_banding', TRUE),
            'nomor_surat_pengiriman_berkas_banding' => $this->input->post('nomor_surat_pengiriman_berkas_banding', TRUE),
            'penerimaan_kembali_berkas_banding' => $this->input->post('penerimaan_kembali_berkas_banding', TRUE)
        );
        $this->db->insert($this->table, $data);
    }

    function update(){
        $data = array(
            'jenis_banding' => $this->input->post('jenis_banding', TRUE),
            'nomor_perkara_pn' => $this->input->post('nomor_perkara_pn', TRUE),
            'putusan_pn' => $this->input->post('tanggal_putusan', TRUE),
            'pemberitahuan_putusan_pn' => $this->input->post('pemberitahuan_putusan_pn', TRUE),
            'permohonan_banding' => $this->input->post('permohonan_banding', TRUE),
            'pemohon_banding' => $this->input->post('pemohon_banding', TRUE),
            'pemberitahuan_permohonan_banding' => $this->input->post('pemberitahuan_banding', TRUE),
            'penerimaan_memori_banding' => $this->input->post('penerimaan_memori_banding', TRUE),
            'penyerahan_memori_banding' => $this->input->post('penyerahan_memori_banding', TRUE),
            'pemberitahuan_permohonan_banding' => $this->input->post('pemberitahuan_permohonan_banding', TRUE),
            'penerimaan_kontra_banding' => $this->input->post('penerimaan_kontra_banding', TRUE),
            'penyerahan_kontra_banding' => $this->input->post('penyerahan_kontra_banding', TRUE),
            'pemberitahuan_inzage_pembanding' => $this->input->post('pemberitahuan_inzage_pembanding', TRUE),
            'pemberitahuan_inzage_terbanding' => $this->input->post('pemberitahuan_inzage_terbanding', TRUE),
            'pelaksanaan_inzage' => $this->input->post('pelaksanaan_inzage', TRUE),
            'pelaksanaan_inzage_pembanding' => $this->input->post('pelaksanaan_inzage_pembanding', TRUE),
            'pelaksanaan_inzage_terbanding' => $this->input->post('pelaksanaan_inzage_terbanding', TRUE),
            'pengiriman_berkas_banding' => $this->input->post('pengiriman_berkas_banding', TRUE),
            'nomor_surat_pengiriman_berkas_banding' => $this->input->post('nomor_surat_pengiriman_berkas_banding', TRUE),
            'penerimaan_kembali_berkas_banding' => $this->input->post('penerimaan_kembali_berkas_banding', TRUE)
        );

        $perkara = $this->input->post('perkara_id');
        $this->db->where('perkara_id',$perkara);
        // print_r($data); 
        $this->db->update($this->table, $data);
    }

}
