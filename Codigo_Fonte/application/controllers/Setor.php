<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Setor extends CI_Controller {

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
        if ($this->session->userdata('logado') == false)
            redirect('dashboard/login');
    }

    public function index($indice = null) {
        $this->verifica_sessao();
        $this->db->select('*');
        $dados['setores'] = $this->db->get('setores')->result();


        $this->load->view('includes/html_header');
        $this->load->view('includes/menu');
        if ($indice == 1) {
            $data['msg'] = "Setor Cadastrado com Sucesso.";
            $this->load->view('includes/msg_sucesso', $data);
        } else if ($indice == 2) {
            $data['msg'] = "Não foi possivel cadastrar o Setor.";
            $this->load->view('includes/msg_erro', $data);
        } else if ($indice == 3) {
            $data['msg'] = "Setor deletado com Sucesso.";
            $this->load->view('includes/msg_sucesso', $data);
        } else if ($indice == 4) {
            $data['msg'] = "Não foi possivel excluir o Setor";
            $this->load->view('includes/msg_erro', $data);
        } else if ($indice == 5) {
            $data['msg'] = "O registro foi atualizado com Sucesso.";
            $this->load->view('includes/msg_sucesso', $data);
        } else if ($indice == 6) {
            $data['msg'] = "Não foi possivel atualizar o registro";
            $this->load->view('includes/msg_erro', $data);
        }
        $this->load->view('Setor/lista_setores', $dados);
        $this->load->view('includes/html_footer');
    }

    public function cadastro() {
        $this->verifica_sessao();
        $this->load->view('includes/html_header');
        $this->load->view('includes/menu');
        $this->load->view('Setor/cadastro_setores');
        $this->load->view('includes/html_footer');
    }

    public function cadastrar() {
        $this->verifica_sessao();

        $data['nome'] = $this->input->post('nome');
        $data['cnpj'] = $this->input->post('cnpj');
        $data['telefone'] = $this->input->post('telefone');
        $data['email'] = $this->input->post('email');
        $data['endereco'] = $this->input->post('endereco');

        if ($this->db->insert('setor', $data)) {
            redirect('Setor/1');
        } else {
            redirect('Setor/2');
        }
    }

    public function excluir($id = null) {
        $this->verifica_sessao();

        $this->db->where('id', $id);

        if ($this->db->delete('setor')) {
            redirect('Setor/3');
        } else {
            redirect('Setor/4');
        }
    }

    public function atualizar($id = null) {
        $this->verifica_sessao();
        $this->db->where('id', $id);
        $data['setor'] = $this->db->get('setores')->result();


        $this->load->view('includes/html_header');
        $this->load->view('includes/menu');
        $this->load->view('Setor/editar_setor', $data);
        $this->load->view('includes/html_footer');
    }

    public function salvar_atualizacao() {
        $this->verifica_sessao();
        $id = $this->input->post('id');

        $data['nome'] = $this->input->post('nome');
        $data['cnpj'] = $this->input->post('cnpj');
        $data['telefone'] = $this->input->post('telefone');
        $data['email'] = $this->input->post('email');
        $data['endereco'] = $this->input->post('endereco');

        $this->db->where('id', $id);
        if ($this->db->update('setor', $data)) {
            redirect('Setor/5');
        } else {
            redirect('Setor/6');
        }
    }

}
