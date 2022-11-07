<?php

namespace App\Exports;

use App\Models\Kcrm;
use Maatwebsite\Excel\Concerns\FromCollection;

class kcrmExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return kcrm::all();
    }
}
