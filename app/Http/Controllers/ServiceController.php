<?php

namespace App\Http\Controllers;

use App\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index()
    {
        return view('pages.services',[
            'services' => Service::all(),
        ]);
    }

    public function showService($slug)
    {
        return view('pages.service-show',[
            'services' => Service::all(),
            'serviceReal' => Service::where('slug', $slug)->firstOrFail(),
        ]);
    }

}
