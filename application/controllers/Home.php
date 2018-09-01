<?php 
	class Home extends CI_Controller
	{	
		public function __construct() {
		    parent::__construct();
                $this->CI = & get_instance();
                // $this->load->database();
                $this->load->library('pagination');
                $this->load->model('M_leaflet');
                $this->load->model('m_varietas');
                $this->load->model('m_teknologi');
                $this->load->model('m_agribisnis');
		}

		public function index() {
	          $data['subLeaflet'] = $this->M_leaflet->selectLeafletTerbaru();
		    $data['teknologi'] = $this->m_teknologi->selectTeknologi();
		    $data['agribisnis'] = $this->m_agribisnis->selectAgribisnisTop3();

		    $jumlah = $this->m_varietas->getJumlahVarietas();
			
		    //set base_url untuk setiap link page
                $config['base_url'] = base_url()."Home/index/";

	           //hitung jumlah row
                $config['total_rows'] = $jumlah;
 
                  //mengatur total data yang tampil per page
                  $config['per_page'] = 9;
       
                  //mengatur jumlah nomor page yang tampil
                  $config['num_links'] = $jumlah;
       
                  //mengatur tag
                  $config['num_tag_open'] = '<li>';
                  $config['num_tag_close'] = '</li>';
                  $config['next_tag_open'] = "<li>";
                  $config['next_tagl_close'] = "</li>";
                  $config['prev_tag_open'] = "<li>";
                  $config['prev_tagl_close'] = "</li>";
                  $config['first_tag_open'] = "<li>";
                  $config['first_tagl_close'] = "</li>";
                  $config['last_tag_open'] = "<li>";
                  $config['last_tagl_close'] = "</li>";
                  $config['cur_tag_open'] = '&nbsp;<a class="current">';
                  $config['cur_tag_close'] = '</a>';
                  $config['next_link'] = '<i class="glyphicon glyphicon-chevron-right"></i>';
                  $config['prev_link'] = '<i class="glyphicon glyphicon-chevron-left"></i>';

                  //inisialisasi array 'config' dan set ke pagination library
                  $this->pagination->initialize($config);
                 
                  $dari = $this->uri->segment('3');
       
                  //ambil data buku dari database
                  $data['varietas'] = $this->m_varietas->selectVarietasPerPage($config['per_page'],$dari);
       
                  //Membuat link
                  $str_links = $this->pagination->create_links();
                  $data['links'] = explode('&nbsp;',$str_links );

                  //counter pengunjung 
                  date_default_timezone_set('Asia/Jakarta');
                  $ip      = $_SERVER['REMOTE_ADDR']; // Mendapatkan IP komputer user
                  $tanggal = date("Y-m-d");
                  $bulanIni = date("m");
                  $waktu   = date('H:i');
                  $this->load->model("m_tembakau");
                              
                  if(empty($this->session->userdata('pengunjung'))){
                        $this->m_tembakau->addUser($ip,$tanggal,$waktu);
                        $this->session->set_userdata('pengunjung','aktif');                  
                  }
                  $counter['pengunjungTotal'] = $this->m_tembakau->getTotalVisitor();
                  $counter['pengunjungHariIni'] = $this->m_tembakau->getTotalToday($tanggal); 
                  $counter['pengunjungBulanIni'] = $this->m_tembakau->getTotalByMonth($bulanIni); 
                  
                  // echo $this->session->userdata('pengunjung');
                  $dataHeader['judul'] = "";
                  $this->load->view('header', $dataHeader);
                  $this->load->view('HalamanUtama', $data);
                  $this->load->view('footer',$counter);
		}	
	} 
?>