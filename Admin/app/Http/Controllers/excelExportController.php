<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exports\votersExport;
use Maatwebsite\Excel\Facades\Excel;

class excelExportController extends Controller
{
    
    public function export()   
    {  
        return Excel::download(new votersExport, 'voters.xlsx');  
    } 

}
