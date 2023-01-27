<?php
namespace Config\Conexao;

abstract class Conexao
{
    private static $conn;

    public static function conectar()
    {
       
        if(!self::$conn) {
        #define as informações de conexão com o banco de dados
        define('HOST', '127.0.0.1');
        define('USER', 'root');
        define('PASS', '');
        define('BASE', 'usuarios');

        self::$conn = new \MySQLi(HOST, USER, PASS, BASE);
        if(!self::$conn) {
            echo 'Deu ruim parça!';
        }
        }
        return self::$conn;
    }

}
