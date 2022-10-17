<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function me(){
        return [
            'NIS' => 3103120113,
            'Name' => 'Isabella Christiani Rumbewas',
            'Phone' => '082117074772',
            'Class' => 'XII RPL 4'
        ];
    }
};
