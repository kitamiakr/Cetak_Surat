<?php
/**
*
*/
class Surat extends MY_Controller
{

	function __construct()
	{
		parent::__construct();
	}
	function index()
	{
		$this->load->view('pages/home');
	}

	function view($halaman = 'home'){
		$data['title1'] = "Cetak Surat";
		$data['title2'] = "List Surat";
		$data['submenu1'] = "Surat Keterangan Masih Kuliah";
		$data['submenu2'] = "Surat Keterangan Tidak Menerima Beasiswa";
		$data['submenu3'] = "Surat Keterangan Berkelakuan Baik";
		$data['submenu4'] = "Surat Keterangan Bebas Teori";
		$data['submenu5'] = "Surat Keterangan Telah Munaqosah";
		$data['submenu6'] = "Surat Keterangan Lulus";
		$data['submenu7'] = "Surat Keterangan Pindah Studi";
		$data['submenu8'] = "Surat Keterangan Reviewer Penelitian";
		$data['submenu9'] = "Surat Ijin Penelitian";
		$data['submenu10'] = "Surat Ijin Studi Pendahuluan";
		$data['submenu11'] = "Surat Ijin Validasi Instrumen";
		$data['submenu12'] = "Surat Ijin Observasi";
		$data['submenu13'] = "Surat Ijin Wawancara";
		$data['submenu14'] = "Surat Permohonan Kerja Praktik";
		$data['submenu15'] = "Surat Permohonan Beasiswa Kuliah";
		$data['submenu16'] = "Surat Permohonan Dispensasi Kuliah";
		$data['submenu17'] = "Surat Permohonan Data(Pengambilan Data)";
		$this->load->view('pages/'.$halaman,$data);
	}
	


	}
	
