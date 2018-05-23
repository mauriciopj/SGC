<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Arrecadadores extends CI_Controller {

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
      public function verifica_sessao() {
        if($this->session->userdata('logado')==false)
           redirect('dashboard/login');
      }


    public function index($indice = null) {
        $this->verifica_sessao();
        $this->db->select('*');
        $dados['arrecadadores'] = $this->db->get('arrecadadores')->result();


        $this->load->view('includes/html_header');
        $this->load->view('includes/menu');
        if ($indice == 1) {
            $data['msg'] = "Arrecadador Cadastrado com Sucesso.";
            $this->load->view('includes/msg_sucesso', $data);
        } else if ($indice == 2) {
            $data['msg'] = "Não foi possivel cadastrar o Arrecadador.";
            $this->load->view('includes/msg_erro', $data);
        } else if ($indice == 3) {
            $data['msg'] = "Arrecadador excluido com Sucesso.";
            $this->load->view('includes/msg_sucesso', $data);
        } else if ($indice == 4) {
            $data['msg'] = "Não foi possivel excluir o Arrecadador.";
            $this->load->view('includes/msg_erro', $data);
        } else if ($indice == 5) {
            $data['msg'] = "Arrecadador atualizado com Sucesso.";
            $this->load->view('includes/msg_sucesso', $data);
        } else if ($indice == 6) {
            $data['msg'] = "Não foi possivel atualizar o Arrecadador.";
            $this->load->view('includes/msg_erro', $data);
        }
        $this->load->view('Arrecadadores/lista_arrecadadores', $dados);
        $this->load->view('includes/html_footer');
    }

    public function cadastro() {
        $this->verifica_sessao();
        $this->load->view('includes/html_header');
        $this->load->view('includes/menu');
        $this->load->view('Arrecadadores/cadastro_arrecadadores');
        $this->load->view('includes/html_footer');
    }

    public function cadastrar() {
        $this->verifica_sessao();

        $data['nome'] = $this->input->post('nome');
        $data['cpf'] = $this->input->post('cpf');
        $data['telefone'] = $this->input->post('telefone');
        $data['rua'] = md5($this->input->post('rua'));
        $data['bairro'] = $this->input->post('bairro');
        $data['numero'] = $this->input->post('numero');
        $data['cidade'] = $this->input->post('cidade');

        if ($this->db->insert('arrecadadores', $data)) {
            redirect('Arrecadadores/1');
        } else {
            redirect('Arrecadadores/2');
        }
    }

    public function excluir($id = null) {
        $this->verifica_sessao();

        $this->db->where('id', $id);

        if ($this->db->delete('arrecadadores')) {
            redirect('Arrecadadores/3');
        } else {
            redirect('Arrecadadores/4');
        }
    }

    public function atualizar($id = null) {
        $this->verifica_sessao();
        $this->db->where('id', $id);
        $data['arrecadadores'] = $this->db->get('Arrecadadores')->result();

        $this->load->view('includes/html_header');
        $this->load->view('includes/menu');
        $this->load->view('arrecadadores/editar_arrecadadores', $data);
        $this->load->view('includes/html_footer');
    }

    public function salvar_atualizacao() {
        $this->verifica_sessao();

        $id = $this->input->post('id');

        $data['nome'] = $this->input->post('nome');
        $data['cpf'] = $this->input->post('cpf');
        $data['telefone'] = $this->input->post('telefone');
        $data['rua'] = $this->input->post('rua');
        $data['bairro'] = $this->input->post('bairro');
        $data['numero'] = $this->input->post('numero');
        $data['cidade'] = $this->input->post('cidade');

        $this->db->where('id', $id);

        if ($this->db->update('arrecadadores', $data)) {
            redirect('Arrecadadores/5');
        } else {
            redirect('Arrecadadores/6');
        }
    }

}
