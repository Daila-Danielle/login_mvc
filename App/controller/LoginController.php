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
            $_POST
        }
    }