<?php
    // cria a classe usuário jurídico que herda a classe pessoa
    class PessoaJuridico extends Pessoa {
        // atributos 
        public $razaoSocial;
        public $nomeFantasia;
        public $cnpj;

        // métodos
        function boasVindas($nome) {
            echo '<h3>';
            echo 'Seja bem vindo ' . $nome . 'á empresa ' . $this->nomeFantasia . '<br />';
            echo 'Razão Social: ' . $this->telefone . '<br />';
            echo '</h3>';
        }
    }
?>