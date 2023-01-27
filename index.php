<?php

    require_once 'App/core/Core.php';

    require_once 'App/controller/LoginController.php';

    require_once 'App/model/User.php';

    require_once 'vendor/autoload.php';

    require_once 'config/conexao.php';

    $core = new Core;
    echo $core->start($_GET);