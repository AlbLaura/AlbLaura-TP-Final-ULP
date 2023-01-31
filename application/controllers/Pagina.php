<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pagina extends CI_Controller {
	

	public function __construct()
	{
		date_default_timezone_set("America/Argentina/San_Luis");
		
		parent::__construct();

		$this->datos_generales = array(
			'titulo' => null,
			'cuerpo' => null,
			'anio' => date('Y'),
			'fecha' => date('d/m/Y'),
			'hora' => date('h:i'),
			'direccion' => 'www.sanluisinforma.com.ar'
		);

		//Carga las vistas
		$this->datos_generales['header'] = $this->load->view('components/header', $this->datos_generales, true);

		$this->datos_generales['navbar'] = $this->load->view('components/navbar', false, true);

		$this->datos_generales['footer'] = $this->load->view('components/footer', $this->datos_generales, true);

		$this->datos_generales['publicidad_ver'] = $this->load->view('components/publicidad_ver', $this->datos_generales, true);
		
		$this->datos_generales['publicidad_ver2'] = $this->load->view('components/publicidad_ver2', $this->datos_generales, true);

		$this->datos_generales['publicidad_hor'] = $this->load->view('components/publicidad_hor', $this->datos_generales, true);
	}
	
	public function index() {
		$this->datos_generales['titulo'] = 'inicio';
		$this->datos_generales['cuerpo'] = $this->load->view('paginas/index', $this->datos_generales, true);
		//Carga la vista base
		$this->load->view('base', $this->datos_generales);
	}

	public function menu() {
		$pagina = $this->uri->segment(3);

		//controla que el archivo exista en la carpeta "paginas" dentro de views.
		$filename = './application/views/paginas/'.$pagina.'.php';

		if (!file_exists($filename)) {
			$pagina = 'error_404';
		}

		$this->datos_generales['titulo'] = $pagina;
		$this->datos_generales['cuerpo'] = $this->load->view('paginas/'.$pagina, $this->datos_generales, true);
		//Carga la vista base
		$this->load->view('base', $this->datos_generales);
	}
	public function tematica() {
		$pagina = $this->uri->segment(3);

		//controla que el archivo exista en la carpeta "paginas" dentro de views.
		$filename = './application/views/paginas/tematicas/'.$pagina.'.php' ;
		if (!file_exists($filename)) {
			$pagina = '../error_404';
		}

		$this->datos_generales['titulo'] = $pagina;
		$this->datos_generales['cuerpo'] = $this->load->view('paginas/tematicas/'.$pagina, $this->datos_generales, true);
		//Carga la vista base
		$this->load->view('base', $this->datos_generales);
	}
}
