<?php

namespace App\Exports;

use App\Models\PollingStations;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;


class votersExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return PollingStations::all();
    }

    public function headings(): array
    {
        return ["ID", "Station Name", "Number of Voters"];
    }
}
