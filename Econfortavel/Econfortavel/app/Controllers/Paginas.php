<?php
class Paginas extends Controller {
    
    public function index() {
        $dados = [
            'titulo' => 'Ecofortável',
            'descricao' => 'Explore destinos incríveis.'
        ];
        $this->view('paginas/home', $dados);
    }

    public function sobre() {
        $dados = [
            'titulo' => 'Sobre Nós',
            'descricao' => 'Conheça o Ecofortável.'
        ];
        $this->view('paginas/sobre', $dados);
    }
     public function destino() {
        $dados = [
            'titulo' => 'SDestino',
            'descricao' => 'Explore nosso destino.'
        ];
        $this->view('paginas/destino', $dados);
    }
    

}//fim da classe Paginas