<?php

namespace app\controllers;

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

class UserController
{
    public function index(Request $request, Response $response)
    {
        view('user-create',['title'=>'Create User']);

        return $response;
    }

    public function store(Request $request, Response $response)
    {
        dd($request->getParsedBody());
    }
}