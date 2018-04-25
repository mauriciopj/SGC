<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Usuarios extends CI_Controller {

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
    public function index($indice=null) {
        $this->db->select('*');
        $dados['usuarios']= $this->db->get('usuarios')->result();
        
        
        $this->load->view('includes/html_header');
        $this->load->view('includes/menu');
        if($indice==1){
            $data['msg'] = "Usuário Cadastrado com Sucesso.";
            $this->load->view('includes/msg_sucesso',$data);            
        }else if($indice==2){            
            $data['msg'] = "Não foi possivel cadastrar o Usuário.";
            $this->load->view('includes/msg_erro',$data);            
        }
        $this->load->view('Usuarios/lista_usuarios',$dados);
        $this->load->view('includes/html_footer');
    }

    public function cadastro() {
        $this->load->view('includes/html_header');
        $this->load->view('includes/menu');
        $this->load->view('Usuarios/cadastro_usuarios');
        $this->load->view('includes/html_footer');
        
    }
    
    public function cadastrar(){
          
        $data['nome'] = $this->input->post('nome');
        $data['endereco'] = $this->input->post('endereco');
        $data['cpf'] = $this->input->post('cpf');
        $data['senha'] = $this->input->post('senha');
        $data['email'] = $this->input->post('email');
        $data['telefone'] = $this->input->post('telefone');
        $data['tipo'] = $this->input->post('tipo');
        $data['entidade'] = $this->input->post('entidade');
        
        if($this->db->insert('usuarios',$data)){
            redirect('Usuarios/1');
        } else {
            redirect('Usuarios/2');
        }
        
    }
}
