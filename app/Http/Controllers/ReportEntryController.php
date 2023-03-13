<?php

namespace App\Http\Controllers;

use App\Imports\ReportEntriesImport;
use App\Models\Report;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;

class ReportEntryController extends Controller
{
	public $report_id;

    function insert_report_entry(Request $request)
    {
    	
        $formFields = $request->validate([
            'title'                  =>  'required',
            'description'            =>  'required',
            'frequency'              =>  'required',
            'report_file'            =>  'required',
            'report_year'            =>  'required'
        ]);

		$formFields['report_file'] = $request->report_file->getClientOriginalName();

        $report_id = Report::create($formFields);

        DB::table('report_headers')->insert(
            [
                'parent_id' => $report_id->id,
                'report_header_1' => $request->report_header_1,
                'report_header_2' => $request->report_header_2,
                'report_header_3' => $request->report_header_3,
                'report_header_4' => $request->report_header_4,
                'report_header_5' => $request->report_header_5,
                'report_header_6' => $request->report_header_6,
                'report_header_7' => $request->report_header_7,
                'report_header_8' => $request->report_header_8,
                'report_header_9' => $request->report_header_9,
                'report_header_10' => $request->report_header_10

            ]
        );

        Excel::import(new ReportEntriesImport(), $request->report_file);

        toastr()->success('Report Uploaded Successfully!');
        return redirect('/reports');

    }
}
