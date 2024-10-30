<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\softDeletes;
use App\Http\Controllers\ReportController;

class reports extends Model
{
    use HasFactory, softDeletes;

    protected $guarded = [];
}
