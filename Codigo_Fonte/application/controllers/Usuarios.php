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
        }else if($indice==3){
            $data['msg'] = "Usuário excluido com Sucesso.";
            $this->load->view('includes/msg_sucesso',$data);            
        }else if($indice==4){            
            $data['msg'] = "Não foi possivel excluir o Usuário.";
            $this->load->view('includes/msg_erro',$data);            
        }else if($indice==5){
            $data['msg'] = "Usuário atualizado com Sucesso.";
            $this->load->view('includes/msg_sucesso',$data);            
        }else if($indice==6){            
            $data['msg'] = "Não foi possivel atualizar o Usuário.";
            $this->load->view('includes/msg_erro',$data); 
        }
        $this->load->view('Usuarios/lista_usuarios',$dados);
        $this->load->view('includes/html_footer');
    }

    public function cadastro(){
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
    
    public function excluir($id=null){
          
        $this->db->where('id',$id);
        
        if($this->db->delete('usuarios')){
            redirect('Usuarios/3');
        } else {
            redirect('Usuarios/4');
        }
        
    }
    
    public function atualizar($id=null){
        $this->db->where('id',$id);
        $data['usuarios'] = $this->db->get('usuarios')->result();
        
        $this->load->view('includes/html_header');
        $this->load->view('includes/menu');
        $this->load->view('usuarios/editar_usuarios',$data);
        $this->load->view('includes/html_footer');      
        
    }
    
    public function salvar_atualizacao(){
        
        $id = $this->input->post('id');

        $data['nome'] = $this->input->post('nome');
        $data['endereco'] = $this->input->post('endereco');
        $data['cpf'] = $this->input->post('cpf');
        $data['email'] = $this->input->post('email');
        $data['telefone'] = $this->input->post('telefone');
        $data['tipo'] = $this->input->post('tipo');
        $data['entidade'] = $this->input->post('entidade');
        
        $this->db->where('id', $id);
        
        if($this->db->update('usuarios',$data)){
            redirect('Usuarios/5');
        } else {
            redirect('Usuarios/6');
        }
        
    }
    
}
