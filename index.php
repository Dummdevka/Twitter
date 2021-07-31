<?php

// Set up a couple of base defines for our app!
define("BASEDIR", __DIR__);
define("TEMPLATEDIR", BASEDIR . '/views/');
define("URL", "http://localhost/twitter/");

// Require the necessary files
require_once __DIR__ . '/includes/db.php';
require_once __DIR__ . '/includes/templater.php';

// Define some routing (including default routing for index)
$routes = [
    'index',
    'submit',
    'view',
    'delete',
];

$route = strtolower($_GET['page'] ?? 'index');

if ( !in_array($route, $routes) ) {
    $route = 'index';
}

try {
    // Grab the controller and all other requirements (db & templater)
    $host = 'localhost';
    $user = 'user';
    $pass = 'password';

    $db = new Twitter_PDO($host, $user, $pass);
    $templater = new Templater(TEMPLATEDIR);
    require_once BASEDIR . '/controllers/' . $route . '.php';
    $controller = new $route($db, $templater);

    // Run the app =]
    $controller->run();
} catch (Exception $e) {
    http_response_code($e->getCode());
    $templater->view('error', ['exception'=>$e]);
}
