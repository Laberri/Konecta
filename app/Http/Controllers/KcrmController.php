<?php

namespace App\Http\Controllers;

use App\Exports\kcrmExport;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;
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
        $this->modelkcrm = $kcrm;
    }

    public function kcrm(Request $request)
    {
        $kcrm = $this->modelkcrm;
        $buscarpor = $request->get('buscarpor');
        $kcrm = kcrm::where('Fecha_Gestion', 'LIKE', '%' . $buscarpor . '%')->select('*')->paginate(10);
        return view('kcrm', ['kcrm' => $kcrm, 'buscarpor' => $buscarpor]);
    }

    public function exportEcxel()
    {
        return Excel::download(new kcrmExport, 'Exportableecxel.xlsx');
    }


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
}
