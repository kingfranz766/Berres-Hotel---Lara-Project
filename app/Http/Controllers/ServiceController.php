<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth;
use App\Models\Service;

class ServiceController extends Controller
{
    public function index(Request $request)
    {   
        $service1 = Service::find(1);
        $service2 = Service::find(2);
        $service3 = Service::find(3);
        $service4 = Service::find(4);
        $service5 = Service::find(5);
        return view('berres.services.all_services', compact('service1', 'service2', 'service3', 'service4', 'service5'));
    }
}