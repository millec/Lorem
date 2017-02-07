<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lorem extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		// generer un paragraphe via mon model
		$this->load->model('lorem_model');
		
		$data['para'] = $this->lorem_model->genererMot();

		$this->load->view('common/header');
		$this->load->view('paragraphe', $data);
		$this->load->view('common/footer');
	}

	public function generer() {

		$nb = $this->input->post('paragraphe');
		$mot = $this->input->post('nombre');

		$this->load->model('lorem_model');

		$data['paras'] = $this->lorem_model->genererPara($nb, $mot);

		$this->load->view('common/header');
		$this->load->view('paragraphes', $data);
		$this->load->view('common/footer');
	}
}

?>