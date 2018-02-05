<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
class testRequete extends Controller
{
    public function testfunction()
    {
        $json = [
            ['id' => 1, 'name' => 'Dorian' ], [ 'id' => 2, 'name' => 'Vincent' ]
        ];
        header("Access-Control-Allow-Origin: *"); 
        return $json;  
    }  
}

