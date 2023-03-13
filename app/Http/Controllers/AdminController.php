<?php

namespace App\Http\Controllers;

use App\Models\Report;
use App\Models\ReportEntry;
use App\Models\ReportHeader;
use App\Models\Tblcitymun;
use App\Models\Lgu;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Response;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Str;
// use Facade\FlareClient\Http\Response;
// use Flasher\Laravel\Http\Response;
// use Flasher\Prime\Response\Response;

class AdminController extends Controller
{
   
    public function create_user()
    {
        return view('admin.create_user');

    }
    public function reports()
    {
    	return view('admin.reports', [
            'reports'  =>  Report::latest()->paginate(6) //paginated
        ]);
    }

    public function upload_report()
    {
    	return view('admin.upload_report');
    }

    public function users()
    {
    	return view('admin.users');
    }

    public function storage()
    {
    	return view('admin.storage');
    }

    public function calendar()
    {
    	return view('admin.calendar');
    }


    public function sample()
    {
    	return view('admin.sample');
    }

    public function view_report(Report $report)
    {
        
        return view('admin.view_report', [
            'report'  =>  $report,
            'headers' => ReportHeader::where('parent_id', $report->id)->first(),
            'entries' => ReportEntry::where('parent_id', $report->id)->get()
            // $user = DB::table('users')->where('name', 'John')->first();
            // 'entries' => ReportEntry::latest()->paginate(6) //paginated
        ]);
    }

    public function lgu()
    {
        $lgu = Lgu::get();

        return view('admin.lgu', [
            // 'lgus' => Lgu::get(),
            'lgus' => DB::table('lgus')
                        // ->join('tblcitymuns', 'lgus.citymun', '=', 'tblcitymuns.citymun_c')
                        // ->leftJoin('tblcitymuns', 'lgus.citymun', '=', 'tblcitymuns.citymun_c')
                        // ->select('lgus.*', 'tblcitymuns.citymun_m')
                        ->get()
        ]);
    }

    public function upload_lgu()
    {

        return view('admin.upload_lgu', [
            'lgus' => Tblcitymun::where('region_c', '04')->get()
        ]);
    }

    public function get_lgu()
    {
        $province = $_GET["province_id"];
      
        $selected_lgus = Tblcitymun::where('province_c', $province)->orderBy('citymun_m', 'DESC')->get();

        return Response::json($selected_lgus);
    }

    public function view_lgu(Request $request)
    {
        $province_id = $request->province_id;

        return view('main.cm-list', [
            'lgus' => DB::select("SELECT id, province, citymun, link_token, capital, population, zip_code, lgu_description, status, created_at, updated_at FROM lgus WHERE province = '".$province_id."' ")
        ]);
    }



    //Delete LGU
    public function destroy(Lgu $lgu)
    {
        $lgu->delete();
        toastr()->success('LGU Deleted Successfully!');
        return redirect('/lgu');
        
       //$report->delete();
       //toastr()->success('Report Deleted Successfully!');
       //return redirect('/reports');

    }

 

    public function view_profile(Request $request)
    {
        dd($request);
        $province_id = $request->province_id;

        return view('main.cm-list', [
            'lgus' => DB::select("SELECT id, province, citymun, link_token, capital, population, zip_code, lgu_description, status, created_at, updated_at FROM lgus WHERE id = '".$province_id."' ")
        ]);
    }


}
