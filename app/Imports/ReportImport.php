<?php

namespace App\Imports;

use App\Models\Report;
use Maatwebsite\Excel\Concerns\ToModel;

class ReportImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Report([
           // 'title' => $row[0],
           // 'description' => $row[1],
           // 'frequency' => $row[2],
           // 'year' => $row[3],
           // 'file_name' => $row[4],
        ]);
    }
}
