<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     * 	- or -
     * 		http://example.com/index.php/welcome/index
     * 	- or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/user_guide/general/urls.html
     */
    public function verificar_sessao() {
        if ($this->session->userdata('logado') == false)
            redirect('dashboard/login');
    }

    public function index() {
        $this->verificar_sessao();
        $this->load->view('includes/html_header');
        $this->load->view('includes/menu');
        $this->load->view('dashboard');
        $this->load->view('includes/html_footer');
    }

    public function login() {
        $this->load->view('includes/html_header');
        $this->load->view('login');
        $this->load->view('includes/html_footer');
    }

    public function logar() {

        $email = $this->input->post('email');
        $senha = md5($this->input->post('senha'));

        $this->db->where('email', $email);
        $this->db->where('senha', $senha);

        $dados['usuarios'] = $this->db->get('usuarios')->result();

        if (count($dados['usuarios']) == 1) {
            $dados['nome'] = $data['usuarios'][0]->nome;
            $dados['id'] = $data['usuarios'][0]->id;
            $dados['logado'] = true;
            $this->session->set_userdata($dados);
            redirect('dashboard');
        } else {
            redirect('dashboard/login');
        }
    }

    public function logout() {
        $this->session->sess_destroy();
        redirect('dashboard');
    }

}
