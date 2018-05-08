<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Colaboradores extends CI_Controller {

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
        $dados['colaboradores']= $this->db->get('colaboradores')->result();
        
        
        $this->load->view('includes/html_header');
        $this->load->view('includes/menu');
        if($indice==1){
            $data['msg'] = "Colaborador Cadastrado com Sucesso.";
            $this->load->view('includes/msg_sucesso',$data);            
        }else if($indice==2){            
            $data['msg'] = "Não foi possivel cadastrar o Colaborador.";
            $this->load->view('includes/msg_erro',$data);            
        }else if($indice==3){
            $data['msg'] = "Colaborador excluido com Sucesso.";
            $this->load->view('includes/msg_sucesso',$data);            
        }else if($indice==4){            
            $data['msg'] = "Não foi possivel excluir o Colaborador.";
            $this->load->view('includes/msg_erro',$data);            
        }else if($indice==5){
            $data['msg'] = "Colaborador atualizado com Sucesso.";
            $this->load->view('includes/msg_sucesso',$data);            
        }else if($indice==6){            
            $data['msg'] = "Não foi possivel atualizar o Colaborador.";
            $this->load->view('includes/msg_erro',$data); 
        }
        $this->load->view('colaboradores/lista_colaboradores',$dados);
        $this->load->view('includes/html_footer');
    }

    public function cadastro(){
        $this->load->view('includes/html_header');
        $this->load->view('includes/menu');
        $this->load->view('colaboradores/cadastro_colaboradores');
        $this->load->view('includes/html_footer');
        
    }
    
    public function cadastrar(){
          
        $data['nomeCola'] = $this->input->post('nomeCola');
        $data['enderecoCola'] = $this->input->post('enderecoCola');
        $data['cpfCola'] = $this->input->post('cpfCola');
        $data['emailCola'] = $this->input->post('emailCola');
        $data['telefoneCola'] = $this->input->post('telefoneCola');
        $data['entidadeCola'] = $this->input->post('entidadeCola');
        $data['valorDoadoCola'] = $this->input->post('valorDoadoCola');
        
        if($this->db->insert('colaboradores',$data)){
            redirect('colaboradores/1');
        } else {
            redirect('colaboradores/2');
        }
        
    }
    
    public function excluir($idCola=null){
          
        $this->db->where('idCola',$idCola);
        
        if($this->db->delete('colaboradores')){
            redirect('colaboradores/3');
        } else {
            redirect('colaboradores/4');
        }
        
    }
    
    public function atualizar($idCola=null){
        $this->db->where('idCola',$idCola);
        $data['colaboradores'] = $this->db->get('colaboradores')->result();
        
        $this->load->view('includes/html_header');
        $this->load->view('includes/menu');
        $this->load->view('colaboradores/editar_colaboradores',$data);
        $this->load->view('includes/html_footer');      
        
    }
    
    public function salvar_atualizacao(){
        
        $idCola = $this->input->post('idCola');

        $data['nomeCola'] = $this->input->post('nomeCola');
        $data['enderecoCola'] = $this->input->post('enderecoCola');
        $data['cpfCola'] = $this->input->post('cpfCola');
        $data['emailCola'] = $this->input->post('emailCola');
        $data['telefoneCola'] = $this->input->post('telefoneCola');
        $data['entidadeCola'] = $this->input->post('entidadeCola');
        $data['valorDoadoCola'] = $this->input->post('valorDoadoCola');
        
        $this->db->where('idCola', $idCola);
        
        if($this->db->update('colaboradores',$data)){
            redirect('colaboradores/5');
        } else {
            redirect('colaboradores/6');
        }
        
    }
    
}
