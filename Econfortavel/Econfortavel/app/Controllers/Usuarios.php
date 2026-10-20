<?php
class Usuarios extends Controller{

    public function cadastrar(){
        $this->view('usuarios/cadastrar');;
   }//fim da função cadastrar
    
    public function login(){
        $this->view('usuarios/login');
    }//fim da função cadastrar
    
    public function pg_1(){
       $this->view('usuarios/pg_1');

    }// fim da função pg_1

    public function inicio(){
       $this->view('usuarios/inicio');
    }// fim da função pg_1
    
}//fim da classe Usuarios


