<?php
    use Config\Conexao\Conexao;

    class User
    {
        private $id;
        private $nome;
        private $email;
        private $senha;
        private $celular;

        public function validateLogin()
        {
            $conn = Conexao::conectar();
            var_dump($conn);
        }

        public function setEmail($email)
        {
            $this->email = $email;
        }

        public function setSenha($senha)
        {
            $this->senha = $senha;
        }

        public function setNome($nome)
        {
            $this->nome = $nome;
        }

        public function setCelular($celular)
        {
            $this->celular = $celular;
        }

        public function getName()
        {
            return $this->nome;
        }

        public function getEmail()
        {
            return $this->email;
        }

        public function getSenha()
        {
            return $this->senha;
        }

        public function getCelular()
        {
            return $this->celular;
        }




    }