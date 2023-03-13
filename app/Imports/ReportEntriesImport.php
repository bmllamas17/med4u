<?php

namespace App\Imports;

use App\Http\Controllers\ReportEntryController;
use App\Models\Report;
use App\Models\ReportEntry;
use App\Models\Tblcitymun;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\ToModel;

class ReportEntriesImport implements ToModel
{

    private $reports;

    public function __construct()
    {
        $this->reports = Report::select('id')->get();

    }

    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {

        $report = $this->reports->max('id');

        return new ReportEntry([
            'parent_id' => $report,
            'province_id' => 0,
            'lgu_id' => 0,
            'input_1'   =>  @$row[2],
            'input_2'   =>  @$row[3],
            'input_3'   =>  @$row[4],
            'input_4'   =>  @$row[5],
            'input_5'   =>  @$row[6],
            'input_6'   =>  @$row[7],
            'input_7'   =>  @$row[8],
            'input_8'   =>  @$row[9],
            'input_9'   =>  @$row[10],
            'input_10'  =>  @$row[10],
            'status'    => 0,
            'created_at' => NOW(),
            'updated_at' => NOW(),
            'lgu'       =>  @$row[0],
            'province'   =>  @$row[1],
        ]);
    }
}
