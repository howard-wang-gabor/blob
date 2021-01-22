<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
}
$posts = array(
    array(
        'id' => 1,
        'title' => 'post1',
        'content' => 'content2',
    ),
    array(
        'id' => 2,
        'title' => 'post12',
        'content' => 'content2',
    ),
    array(
        'id' => 1,
        'title' => 'post1',
        'content' => 'content2',
    ),
);