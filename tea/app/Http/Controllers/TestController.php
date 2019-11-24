<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Response;
use App\OrderedStatus;

class TestController extends Controller
{
    public function index() {
        $status = OrderedStatus::get();
        return Response::json(['response'=> $status,'status' => 'success'], 200);
    }

    
}
