<?php

    class User
    {
        private $id;
        private $nome;
        private $email;
        private $senha;
        private $celular;

        public function setEmail($email)
        {
            $this->email = $email;
        }

        public function setEmail($senha)
        {
            $this->senha = $senha;
        }

        public function setEmail($nome)
        {
            $this->nome = $nome;
        }

        public function setEmail($celular)
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