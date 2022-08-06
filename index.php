<?php
//  PDO - Database  
require '_init.php';

use App\Core\Router;
use App\Core\Request;
use App\Controllers\TaskContoller;

Router::make()
->get('',[TaskContoller::class, 'index'])
->get('insta',[TaskContoller::class, 'insta'])
->get('task/delete',[TaskContoller::class, 'delete'])
->get('task/update',[TaskContoller::class, 'update'])
->post('task/create',[TaskContoller::class, 'create'])
->resolve(Request::uri(), Request::method());
