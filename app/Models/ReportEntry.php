<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReportEntry extends Model
{
    use HasFactory;

    protected $fillable = [
    	'parent_id',
		'province_id',
		'lgu_id',
		'input_1',
		'input_2',
		'input_3',
		'input_4',
		'input_5',
		'input_6',
		'input_7',
		'input_8',
		'input_9',
		'input_10',
		'status',
		'lgu',
		'province',
    ];
}
