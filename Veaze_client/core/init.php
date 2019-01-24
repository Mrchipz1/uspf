<?php


session_start();
//session_unset();
$_SESSION['id'] = 1;

$GLOBALS['config'] = array(
    'mysql' => array(
        'host' => '127.0.0.1',
        'username' => 'root',
        'password' => '',
        'db' => 'transeaze'
    )
);

spl_autoload_register(function($class) {
    require_once 'classes/' . $class . '.php';
});

require_once 'functions/sanitize.php';

// if(Cookie::exists(Config::get('remember/cookie_name')) && !Session::exists(Config::get('sessions/session_name'))) {
//     $hash = Cookie::get(Config::get('remember/cookie_name'));
//     $hashCheck = DB::getInstance()->get('users_session', array('hash', '=', $hash));

//     if($hashCheck->count()) {
//         $user = new User($hashCheck->first()->user_id);
//         $user->login();
//     }
// }