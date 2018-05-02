<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Entidades extends CI_Controller {

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
        $dados['entidades']= $this->db->get('entidades')->result();


        $this->load->view('includes/html_header');
        $this->load->view('includes/menu');
        if($indice==1){
            $data['msg'] = "Entidade Cadastrada com Sucesso.";
            $this->load->view('includes/msg_sucesso',$data);
        }else if($indice==2){
            $data['msg'] = "Não foi possivel cadastrar a Entidade.";
            $this->load->view('includes/msg_erro',$data);
        }else if($indice==3){
            $data['msg'] = "Entidade deletada com Sucesso.";
            $this->load->view('includes/msg_sucesso',$data);
        }else if($indice==4){
            $data['msg'] = "Não foi possivel excluir a Entidade";
            $this->load->view('includes/msg_erro',$data);
        }else if($indice==5){
            $data['msg'] = "O registro foi atualizado com Sucesso.";
            $this->load->view('includes/msg_sucesso',$data);
        }else if($indice==6){
            $data['msg'] = "Não foi possivel atualizar o registro";
            $this->load->view('includes/msg_erro',$data);
        }
        $this->load->view('Entidades/lista_entidades',$dados);
        $this->load->view('includes/html_footer');
    }

    public function cadastro() {
        $this->load->view('includes/html_header');
        $this->load->view('includes/menu');
        $this->load->view('Entidades/cadastro_entidades');
        $this->load->view('includes/html_footer');
    }

    public function cadastrar(){

        $data['nome'] = $this->input->post('nome');
        $data['cnpj'] = $this->input->post('cnpj');
        $data['telefone'] = $this->input->post('telefone');
        $data['email'] = $this->input->post('email');
        $data['endereco'] = $this->input->post('endereco');

        if($this->db->insert('entidades',$data)){
            redirect('Entidades/1');
        } else {
            redirect('Entidades/2');
        }

    }

    public function excluir($id=null){

        $this->db->where('id',$id);

        if($this->db->delete('entidades')){
            redirect('Entidades/3');
        } else {
            redirect('Entidades/4');
        }

    }
    
    public function atualizar($id=null){
        
        $this->db->where('id',$id);
        $data['entidade'] = $this->db->get('entidades')->result();
        
        
        $this->load->view('includes/html_header');
        $this->load->view('includes/menu');
        $this->load->view('Entidades/editar_entidade',$data);
        $this->load->view('includes/html_footer');

    }
    
    public function salvar_atualizacao(){
        $id = $this->input->post('id');
        
        $data['nome'] = $this->input->post('nome');
        $data['cnpj'] = $this->input->post('cnpj');
        $data['telefone'] = $this->input->post('telefone');
        $data['email'] = $this->input->post('email');
        $data['endereco'] = $this->input->post('endereco');

        $this->db->where('id',$id);
        if($this->db->update('entidades',$data)){
            redirect('Entidades/5');
        } else {
            redirect('Entidades/6');
        }

    }
}
