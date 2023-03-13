<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lgu extends Model
{
    use HasFactory;

    protected $fillable = [
    	'province',
		'citymun',
		'link_token',
		'capital',
		'population',
		'zip_code',
		'lgu_description',
    ];
}
