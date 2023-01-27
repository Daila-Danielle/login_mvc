<?php

    class LoginController
    {
        public function index()
        {
            $loader = new \Twig\Loader\FilesystemLoader('App/view');
            $twig   = new \Twig\Environment($loader, [
                'cache' => '/path/to/compilation_cache',
                'auto_reload' => true
            ]);
            $template = $twig->load('login.html');

            return $template->render();
        }

        public function check()
        {
            try {

                $user = new User;
                $user->setEmail($_POST['email']);
                $user->setSenha($_POST['senha']);
                $user->validateLogin();
            } catch (\Exception $e) {
                header('Location: http://localhost/login_mvc/login ');
            }


        }
    }