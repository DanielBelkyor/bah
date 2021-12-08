<?php
    //   pega os dados do formulário e exibe na tela 

    // incluir as classes 
    include 'classes/Usuario.class.php';
    include 'classes/UsuarioReal.class.php';
    include 'classes/UsuarioJuridico.class.php';

    // instancia os objetos pessoa física e pessoa júridica 
    $usuario = new PessoaReal();
    $empresa = new PessoaJuridica();

    // atribui os dados do usuário cadastrados no formulário
    $usuario->nome      = $_POST['nome'];
    $usuario->sobrenome = $_POST['sobrenome'];
    $usuario->email     = $_POST['email'];
    $usuario->telefone  = $_POST['telefone'];
    $usuario->endereco  = $_POST['endereco'];
    $usuario->rg        = $_POST['rg'];
    $usuario->cpf       = $_POST['cpf'];

    // atribui os dados da empresa cadastrados no formulário
    $empresa->razaoSocial  = $_POST['razaoSocial'];
    $empresa->nomeFantasia = $_POST['nomeFantasia'];
    $empresa->email        = $_POST['emailEmpresa'];
    $empresa->telefone     = $_POST['telefoneEmpresa'];
    $empresa->endereco     = $_POST['enderecoEmpresa'];
    $empresa->cnpj         = $_POST['cnpj'];

    // exibre os dados na tela
    $usuario->apresentacao();
    $usuario->contatos();
    $empresa->boasVindas( $usuario->nome );
    $empresa->contatos();





?>
exibirD
<?php
    //  cria a classe Usuario
    class Pessoa {
        // atributos
        public $endereco;
        public $telefone;
        public $email;

        // métodos
        function contatos() {
            // exibe na tela os contatos da pessoa
            echo '<h3>';
            echo 'Segue meus contatos:<br />';
            echo 'Endereço:' . $this->endereco . '<br />';
            echo 'Telefone de Contato:' ; $this->telefone . '<br />';
            echo 'E-mail:' . $this->email . '<br />';
            echo '<h3 />';
        } 

    }
?>