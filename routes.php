<?php


$router->get('/', 'controllers/index.php');
$router->get('/create', 'controllers/create.php');
$router->post('/branch', 'controllers/store.php');

$router->get('/branch', 'controllers/show.php');
$router->get('/branch/edit', 'controllers/edit.php');
$router->patch('/branch/update', 'controllers/update.php');
$router->delete('/branch', 'controllers/destroy.php');

$router->get('/filter', 'controllers/filter/filter.php');
$router->post('/search', 'controllers/filter/search.php');


