<?php

namespace App\Exceptions;

use Exception;

class DatabaseException extends Exception
{
    public function report(){

    }

    public function render($request){
        return response()->json([
            'status' => 400,
            'msg' => __('error.exceptionBD')
        ]);
    }
}
