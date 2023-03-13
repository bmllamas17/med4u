<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tblcitymun extends Model
{
    use HasFactory;

    protected $fillable = [
    	'region_c',
		'province_c',
		'district_c',
		'citymun_c',
		'citymun_m',
		'lgu_type',
		'income',
    ];
}
