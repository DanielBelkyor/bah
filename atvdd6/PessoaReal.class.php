<?php
    // cria a classe da pessoa física que é uma subclasse de Pessoa
    class PessoaReal extends Pessoa {
        // atributos
        public $nome;
        public $sobrenome;
        public $rg;
        public $cpf;

        // métodos
        function apresentacao() {
            echo '<h3>';
            echo 'Olá, meu nome é ' . $this->nome . $this->sobrenome;
            echo '. Minha identidade é ' . $this->rg;
            echo ' e meu CPF é ' . $this->cpf . '.';
            echo '</h3>';
        }
    }
?>