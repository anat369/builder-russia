<?php

namespace App\Http\Controllers;

use App\Order;
use App\Service;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.index', [
            'services' => Service::all(),
        ]);
    }

    public function about()
    {
        return view('pages.about');
    }

    public function order(Request $request)
    {
        $this->validate($request, [
            'service_id' => 'required|integer',
            'name' => 'required|max:250',
            'message' => 'required|max:2000',
            'email' => 'required|email',
        ]);

        $phone = preg_replace("/[^,.0-9]/", '', $request->phone);

        $order = new Order([
            'service_id' => $request->service_id,
            'name' => $request->name,
            'phone' => $phone,
            'email' => $request->email,
            'message' => $request->message,
        ]);

        $order->save();

        return redirect()->back()->with('status', 'Ваш заказ принят, спасибо!');
    }
}
