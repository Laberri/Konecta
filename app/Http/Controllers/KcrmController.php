<?php

namespace App\Http\Controllers;

use App\Exports\kcrmExport;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;
use App\Models\Kcrm;
use hash;
use PhpParser\Node\Stmt\Return_;
use PHPUnit\Util\Test;

class KcrmController extends Controller
{
    public function __construct(Kcrm $kcrm)
    {
        $this->middleware('auth');
        $this->modelkcrm = $kcrm;
    }

    /** Función para exportar la base de datos de mysql */
    public function kcrm(Request $request)
    {
        $kcrm = $this->modelkcrm;
        $buscarpor = $request->get('buscarpor');
        $kcrm = kcrm::where('Fecha_Gestion', 'LIKE', '%' . $buscarpor . '%')->select('*')->paginate(10);
        return view('kcrm', ['kcrm' => $kcrm, 'buscarpor' => $buscarpor]);
    }

    /** Función para exportar a Excel */
    public function exportEcxel()
    {
        return Excel::download(new kcrmExport, 'Exportable.xlsx');
    }
        
    
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
}
