<?php

namespace App\Http\Controllers;

use App\Models\Kcrm;
use Illuminate\Http\Request;

class KcrmController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function index(Request $request)
    {
        if ($request)
        {
            $query=trim($request->get('searchdate'));
            $kcrm=DB::table('kcrm')
            return view('')
        }
    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function kcrm()
    {
        return view('kcrm');
    }

 
    }
}

