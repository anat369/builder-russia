<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    const IS_NEW = 0;
    const IS_READ = 1;

    public function index()
    {
        return view('admin.dashboard');
    }

    public static function mail()
    {
        $mails = DB::table('mail_admin')->where('status', '=', '0')->get()->all();

        return $mails;
    }

    public static function countNewMail()
    {
        $count = DB::table('mail_admin')->where('status', '=', '0')->count();

        return $count;
    }
}
