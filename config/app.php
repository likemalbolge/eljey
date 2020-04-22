<?php
session_start();
require_once __DIR__ . '/../vendor/autoload.php';

define('RB', __DIR__ . '/../libs/rb.php');
define('DB', __DIR__ . '/db.php');

use Models\User;

define('BASE_URL', 'http://v95209bx.beget.tech/');
define('ADMIN_URL', 'https://free14.beget.com/phpMyAdmin/');

$pathParts = explode('/', $_SERVER['REQUEST_URI']);
if (!empty($pathParts[1]))
{
    define('CONTROLLER', ucfirst($pathParts[1]));
} else
{
    define('CONTROLLER', null);
}

if (!empty(explode('?', $pathParts[2])[0]))
{
    define('ACTION', explode('?', $pathParts[2])[0]);
} else
{
    define('ACTION', null);
}

define('WEB', 'http://v95209bx.beget.tech/webroot/');

define('ELEMENTS', __DIR__ . '/../src/Views/Elements/');

if (isset($_SESSION['logged_user']))
{
    if ($user = User::getUserById($_SESSION['logged_user']))
    {
        define('USER', $user['id']);
    } else
    {
        define('USER', null);
    }
} else {
    define('USER', null);
}
