<?php

namespace App\Http\Controllers;

abstract class Controller
{
    public function successResponse($msg, $data=[], $url='')
    {
        return response()->json([
            'status'    => true,
            'url'       => $url,
            'data'      => $data,
            'message'   => $msg
            ], 200);

    }
    public function errorResponse($msg='', $status=201)
    {
        return response()->json([
            'status'        => false,
            'responsecode'  => $status,
            'message'       => $msg
        ]);
    }
}
