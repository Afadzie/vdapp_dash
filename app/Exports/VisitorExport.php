<?php

namespace App\Exports;

use App\visitor;
use Maatwebsite\Excel\Concerns\FromCollection;

class VisitorExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return visitor::all();
    }
}
