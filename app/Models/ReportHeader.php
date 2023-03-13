<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReportHeader extends Model
{
    use HasFactory;

    protected $fillable = [
    	'parent_id',
		'report_header_1',
		'report_header_2',
		'report_header_3',
		'report_header_4',
		'report_header_5',
		'report_header_6',
		'report_header_7',
		'report_header_8',
		'report_header_9',
		'report_header_10',
    ];
}
