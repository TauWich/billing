<?php
//App Root
define('APP_ROOT', dirname(dirname(__FILE__)));
define('URL_ROOT', '/');
define('URL_SUBFOLDER', '');

// Parse with sections
$ini_array = parse_ini_file("siteconfig", true);

if ($ini_array == null)
{
    $error = ["error" => "Could not find configuration"];
    echo json_encode($error);
    return;
}

if ($_SERVER["SERVER_NAME"] == "127.0.0.1")
{
    define('servername', $ini_array["test"]["servername"]);
    define('username', $ini_array["test"]["username"]);
    define('password', $ini_array["test"]["password"]);
    define('dbname', $ini_array["test"]["dbname"]);
}
else
{
    define('servername', $ini_array["prod"]["servername"]);
    define('username', $ini_array["prod"]["username"]);
    define('password', $ini_array["prod"]["password"]);
    define('dbname', $ini_array["prod"]["dbname"]);
}