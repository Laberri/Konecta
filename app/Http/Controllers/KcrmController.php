<?php

namespace App\Http\Controllers;

use App\Models\Kcrm;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Return_;

class KcrmController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function kcrm()
    {
        {
            $kcrms= Kcrm::table('kcrms')
                    ->select('kcrms.*')
                    ->orderby('idKCRM','DESC')
                    ->get();

            return view('kcrms') ->with('kcrms', $kcrms);
        }
    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
   

 
}

