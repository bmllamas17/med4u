<?php

namespace App\Imports;

use App\Http\Controllers\ContactUsController;
use App\Models\ContactUs;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\ToModel;

class ContactUsImport implements ToModel
{
    private $concerns;
   
    public function __construct()
    {
        $this->concerns = ContactUs::select('id')->get();

    }

    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */

    public function model(array $row)
    {

        $concern = $this->concerns->max('id');

        return new ContactUs([
            'name'          =>  @$row[1],
            'designation'   =>  @$row[2],
            'email'         =>  @$row[3],
            'concerns'      =>  @$row[4],
            'created_at'    =>  NOW(),
        ]);
    }
}
