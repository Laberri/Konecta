<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kcrm;
use hash;
use PhpParser\Node\Stmt\Return_;

class KcrmController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(Kcrm $kcrm)
    {
        $this->middleware('auth');
        $this->modelkcrm=$kcrm;
    }

    public function kcrm()
    {
        {
            $kcrms= $this->modelkcrm
                    ->select('*')
                    ->orderby('idKCRM','DESC')
                    ->get();
            return view('kcrm') ->with(['kcrm'=> $kcrms]);
        }
    }


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
    */
   
}